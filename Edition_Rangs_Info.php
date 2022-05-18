<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    Ecrit_Meta('Infos édition des rangs', 'Infos édition des rangs', '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet rectifier les rangs des enfants d'un couple.<br />
    Pour chaque enfant, Généamania calcule un rang théorique <b>si la date de naissance est connue de manière précise</b>.<br />
    En cas de divergence entre le rang théorique et le rang saisi, la zone du rang calculé est suivie de l'icône <?php echo Affiche_Icone('warning', 'Alerte') ?>.
    L'utilisateur peut rectifier en masse les rangs en cliquant sur le bouton "Accepter les rangs calculés".
    La mise à jour n'est effective qu'après avoir cliqué sur le bouton "<?php echo $lib_Okay; ?>".<br />
    De même, si les dates de naissance sont connues, Généamania calcule un écart théorique en mois / années entre les naissances.
    Si l'écart avec l'enfant précédent est de moins de 9 mois, la zone "Ecart calculé" est suivie de l'icône <?php echo Affiche_Icone('warning', 'Alerte') ?>.<br />
    </body>

</html>