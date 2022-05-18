<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $objet = 'Vérification de la diffusabilité Internet';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet de visualiser les personnes visibles sur Internet mais nées ou décédées il y a moins de <?php echo $Lim_Diffu; ?> ans.
    Cela peut mettre en lumière des problèmes de confidentialité de données.<br />
    L'utilisateur peut rectifier les incohérences en cliquant sur le bouton "Rectifier".
    Seules sont modifiées les lignes que l'utilisateur a décochées.
    La visibilité Internet des personnes décochées passe alors à "Non" et ces personnes ne sont visibles que des utilisateurs ayant un profil au minimum privilégié.
    </body>

</html>