<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    Ecrit_Meta('Complétude des informations', 'Complétude des informations', '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet de vérifier la complétude des informations sur les personnes portant un nom.<br /><br />
    Sont vérifiées :
    <ul>
        <li>la présence de la date et du lieu de naissance ;</li>
        <li>la présence de la date et du lieu de décès si la personne est décédée (une personne née il y a plus de 130 ans est réputée décédée) ;</li>
        <li>la présence des 2 parents ;</li>
        <li> la présence d'un conjoint avec une date et un lieu d'union (si la personne est décédée après l'âge de 15 ans).</li>
    </ul>
    Une information présente et précise est matérialisée par un drapeau vert ; une information absente par un drapeau rouge. Une date approximative est matérialisée par un drapeau orange.<br /><br />
    Cette page ne permet pas de valider la pertinence des informations présentes ; ceci est réalisé via la fonction de vérification des personnes.<br />
    </body>

</html>