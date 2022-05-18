<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    $titre = 'Liste des évènements';
    Ecrit_Meta($titre, $titre, '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de lister les évènements.<br />
    L'utilisateur peut choisir le type de d'évènement pour lequel il veut la liste (par défaut tous les types sont visualisés). 
    Il dispose alors en plus du titre de l'évènement
    d'informations sur les personnes concernées par l'évènement (éventuellement au travers de la filiation ou de l'union).<br />
    Seul le gestionnaire a accès à la modification de l'évènement.
    </body>

</html>