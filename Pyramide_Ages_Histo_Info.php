<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    Ecrit_Meta('Infos historique de l\'âge au décès', 'Infos historique de l\'âge au décès', '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de visualiser l'évolution (en fonction de l'année de naissance) de l'âge au décès des personnes contenues dans la base.
    Si l'utilisateur n'a pas de profil privilégié, seules sont prises en compte les personnes dont la visibilité Internet est n'est pas restreinte.
    De plus, les enfants décédés avant l'âge de 1 an ne rentrent pas dans la statistique afin de ne pas biaiser la moyenne.<br />
    Le survol à la souris des barres du graphique permet de visualiser le nombre de personnes concernées sur la période.<br />
    En cliquant sur la période mentionnée au milieu, l'utilisateur peut visualiser la répartition des âges de décès des personnes pour la période concernée.

    </body>

</html>