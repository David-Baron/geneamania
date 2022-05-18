<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    Ecrit_Meta('Infos statistiques par département', 'Infos statistiques par département', '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de visualiser la répartition des naissances et des décès par département.
    En mode Internet, seules sont prises en compte les personnes dont la diffusion Internet est autorisée si l'utilisateur n'a pas un profil privilégié.
    L'icone <?php echo Affiche_Icone('carte_france', 'Carte de France'); ?> permet de visualiser la répartition géographique sur la carte de la France.<br />
    </body>

</html>