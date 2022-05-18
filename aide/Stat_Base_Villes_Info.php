<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    Ecrit_Meta('Infos statistiques par ville', 'Infos statistiques par ville', '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de visualiser la répartition des naissances, mariages et des décès par villes.<br />
    En cliquant sur une ville, on peut se débrancher sur la fiche de la ville.
    En cliquant sur un nombre, on peut se débrancher sur la liste des personnes nées, mariées ou décédées dans la ville.<br />
    En mode Internet, seules sont prises en compte les personnes dont la diffusion Internet est autorisée si l'utilisateur n'a pas un profil privilégié.
    </body>

</html>