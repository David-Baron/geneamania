<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    Ecrit_Meta('Infos export', 'Infos export', '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet d'exporter les données de la base.
    L'export peut être de type sauvegarde ou Internet.
    Ce dernier mode permet d'exporter ses données dans un fichier afin de les recharger sur un site Internet.<br />
    En export Internet, les données de la table 'compteurs' ne sont pas exportées ; en effet, il s'agit des statistiques
    de fréquentation du site. De plus, la table 'general' est modifiée afin de positionner le mode Internet.<br />
    L'export 'Site gratuit' permet d'exporter ses données au format texte afin de les charger sur un site personnel hébergé sur la plateforme Généamania.<br />
    L'option 'Masquage des dates récentes' permet de ne pas exporter les dates trop récentes afin de préserver la confidentialité de certaines données (personnes vivantes par exemple).<br />
    L'utilisateur peut spécifier un préfixe à attacher au nom du fichier (cette possibilité n'est pas offerte sur les sites gratuits standard).<br />
    L'icône <?php echo Affiche_Icone('oeil', 'oeil'); ?> permet de visualiser la liste des tables à exporter ; l'utilisateur
    peut ainsi choisir les tables qu'il souhaite exporter.<br />
    Le nom du fichier de sauvegarde par défaut est Export_Sauvegarde.sql (Export_Complet.sql pour les versions ant�rieures � la 2.1) pour
    la sauvegarde et Export_Internet.sql pour l'export Internet ; le suffixe éventuel est inséré avant le point ;
    le modificateur de nom de fichier éventuel est inséré après la chaîne "Export_".<br />
    Cette page n'est disponible que pour le profil gestionnaire.
    </body>

</html>