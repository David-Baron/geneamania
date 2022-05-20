<?php
//=====================================================================
// Affichage d'un rôle
//=====================================================================

require __DIR__ . '/src/bootstrap.php';
include_once __DIR__ . '/fonctions/fonctions.php';


$acces = 'L';            // Type d'accès de la page : (M)ise à jour, (L)ecture
$niv_requis = 'P';
$titre = $LG_Menu_Title['Role'];    // Titre pour META

$tab_variables = array('annuler');
foreach ($tab_variables as $nom_variables) {
    if (isset($_POST[$nom_variables])) $$nom_variables = $_POST[$nom_variables];
    else $$nom_variables = '';
}
// Sécurisation des variables postées
$annuler  = Secur_Variable_Post($annuler, strlen($lib_Retour), 'S');

// On retravaille le libellé du bouton pour effectuer le retour...
if ($annuler == $lib_Retour) $annuler = $lib_Annuler;

$x = Lit_Env();
include_once __DIR__ . '/fonctions/pages.php';
// Recup de la variable passée dans l'URL : rôle
$Code = Recup_Variable('code', 'A');
$req_sel = 'select * from ' . nom_table('roles') . ' where Code_Role = "' . $Code . '" limit 1';


if ($bt_An) Retour_Ar();// Retour sur demande d'annulation
if (!$enreg_sel) Retour_Ar();// Rôle inconnu, retour...

$enreg2 = $enreg_sel;
Champ_car($enreg2, 'Libelle_Role');
Champ_car($enreg2, 'Libelle_Inv_Role');

$compl = Ajoute_Page_Info(600, 150);
if ($est_gestionnaire) {
    $compl .= Affiche_Icone_Lien('href="Edition_Role.php?code=' . $Code . '"', 'fiche_edition', 'Edition rôle') . ' ';
}

Insere_Haut(my_html($titre), $compl, 'Fiche_Role', $Code);

$larg_titre = 25;
echo '<br />';
echo '<table width="70%" class="table_form" align="center">' . "\n";
echo col_titre_tab(LG_ROLE_CODE, $larg_titre) . '<td class="value">' . $enreg2['Code_Role'] . '</td></tr>' . "\n";
echo col_titre_tab(LG_ROLE_SYM, $larg_titre) . '<td class="value">' . $enreg2['Libelle_Role'] . '</td></tr>' . "\n";
echo col_titre_tab(LG_ROLE_LABEL, $larg_titre) . '<td class="value">';
if ($enreg2['Symetrie'] == 'O') echo 'Oui';
else echo 'Non';
echo '</td></tr>' . "\n";
echo col_titre_tab(LG_ROLE_OPPOS_LABEL, $larg_titre) . '<td class="value">' . $enreg2['Libelle_Inv_Role'] . '</td></tr>' . "\n";
echo '</table>';

// Formulaire pour le bouton retour
Bouton_Retour($lib_Retour, '?' . $_SERVER['QUERY_STRING']);

Insere_Bas($compl);
?>
</body>

</html>