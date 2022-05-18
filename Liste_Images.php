<?php

//=====================================================================
// Liste des images d'une personne, ville...
// (c) JLS
// UTF-8
//=====================================================================

session_start();

include('fonctions.php');
$acces = 'L';                          // Type d'accès de la page : (M)ise à jour, (L)ecture

$tab_variables = array('annuler', 'Horigine');
foreach ($tab_variables as $nom_variables) {
	if (isset($_POST[$nom_variables])) $$nom_variables = $_POST[$nom_variables];
	else $$nom_variables = '';
}
// Sécurisation des variables postées
$annuler  = Secur_Variable_Post($annuler, 10, 'S');
$Horigine = Secur_Variable_Post($Horigine, 100, 'S');

// On retravaille le libellé du bouton pour effectuer le retour...
if ($annuler == $lib_Retour) $annuler = 'Annuler';

$titre = $LG_Menu_Title['Image_List'];		// Titre pour META
$x = Lit_Env();
include('Gestion_Pages.php');

// Retour sur demande d'annulation
if ($bt_An) Retour_Ar();

// Recup des variables passées dans l'URL : type de référence et référence
$Type_Ref = Recup_Variable('Type_Ref', 'C', 'PFUVE');
$Refer = Recup_Variable('Refer', 'N');

$compl = Ajoute_Page_Info(600, 150);
Insere_Haut($titre, $compl, 'Liste_Images', '');

$sql = 'select * from ' . nom_table('images') .
	' where Reference = ' . $Refer .
	" and Type_Ref = '" . $Type_Ref . "'";
$res = lect_sql($sql);

$presence = 0;

while ($row = $res->fetch(PDO::FETCH_ASSOC)) {

	// Entête du tableau sur la première ligne
	if (!$presence) {
		echo '<table width="95%" border="0" class="classic" align="center">' . "\n";
		echo '<tr>' . "\n";
		echo '<th width="45%">' . $LG_Ch_Image_Title . '</th>' . "\n";
		echo '<th width="45%">' . $LG_Ch_Image . '</th>' . "\n";
		if ($est_contributeur) echo "<th> </th>\n";
		echo "  </tr>\n";
	}

	$presence = 1;
	$image = $chemin_images_util . $row['nom'];
	echo '<tr align="center" bgcolor="#F4F0EC">' . "\n";
	echo '<td align="left">' . my_html($row['Titre']) . '</td>' . "\n";
	echo '<td valign="middle">';
	if ($row['Defaut'] == 'O') {
		$texte = $LG_Ch_Image_Default;
		echo '<img id="imgDefaut" src="' . $chemin_images . $Icones['image_defaut'] . '" alt="' . $texte . '" title="' . $texte . '"/> ' . "\n";
	}
	Aff_Img_Redim_Lien($image, 200, 200);
	echo '</td>';
	if ($est_contributeur) {
		echo '<td valign="middle">' . Affiche_Icone_Lien('href="Edition_Image.php?ident_image=' . $row['ident_image'] . '&amp;Reference=' . $Refer . '&amp;Type_Ref=' . $Type_Ref . '"', 'fiche_edition', 'Modifier l\'image') . '</td>';
	}
	echo "</tr>\n";
}
$res->closeCursor();

if ($presence) {
	echo "</table>";
	echo Affiche_Icone('tip', LG_TIP) . ' ' . LG_CH_IMAGE_MAGNIFY . '.<br />';
}

// Possibilité de lier une image
if ($est_contributeur) {
	echo '<br />' . $LG_add . ' ' .
		Affiche_Icone_Lien('href="Edition_Image.php?ident_image=-1&amp;Reference=' . $Refer . '&amp;Type_Ref=' . $Type_Ref . '"', 'ajouter', $LG_add) .
		'<br />';
}

// Formulaire pour le bouton retour
Bouton_Retour($lib_Retour, '?' . Query_Str());

if ((isset($_SESSION['message'])) and ($_SESSION['message'] != '')) {
	$texte_im = 'Erreur';
	echo '<p><img id="erreur" src="' . $chemin_images . $Icones['stop'] . '" BORDER=0 alt="' . $texte_im . '" title="' . $texte_im . '">' .
		' Votre image n\'a pu &ecirc;tre charg&eacute;e, ' .
		$_SESSION['message'] . "\n";
	$_SESSION['message'] = '';
}

Insere_Bas($compl);

?>
</body>

</html>