<?php
//====================================================================
// 
//  Affichage de la liste des documents éventuellement par type
//
// (c) Gérard 2009
// Ajouts JLS 2010
// UTF-8
//=====================================================================

session_start();

include('fonctions.php');
$acces = 'L';                          // Type d'accés de la page : (M)ise à jour, (L)ecture
$titre = $LG_Menu_Title['Documents_List'];        // Titre pour META
$x = Lit_Env();
$niv_requis = 'I';					   // Page réservée à partir du profil invité
include('Gestion_Pages.php');

// Verrouillage de la gestion des documents sur les gratuits non Premium
if (($SiteGratuit) and (!$Premium)) Retour_Ar();

$compl = Ajoute_Page_Info(600, 150);

Insere_Haut(my_html($titre), $compl, 'Liste_Documents', '');

// Lien direct sur le dernier document saisi
if ($_SESSION['estGestionnaire']) {
	include('fonctions_maj.php');
	$MaxRef = Nouvel_Identifiant('id_document', 'documents') - 1;
}

// Récupération du type sélectionné sur l'affichage précédent
$defaut = '^^^^';
$TypeEv = '';
if (isset($_POST['TypeEv'])) $TypeEv = $_POST['TypeEv'];
if ($TypeEv == $defaut) $TypeEv = '';

$sql = 'select distinct d.id_type_document, Libelle_Type ' .
	'from ' . nom_table('documents') . ' d , ' . nom_table('types_doc') . ' t ' .
	'where d.id_type_document = t.id_type_document ' .
	'order by Libelle_Type';
//  
echo '<form action="' . my_self() . '" method="post">' . "\n";
echo '<table border="0" width="50%" align="center">' . "\n";
echo '<tr align="center" class="rupt_table">';
echo '<td width="50%">' . my_html(LG_DOC_LIST_TYPE) . LG_SEMIC . "\n";
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
echo '<td width="50%"><input type="submit" value="' . $LG_modify_list . '"/></td>' . "\n";
echo '</tr>' . "\n";
echo '</table>' . "\n";
echo '</form>' . "\n";

$crit_type = '';
if ($TypeEv != '') $crit_type = ' and d.id_type_document = "' . $TypeEv . '"';

// Constitution de la requête d'extraction
$requete = 'select id_Document,Titre,Nature_Document,Diff_Internet,Nom_Fichier ' .
	'FROM ' . nom_table('documents') . ' d,' . nom_table('types_doc') . ' t ' .
	'WHERE d.id_type_document = t.id_type_document ' .
	$crit_type .
	' ORDER BY Titre';
$result = lect_sql($requete);

// Lien direct sur le dernier evenement saisi
if ($_SESSION['estGestionnaire']) {
	if ($MaxRef > 0) {
		echo '<a href="Edition_Document.php?Reference=' . $MaxRef .
			'">' . my_html(LG_DOC_LIST_LAST) . '</a><br />';
	}
	// Possibilité d'insérer un document
	echo my_html(LG_DOC_LIST_ADD_1) . LG_SEMIC . Affiche_Icone_Lien('href="Edition_Document.php?Reference=-1"', 'ajouter', $LG_add) . ' ; ';
	echo my_html(LG_DOC_LIST_ADD_MANY) . LG_SEMIC . Affiche_Icone_Lien('href="Create_Multiple_Docs.php"', 'ajout_multiple', LG_DOC_LIST_ADD_MANY_TIP) . '<br /><br />' . "\n";
}
//
//  Affichage des documents
if ($result->rowCount() > 0) {
	// Optimisation : pr�paration echo des images
	$echo_modif = '<img src="' . $chemin_images . $Icones['fiche_edition'] . '" border="0" alt="' . $LG_modify . '"  title="' . $LG_modify . '"/></a>';

	$premier = 1;
	while ($enreg = $result->fetch(PDO::FETCH_ASSOC)) {
		$refDoc = $enreg['id_Document'];
		$x_Titre = my_html($enreg['Titre']);
		$affiche = false;
		if (($enreg['Diff_Internet'] == 'O') or ($_SESSION['estGestionnaire'])) {
			$affiche = true;
		}
		if ($affiche) {
			echo '<a href="Fiche_Document.php?Reference=' . $refDoc . '">' . $x_Titre . '</a>';
		} else {
			echo $x_Titre;
		}
		echo ' (' . $Natures_Docs[$enreg['Nature_Document']] . ")\n";
		if ($affiche) {
			echo ' <a href="Edition_Document.php?Reference=' . $refDoc . '">' . $echo_modif;
			$le_type = Get_Type_Mime($enreg['Nature_Document']);
			$chemin_docu = get_chemin_docu($enreg['Nature_Document']);
			echo '  ' . Affiche_Icone_Lien('href="' . $chemin_docu . $enreg['Nom_Fichier'] . '" type="' . $le_type . '"', 'oeil', LG_DOC_LIST_DISPLAY, 'n');
		}
		echo '<br />' . "\n";
	}
}
Insere_Bas($compl);
?>
</body>

</html>