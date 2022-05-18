<?php
//====================================================================
//  Affichage de la liste des évènements éventuellement par type
//=====================================================================

// Gestion standard des pages
session_start();
include('fonctions.php');
$acces = 'L';						  // Type d'accès de la page : (M)ise à jour, (L)ecture

$actu = Recup_Variable('actu', 'C', 'xo');
$actualites = ($actu === 'o' ? true : false);
$prof = Recup_Variable('prof', 'C', 'xo');
$professions = ($prof === 'o' ? true : false);

$titre = $LG_Menu_Title['Event_List'];	   // Titre pour META
if ($actualites) $titre = $LG_Menu_Title['News_List'];
if ($professions) $titre = $LG_Menu_Title['Jobs_List'];

$x = Lit_Env();
$niv_requis = 'P';						// Page réservée au profil privilégié
include('Gestion_Pages.php');		  // Appel de la gestion standard des pages

$compl = Ajoute_Page_Info(600, 200);
Insere_Haut(my_html($titre), $compl, 'Liste_Evenements', '');

$n_evenements = nom_table('evenements');
$n_personnes = nom_table('personnes');
$n_participe = nom_table('participe');
$n_concerne_objet = nom_table('concerne_objet');
$n_unions = nom_table('unions');

// Optimisation : préparation echo des images
$texte = $LG_add;
$echo_modif = '<img src="' . $chemin_images . $Icones['fiche_edition'] . '" border="0" alt="' . $texte . '" title="' . $texte . '"/></a>';

// Lien direct sur le dernier évènement saisi et possibilité d'insérer un évènement
if ($est_gestionnaire) {
	$MaxRef = 0;

	$sql = 'SELECT Reference, Titre FROM ' . $n_evenements . ' a ' .
		'WHERE a.Reference = ( SELECT max( Reference ) FROM ' . $n_evenements . ')';
	$resmax = lect_sql($sql);
	$enrmax = $resmax->fetch(PDO::FETCH_NUM);
	$MaxRef = $enrmax[0];
	// Lien direct sur le dernièr évènement saisi
	if ($MaxRef > 0) {
		echo my_html(LG_EVENT_LIST_lAST) . LG_SEMIC . '<a href="Fiche_Evenement.php?refPar=' . $MaxRef . '">' .
			my_html($enrmax[1]) . '</a>&nbsp;';
		echo '&nbsp;<a href="Edition_Evenement.php?refPar=' . $MaxRef . '">' . $echo_modif . '<br />' . "\n";
	}
	// Possibilité d'insérer un evenement
	echo my_html($LG_Menu_Title['Event_Add']) . LG_SEMIC . Affiche_Icone_Lien('href="Edition_Evenement.php?refPar=-1"', 'ajouter', $LG_add) . '<br /><br />' . "\n";
}

// Récupération du type sélectionné sur l'affichage précédent
$defaut = '^^^^';
$TypeEv = '';

if ((!$actualites) and (!$professions)) {
	if (isset($_POST['TypeEv'])) $TypeEv = $_POST['TypeEv'];
	if ($TypeEv == $defaut) $TypeEv = '';

	$sql = 'select distinct e.Code_Type, t.Libelle_Type ' .
		'from ' . $n_evenements . ' e , ' . nom_table('types_evenement') . ' t ' .
		'where e.Code_Type = t.Code_Type ' .
		'order by t.Libelle_Type';

	echo '<form action="' . my_self() . '" method="post">' . "\n";
	echo '<table border="0" width="50%" align="center">' . "\n";
	echo '<tr align="center" class="rupt_table">';
	echo '<td width="50%">' . my_html(LG_EVENT_LIST_TYPE) . LG_SEMIC . "\n";
	echo '<select name="TypeEv">' . "\n";
	echo '<option value="' . $defaut . '">' . my_html($LG_All) . '</option>' . "\n";
	if ($res = lect_sql($sql)) {
		while ($row = $res->fetch(PDO::FETCH_NUM)) {
			echo '<option value="' . $row[0] . '"';
			if ($TypeEv == $row[0]) {
				echo ' selected="selected"';
			}
			echo '>' . my_html($row[1]) . '</option>' . "\n";
		}
	}
	$res->closeCursor();
	echo '</select>' . "\n";
	echo '</td>' . "\n";
	echo '<td width="50%"><input type="submit" value="' . my_html($LG_modify_list) . '"/></td>' . "\n";
	echo '</tr>' . "\n";
	echo '</table>' . "\n";
	echo '</form>' . "\n";
}

$crit_type = '';
if ($TypeEv != '') $crit_type = ' and e.Code_Type = "' . $TypeEv . '"';
if ($actualites) $crit_type = ' and e.Code_Type = "AC3U"';
if ($professions) $crit_type = ' and e.Code_Type = "OCCU"';

