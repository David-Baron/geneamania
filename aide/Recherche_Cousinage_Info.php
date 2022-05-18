<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $objet = 'Information recherche de parenté';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();

    if ($Environnement == 'I') $max_gen = $max_gen_int;
    else                       $max_gen = $max_gen_loc;

    ?>
    Cette page permet de rechercher l'ancêtre commun à 2 personnes.
    Cette recherche s'effectue sur <?php echo $max_gen ?> générations au maximum.
    Si l'ancêtre commun est trouvé, l'utilisateur peut visualiser sa fiche familiale, sous
    réserve de diffusabilité, ou ses arbres descendant ou ascendant.
    De même pour toutes les personnes présentes dans les 2 filiations.<br />
    En local, une case à cocher permet de sauvegarder la recherche. Cette sauvegarde peut être utilisée dans Génégraphe pour générer le graphique correspondant à la recherche.
    </body>

</html>