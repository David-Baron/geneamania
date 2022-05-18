<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    $titre = 'Infos naissances, mariages et décès par mois';
    Ecrit_Meta($titre, $titre, '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de visualiser la répartition mensuelle des naissances, des mariages et des décès des personnes contenues dans la base.
    Si l'utilisateur n'a pas de profil privilégié, seules sont prises en compte les personnes dont la diffusion Internet est autorisée ;
    les mariages sont comptabilisés si la diffusion Internet des 2 personnes est autorisée.<br />
    Le survol à la souris des barres du graphique permet de visualiser le nombre de personnes concernées pour un mois donné.

    </body>

</html>