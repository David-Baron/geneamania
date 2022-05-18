<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $objet = 'Administration des tables';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>

    Cette page permet de réparer ou optimiser les tables de la base Généamania.<br />
    La réparation d'une table est nécessaire lorsque le logiciel indique 'Table 'nom de la table' is marked as crashed and should be repaired '. Ceci peut arriver lorsqu'il se produit un problème
    technique sur l'ordinateur. La réparation de la table est une solution au même titre que l'import d'une sauvegarde.<br />
    L'optimisation d'une table peut être nécessaire lorsqu'il y a de fréquentes suppressions sur la table ; la table est alors réorganisée.
    Normalement, cette opération est inutile dans l'utilisation standard de Généamania.<br /><br />
    Cette page n'est disponible que pour le profil gestionnaire.
    </body>

</html>