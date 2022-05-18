<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $objet = 'Infos calculette sosa';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet de calculer le numéro <?php echo '<a href="' . Get_Adr_Base_Ref() . 'glossaire_gen.php#SOSA">Sosa</a>'; ?>
     du conjoint, du père, de la mère ou de l'enfant d'une personne.<br />
    De même, on peut calculer à quelle génération correspond un numéro et si celui-ci est du côté paternel ou maternel.<br />
    L'utilisateur tape un numéro via le clavier ou en cliquant sur les boutons ad hoc ;
    il doit ensuite cliquer sur le bouton voulu.<br />
    L'icône <?php echo Affiche_Icone('efface', 'efface'); ?> permet d'effacer la zone de saisie.<br />
    </body>

</html>