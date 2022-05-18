<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    $titre = 'Liste des personnes vivantes';
    Ecrit_Meta($titre, $titre, '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de lister les personnes vivantes pour un nom donné ou pour l'ensemble des noms.<br />
    Sont considérées comme décédées les personnes nées il y a plus de 130 ans et non décédées. <br />
    L'utilisateur peut ignorer les personnes dont la date de naissance n'est pas saisie. Il considère alors qu'il n'a
    pas suffisamment d'informations sur la personne, donc pas de nécessité de sélection, ou que l'ancêtre est trop éloigné.<br />
    NB : l'affichage des personnes dont la diffusion internet est interdite est fonction du profil de l'utilisateur.
    </body>

</html>