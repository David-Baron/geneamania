<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $objet = 'Infos édition évènement';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet de créer, modifier et supprimer un évènement.<br />
    Les zones obligatoires sont le titre de l'évènement et son type.<br />
    Le lieu de survenance de l'évènement peut être choisi en cliquant sur l'icone <?php echo Affiche_Icone('localisation', 'localisation'); ?>.<br />
    Les dates de début et de fin peuvent être choisis en cliquant sur l'icone <?php echo Affiche_Icone('calendrier', 'calendrier'); ?>
    alors que l'icone <?php echo Affiche_Icone('copie_calend', 'copie'); ?> permet de copier la date de d�but dans la date de fin.<br />
    La zone "Visibilité Internet du commentaire" permet de masquer ou non l'affichage de la note sur internet ; elle n'a aucun effet en local.<br />
    Les boutons disponibles sont :<br />
    - <?php echo $lib_Okay; ?> pour valider la création ou modification ;<br />
    - <?php echo $lib_Annuler; ?> pour annuler les modifications sur la fiche ;<br />
    - <?php echo $lib_Supprimer; ?> pour supprimer l'évènement ; ce bouton n'est affiché que si l'évènement n'est pas utilisé.<br />
    Cette page n'est accessible que pour le profil gestionnaire.
    </body>

</html>