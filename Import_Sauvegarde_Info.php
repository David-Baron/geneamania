<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    Ecrit_Meta('Informations sur l\'import d\'une sauvegarde', 'Infos import', '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de recharger les données de la base à partir d'un fichier de sauvegarde.<br />
    L'utilisateur peut demander à effacer préalablement le contenu de la base en cochant la case "Vidage préalable de la base actuelle".
    Attention, dans ce cas, il s'agit de toute la base dans laquelle les données Généamania sont implantées.
    N'utilisez pas cette option si Généamania partage la base d'une autre application !
    Cette option peut être utilisée dans le cas de la reprise d'une sauvegarde de version antérieure si vous voulez migrer cette sauvegarde vers la version actuelle.<br />
    Le fichier de sauvegarde peut être téléchargé par l'utilisateur ou sélectionné parmi les fichiers présents dans le répertoire des exports.
    Dans le cas où l'utilisateur télécharge un fichier et en sélectionne un en même temps, c'est le fichier téléchargé qui prime.<br />
    Sur un site hébergé gratuit, seuls les fichiers .txt sont autorisés ; dans les autres cas, les fichiers .txt et .sql sont autorisés.<br />
    Attention : les données présentes en base sont supprimées par le rechargement (en effet,
    la sauvegarde inclue des ordres de suppression et re-création de tables).<br />
    La sauvegarde peut être rechargée en local (sur votre ordinateur) ou sur votre site web distant
    si votre hébergeur le permet (connexion distante possible sur le port 3306 par exemple).
    Il faut cependant noter que cette possibilité de rechargement distant est consommatrice de ressources ; il est conseillé de diminuer le nombre de
    données à charger sur votre base distante par exclusion de certaines tables (typiquement celles qui n'ont pas évolué [pays, etc...]).<br />
    Sur Internet, l'utilisateur peut demander à préserver la liste des utilisateurs présents ; cela évite par exemple lors d'un rechargement d'écraser cette liste à partir des utilisateurs locaux.<br />
    Cette page n'est disponible que pour le profil gestionnaire.
    </body>

</html>