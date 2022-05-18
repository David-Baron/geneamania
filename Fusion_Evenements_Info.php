<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $objet = 'Fusion d\'évènements';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();

    ?>

    Cette page permet de fusionner les évènements présents en base.
    Les évènements présentant les mêmes lieux, type, titre et dates peuvent être fusionnés automatiquement par Généamania.<br />
    La page s'affiche dans un premier temps en mode visualisation pour permettre à l'utilisateur de voir ce que Généamania va faire en terme de fusion.<br />
    Cette page présente une liste des groupes d'évènements qui peuvent être fusionnés.
    Pour chaque groupe, le titre de l'évènement est précisé ; ensuite vient l'évènement de référence et chaque évènement "doublon".
    L'utilisateur peut visualiser la référence et les doublons en cliquant sur le lien ad-hoc.
    De plus, Généamania indique le nombre de participations (donc de personnes), d'images et de documents rattachés à cet évènement.<br />
    La fusion sera effective lorsque l'utilisateur décochera la case "Mode simulation" et cliquera sur le bouton "Fusionner".

    </body>

</html>