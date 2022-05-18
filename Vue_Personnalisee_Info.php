<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    $titre = 'Vue personnalisée';
    Ecrit_Meta($titre, $titre, '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de de choisir un de cujus différent de celui par défaut pour les listes par générations et patronymique.<br />
    Le de cujus personnalisé est mémorisé lorsque l'utilisateur clique sur bouton "<?php echo $lib_Okay ?>". Il n'est valable que pour la session en cours.
    </body>

</html>