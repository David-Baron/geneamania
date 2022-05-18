<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    Ecrit_Meta('Vérification des numéros Sosa', 'Vérification des numéros Sosa', '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet de visualiser les incohérences entre les numéros Sosa saisis par l'utilisateur et ceux calculés par Généamania.
    La détection d'incohérence peut être incorrecte dans le cas de personnes apparaissant plusieurs fois dans l'arbre (implexes).<br />
    Il est d'autre part à noter que cette vérification ne balaye que les personnes dans l'ascendance du de cujus ;
    ainsi une personne hors de cette ascendance ne verra pas son numéro contrôlé.<br />
    La personne de référence sur laquelle s'appuie le calcul est le de cujus (numéro 1).
    En cas d'absence de de cujus, Généamania affiche un message d'erreur.<br />
    L'utilisateur peut rectifier les incohérences en cliquant sur le bouton "Rectifier".
    Seules sont modifiées les lignes que l'utilisateur a cochées (la case "tous" permet de cocher / décocher toutes les lignes.
    </body>

</html>