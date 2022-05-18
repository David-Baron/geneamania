<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');

    $objet = 'Information recherche de personnes aux archives';
    Ecrit_Meta($objet, $objet, '');

    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();

    ?>
    Cette page permet de lister les dates à vérifier aux archives.
    Ces dates concernent les personnes dont les fiches ne sont pas validées pour une ville donnée et éventuellement suivant une plage de dates.<br /><br />
    Le résultat peut avoir un format :
    <ul>
        <li>écran : la fiche familiale des personnes est alors accessible en cliquant sur les nom et prénoms de la liste
            et la fiche personne en cliquant sur l'icone <?php echo Affiche_Icone('fiche_edition', my_html($LG_modify)); ?></li>
        <li>texte : ce format est destiné à être imprimé.</li>
        <li>CSV : ce format est destiné à être lu dans un tableur (Excel, OpenOffice...).</li>
    </ul>
    Cette page n'est pas accessible que pour le profil gestionnaire.
    </body>

</html>