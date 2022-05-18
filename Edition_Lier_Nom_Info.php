<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $objet = 'Infos assigner un nom secondaire à une personne';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet d'assigner un nom secondaire à une personne.<br />
    Le nom secondaire est opposé au nom principal de la personne en ce sens qu'il en représente des variantes trouvées sur certains actes.<br />
    Vous pouvez commenter chaque lien vers un nom secondaire, par exemple en indiquant l'acte sur lequel a été trouvé le nom.<br />
    Il est à noter que si le lien existe, seule la modification du commentaire sera autorisée.<br />
    Les boutons disponibles sont :<br />
    - <?php echo $lib_Okay; ?> pour valider la création ou la modification du lien vers le nom ;<br />
    - <?php echo $lib_Annuler; ?> pour annuler les modifications ;<br />
    - <?php echo $lib_Supprimer; ?> pour supprimer le lien vers le nom .<br />
    </body>

</html>