<?php
//=====================================================================
// Export des liens d'une catégorie
//=====================================================================

require __DIR__ . '/src/bootstrap.php';
include_once __DIR__ .'/fonctions/fonctions.php';


$acces = 'L';

$tab_variables = array('annuler', 'Horigine');
foreach ($tab_variables as $nom_variables) {
	if (isset($_POST[$nom_variables])) $$nom_variables = $_POST[$nom_variables];
	else $$nom_variables = '';
}
// Sécurisation des variables postées
$annuler  = Secur_Variable_Post($annuler, strlen($lib_Retour), 'S');
$Horigine = Secur_Variable_Post($Horigine, 100, 'S');

$Categ = Recup_Variable('Categ', 'S');// Recup des variables passées dans l'URL : // Catégorie des liens à extraire

$titre = LG_LINKS_EXTRACT . ' ' . stripcslashes($Categ);     // Titre pour META
$x = Lit_Env();
include_once __DIR__ .'/fonctions/pages.php';
$niv_requis = 'G';

if ($annuler == $lib_Retour) $annuler = $lib_Annuler; // On retravaille le libellé du bouton pour effectuer le retour...
if (($SiteGratuit) and (!$Premium)) Retour_Ar(); // Page interdite sur les gratuits non Premium
if ($bt_An) Retour_Ar(); // Retour sur demande d'annulation

$compl = Ajoute_Page_Info(600, 150);
Insere_Haut(my_html($titre), $compl, 'Export_Liens', $Categ);

$req = 'select type_lien, description, URL from ' . nom_table('liens') . ' where type_lien="' . $Categ . '" order by description';
$res = lect_sql($req);
$nb_enr = $res->RowCount();
$plu = pluriel($nb_enr);
echo '<br />' . $nb_enr . my_html(' ' . LG_LINKS_EXTRACT_RES1 . $plu . ' ' . LG_LINKS_EXTRACT_RES2 . $plu) . '<br />';

if ($nb_enr > 0) {
	$champs = get_fields($req, true);
	$nb_champs = count($champs);

	// Ouverture du fichier et écriture de l'entête
	$gz = false;
	$_fputs = ($gz) ? @gzputs : @fputs;
	$nom_fic = $chemin_exports . 'export_liens';
	$nom_fic .= '.csv';
	$fp = fopen($nom_fic, 'w+');
	if ($fp) {

		ecrire($fp, LG_LINKS_EXTRACT_HEADER);		//Type de lien;Description;URL

		while ($row = $res->fetch(PDO::FETCH_NUM)) {
			$ligne = '';
			for ($nb = 0; $nb < $nb_champs; $nb++) {
				$contenu = $row[$nb];
				// On remplace les doubles quotes par des simples
				$contenu = str_replace('"', "'", $contenu);
				$ligne .= '"' . $contenu . '";';
			}
			//echo $ligne.'<br />';
			ecrire($fp, $ligne);
		}

		if ($nb_enr > 0) {
			fclose($fp);
			echo '<br />' . my_html($LG_csv_available_in) . ' <a href="' . $nom_fic . '">' . $nom_fic . '</a><br />' . "\n";
		}
	}
	// On n'a pas pu lire le fichier...
	else {
		echo '<br />';
		$Message = my_html(LG_LINKS_EXTRACT_ERROR1 . ' ' . $nom_fic . ' ' . LG_LINKS_EXTRACT_ERROR2);
		Affiche_Stop($Message);
	}
}

Bouton_Retour($lib_Retour, '?' . Query_Str());
Insere_Bas($compl);

?>
</body>

</html>