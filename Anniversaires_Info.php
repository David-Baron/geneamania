<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    $objet = 'Infos anniversaires';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de visualiser les anniversaires de naissance, mariage et décès sur le mois en cours ou un mois choisi par l'utilisateur.
    Les anniversaires sont triés par ordre chronologique.<br />
    Les icônes <?php echo Affiche_Icone('anniv_nai', 'Anniversaire de naissance') . '&nbsp;' .
                    Affiche_Icone('anniv_mar', 'Anniversaire de mariage') . '&nbsp;' .
                    Affiche_Icone('anniv_dec', 'Anniversaire de décès');
                ?> signifient que l'anniversaire de naissance, mariage ou décès a lieu le jour même du mois en cours.<br />
    L'utilisateur a la possibilité de ne pas afficher les personnes décédées ou présumées décédées (sur les anniversaires de naissance ou de mariage).<br />
    NB : l'affichage des personnes dont la visibilité internet est restreinte est fonction du profil de l'utilisateur.
    </body>

</html>