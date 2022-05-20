<?php
//=====================================================================
// Erreur sur profil
//=====================================================================
require __DIR__ . '/src/bootstrap.php';
include_once __DIR__ .'/fonctions/fonctions.php';


$titre = $LG_function_noavailable_profile;        // Titre pour META
$acces = 'L';                                    // Type d'accès de la page : (M)ise à jour, (L)ecture
$x = Lit_Env();
include_once __DIR__ .'/fonctions/pages.php';
Insere_Haut($titre, '', 'Erreur_Profil', '');

aff_erreur($LG_function_noavailable_profile);

Insere_Bas('');
?>
</body>

</html>