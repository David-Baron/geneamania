<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    Ecrit_Meta('Infos pyramide des âges au décès', 'Infos pyramide des âges au décès', '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de visualiser la pyramide des âges au décès des personnes contenues dans la base.<br />
    Si l'utilisateur n'a pas de profil privilégié, seules sont prises en compte les personnes dont la la visibilité Internet est n'est pas restreinte.
    Le survol à la souris des barres du graphique permet de visualiser le nombre de personnes concernées pour un âge donné.
    De plus, on peut se débrancher sur la fiche de la doyenne ou du doyen.
    </body>

</html>