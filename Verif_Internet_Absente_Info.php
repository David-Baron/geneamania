<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $objet = 'V�rification de la diffusabilité Internet absente';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();

    $Lim_Diffu_Dec = $Lim_Diffu + 130;
    ?>

    Cette page permet de visualiser les personnes non visibles sur Internet mais nées il y a plus <?php echo $Lim_Diffu; ?>
    ou décédées il y a plus de <?php echo $Lim_Diffu_Dec; ?> ans.
    L'utilisateur peut rectifier les incohérences en cliquant sur le bouton "Rectifier".
    Seules sont modifiées les lignes que l'utilisateur a cochées.
    La visibilité Internet des personnes cochées passe alors à Oui, tout le monde pourra alors les visualiser.
    </body>

</html>