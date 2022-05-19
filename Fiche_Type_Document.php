<?php

//=====================================================================
// Affichage d'un type de document 
//=====================================================================

session_start();

include_once __DIR__ . '/fonctions/fonctions.php';
include_once __DIR__ . '/fonctions/pages.php';

$acces = 'L';								// Type d'accès de la page : (M)ise à jour, (L)ecture
$titre = 'Fiche d\'un type de document';	// Titre pour META

$tab_variables = array('annuler');
foreach ($tab_variables as $nom_variables) {
	if (isset($_POST[$nom_variables])) $$nom_variables = $_POST[$nom_variables];
	else $$nom_variables = '';
}

$annuler  = Secur_Variable_Post($annuler, strlen($lib_Retour), 'S');// Sécurisation des variables postées

if ($annuler == $lib_Retour) $annuler = $lib_Annuler;// On retravaille le libellé du bouton pour effectuer le retour...

$niv_requis = 'G'; // Fonction réservée au gestionnaire
$x = Lit_Env();
$Code = Recup_Variable('code', 'N');// Recup de la variable passée dans l'URL : type de document

$req_sel = 'select * from ' . nom_table('types_doc') . ' where Id_Type_Document = \'' . $Code . '\' limit 1';

if ($bt_An) Retour_Ar();// Retour sur demande d'annulation
else {

	// type inconnu, retour...
	if (!$enreg_sel) Retour_Ar();

	$enreg2 = $enreg_sel;
	Champ_car($enreg2, 'Libelle_Type');

	$compl = Ajoute_Page_Info(600, 150);
	$compl .= '<a href="Edition_Type_Document.php?code=' . $Code . '">' . Affiche_Icone('fiche_edition', my_html($LG_modify)) . '</a>' . "\n";

	Insere_Haut($titre, $compl, 'Fiche_Type_Document', $Code);

	echo '<br />';
	$larg_titre = 25;
	echo '<table width="70%" class="table_form">' . "\n";

	colonne_titre_tab(LG_DOC_TYPE_LABEL);
	echo $enreg2['Libelle_Type'] . '</td></tr>' . "\n";

	echo '</table><br />' . "\n";

	//Affichage des documents du type
	$req = 'select  Id_Document, Nature_Document, Titre from ' . nom_table('documents') . ' where Id_Type_Document = ' . $Code;
	$result = lect_sql($req);
	if ($result->rowCount() > 0) {
		$icone_mod = '"><img src="' . $chemin_images . $Icones['fiche_edition'] . '" border="0" alt="' . $LG_modify . '"/>';
		echo '<br />' . "\n";
		echo '<fieldset>';
		aff_legend(LG_DOC_DOCS);
		while ($enreg = $result->fetch(PDO::FETCH_NUM)) {
			echo '<a href="Fiche_Document.php?Reference=' . $enreg[0] . '">'
				. my_html($enreg[2]) . ' (' . $Natures_Docs[$enreg[1]] . ')</a>'
				. '&nbsp;<a href="Edition_Document.php?Reference=' . $enreg[0] . $icone_mod . '</a><br />'
				. "\n";
		}
		echo '</fieldset>' . "\n";
	}

	// Formulaire pour le bouton retour
	Bouton_Retour($lib_Retour, '?' . $_SERVER['QUERY_STRING']);

	Insere_Bas($compl);
}

?>
</body>

</html>