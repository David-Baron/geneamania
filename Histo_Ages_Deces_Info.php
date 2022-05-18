<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    $objet = 'Infos historique des âges de décès';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de visualiser la répartition des âges de décès des personnes contenues dans la base pour une période de naissance donnée.
    Si l'utilisateur n'a pas de profil privilégié, seules sont prises en compte les personnes dont la visibilité Internet est n'est pas restreinte.<br />
    Contrairement à l'historique de l'âge, les enfants décédés avant l'âge de 1 an sont pris en compte.<br />
    Pour chaque tranche d'âge, le nombre de personnes et le pourcentage que cela représente sont précisés.
    </body>

</html>