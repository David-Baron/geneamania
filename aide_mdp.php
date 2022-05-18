<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    Ecrit_Meta('Aide mot de passe', 'Aide mot de passe', '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?><br />Vous avez oublié votre mot de passe ?<br />
    <ul>
        <li>si vous êtes le gestionnaire du site, cliquez <a href="http://genealogies.geneamania.net/demande_code_gest.php">ici</a> pour régénérer un mot de passe gestionnaire</li>
        <li>sinon adressez-vous au gestionnaire du site dont l'adresse figure sur la page d'accueil</li>
    </ul>
    </body>

</html>