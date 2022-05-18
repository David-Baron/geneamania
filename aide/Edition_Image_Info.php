<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $objet = 'Informations sur l\'édition d\'une image';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet de rattacher, modifier ou supprimer le rattachement d'une image à une personne, une ville, une union ou un évènement.<br />
    En création, si la description ou le nom du fichier de l'image sont absents, aucun lien ne sera créé.
    En modification, la re-saisie du nom de l'image n'est pas nécessaire.<br />
    L'image est limitée à <?php echo ($taille_maxi_images['s'] / 1024); ?>
    Ko (paramétrable) pour des dimensions maximum de <?php echo $taille_maxi_images['w'] . ' x ' . $taille_maxi_images['h'] . ' pixels'; ?>.<br />
    Le bouton radio "Image par défaut" permet de spécifier si cette image s'affichera pas défaut pour l'objet concerné (e.g. pour une personne sur la fiche familiale, l'arbre).
    La valeur par défaut est "Non".<br />
    La case à cocher "Visibilité de l'image sur internet " permet de spécifier si cette image s'affichera ou non sur Internet pour un profil invité ;
    si elle n'est pas cochée, l'utilisateur devra avoir un profil au moins privilégié pour la voir sur Internet.<br />
    Les boutons disponibles sont :<br />
    - <?php echo $lib_Okay; ?> pour valider la création ou la modification du lien;<br />
    - <?php echo $lib_Annuler; ?> pour annuler les modifications saisies ;<br />
    - <?php echo $lib_Supprimer; ?> pour supprimer le lien.<br />
    Cette page n'est accessible que pour le profil gestionnaire.
    </body>

</html>