<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    Ecrit_Meta('Informations sur l\'import Gedcom', 'Infos import Gedcom', '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de recharger les données de la base à partir d'un fichier Gedcom
    ou d'afficher les données présentes dans le fichier.<br />
    Le nom du fichier de sauvegarde par défaut est export_gedcom.ged et se situe dans le répertoire Gedcom.<br />
    Signification des cases à cocher :
    <ul>
        <li>"Charger les données dans la base" permet de charger le fichier dans la base ;
            lorsqu'elle n'est pas cochée, le fichier est juste lu et les données contenues dans le fichier sont affichées à l'écran.</li>
        <li>"Vidage préalable de la base actuelle" permet de vider la base avant de charger le fichier. Attention, les données pré-existantes seront donc effacées.</li>
        <li>"Visibilité internet autorisée par défaut" permet d'indiquer que les personnes chargées à partir du fichier seront visibles sur Internet sans restriction.</li>
        <li>"Visibilité internet des notes autorisée par défaut" permet d'indiquer que les notes chargées à partir du fichier seront visibles sur Internet de profil.</li>
        <li>"Visibilité internet des images autorisée par défaut" permet d'indiquer que les images reprises à partir du fichier seront visibles sur Internet, si elles ont été chargées par ailleurs.</li>
        <li>"Valeur par défaut des fiches créées" permet de spécifier le statut que prendront les fiches créées lors de l'import.</li>
        <li>"Reprise des dates de modification du fichier" permet d'indiquer que les dates de modification des personnes et des autres données seront celles du fichier ;
            si la case n'est pas cochée, la date de modification sera la date du jour.</li>
    </ul>
    Le format des lieux permet de sélectionner l'arborescence des zones géographiques présentes dans le fichier. Par défaut, le format est composé uniquement des villes.
    Le format est spécifié en sélectionnant successivement chaque niveau (e.g. ville, département, région, pays) dans la liste déroulante.
    L'icône <?php echo Affiche_Icone('efface', 'Efface le format des lieux') ?> permet d'effacer le format des lieux précédemment séléctionné.
    L'arborescence est prise automatiquement en compte si elle est spécifiée dans l'entête du fichier à charger (balises PLAC/FORM).
    <br /><br />Cette page n'est disponible que pour le profil gestionnaire.
    </body>

</html>