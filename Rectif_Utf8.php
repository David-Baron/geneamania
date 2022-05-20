<?php
//====================================================================
//  Rectification après import fichier en UTF-8
//=====================================================================

require __DIR__ . '/src/bootstrap.php';
include_once __DIR__ . '/fonctions/fonctions.php';

include_once __DIR__ . '/fonctions/rectif_utf8.php';

$acces = 'M';
//$titre = 'Rectification des caractères UTF-8';
$titre = $LG_Menu_Title['Rect_Utf'];
$x = Lit_Env();
include_once __DIR__ . '/fonctions/pages.php';
$niv_requis = 'G';                // Page réservée au profil gestionnaire
$compl = Ajoute_Page_Info(600, 250);
Insere_Haut(my_html($titre), $compl, 'Rectif_Utf8', '');

rectif_UTF8();

echo '<br/ >' . my_html($LG_Rect_Utf_Msg_Beg . $nb_req . $LG_Rect_Utf_Msg_End) . '<br/ >';

Insere_Bas($compl);


?>
</body>

</html>