// Constitution de la requête d'extraction
$requete = 'SELECT e.Reference , e.Titre , t.Objet_Cible, t.Code_Type ' .
	'from ' . $n_evenements . ' e , ' . nom_table('types_evenement') . ' t ' .
	'where e.Code_Type = t.Code_Type ' .
	$crit_type .
	' ORDER BY e.Titre';
$result = lect_sql($requete);

//  Affichage des evenements
if ($result->rowCount() > 0) {

	$premier = 1;
	while ($enreg = $result->fetch(PDO::FETCH_ASSOC)) {
		$ref_evt = $enreg['Reference'];
		$page = 'Fiche_Evenement';
		if (($actualites) or ($enreg['Code_Type'] == 'AC3U')) $page = 'Fiche_Actualite';
		echo '<a href="' . $page . '.php?refPar=' . $ref_evt . '">' . my_html($enreg['Titre']) . "</a>\n";

		$cible = $enreg['Objet_Cible'];
		// Si l'on n'affiche pas tous les types d'évènements, on va chercher le sinformations sur les personnes
		if ($TypeEv != '') {
			// L'évènement pointe sur une personne
			if ($cible == 'P') {
				$req2 = 'SELECT p.Reference, p.Nom, p.Prenoms, p.Diff_Internet  ' .
					'from ' . $n_personnes . ' p,' . $n_participe . ' q ' .
					'where p.Reference = q.Personne ' .
					'and q.Evenement = ' . $ref_evt;
				$resP = lect_sql($req2);
				$prems = true;
				if ($resP->rowCount() > 0) {
					echo '(';
					while ($row = $resP->fetch(PDO::FETCH_NUM)) {
						if (($row[3] == 'O') or ($est_privilegie)) {
							if (!$prems) echo ', ';
							else $prems = false;
							echo my_html($row[2] . ' ' . $row[1]);
						} else echo '- ';
					}
					echo ')';
				}
			}

			// L'évènement pointe sur une filiation
			if ($cible == 'F') {
				// Vu que l'identifiant est celui de la filiation, on peut s'en passer dans la table
				$req2 = 'SELECT p.Reference, p.Nom, p.Prenoms, p.Diff_Internet  ' .
					'from ' . $n_personnes . ' p,' . $n_concerne_objet . ' c ' .
					'where ' . $ref_evt . ' = c.Evenement and c.Type_Objet = \'F\' ' .
					' and p.Reference = c.Reference_Objet';
				$resP = lect_sql($req2);
				if ($resP->rowCount() > 0) {
					echo '(';
					$prems = true;
					while ($row = $resP->fetch(PDO::FETCH_NUM)) {
						if (($row[3] == 'O') or ($est_privilegie)) {
							if (!$prems) echo ', ';
							else $prems = false;
							echo my_html($row[2] . ' ' . $row[1]);
						} else echo '- ';
					}
					echo ')';
				}
			}

			// L'évènement pointe sur une union
			if ($cible == 'U') {
				// Vu que l'identifiant est celui de la filiation, on peut s'en passer dans la table
				$req2 = 'SELECT m.Reference, m.Nom, m.Prenoms, m.Diff_Internet,  ' .
					'f.Reference, f.Nom, f.Prenoms, f.Diff_Internet ' .
					'from ' . $n_personnes . ' m,' . $n_personnes . ' f,' .
					$n_concerne_objet . ' c, ' .
					$n_unions . ' u ' .
					'where ' . $ref_evt . ' = c.Evenement and c.Type_Objet = \'U\' ' .
					' and u.Reference = c.Reference_Objet ' .
					' and m.Reference = u.Conjoint_1 ' .
					' and f.Reference = u.Conjoint_2 ';
				$resP = lect_sql($req2);
				if ($resP->rowCount() > 0) {
					echo '(';
					while ($row = $resP->fetch(PDO::FETCH_NUM)) {
						if (($row[3] == 'O') or ($est_privilegie)) {
							echo my_html($row[2] . ' ' . $row[1]) . ' ';
						} else echo '- ';
						echo ' x ';
						if (($row[7] == 'O') or ($est_privilegie)) {
							echo my_html($row[6] . ' ' . $row[5]) . ' ';
						} else echo '- ';
					}
					echo ')';
				}
			}
		}

		if ($est_gestionnaire) {
			$ajout = '';
			if (($actualites) or ($enreg['Code_Type'] == 'AC3U')) $ajout = '&amp;actu=o';
			echo '&nbsp;<a href="Edition_Evenement.php?refPar=' . $ref_evt . $ajout . '">' . $echo_modif . "\n";
		}
		echo '<br />';
	}
}
Insere_Bas($compl);
?>
</body>

</html>