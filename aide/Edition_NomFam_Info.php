<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    $titre = 'Infos édition d\'un nom de famille';
    Ecrit_Meta($titre, $titre, '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de modifier un nom de famille ainsi que sa prononciation.<br /><br />
    <b>Saisie du nom de famille</b><br />
    Vous pouvez modifier le nom de famille. Pour placer des caractères accentués, vous pouvez les saisir
    en minuscules puis cliquer sur l'icône <?php echo Affiche_Icone('majuscule', 'majuscule'); ?> pour mettre le nom en majuscules.<br />
    <br /><b>Prononciation</b><br />
    Pour la prononciation du nom, le bouton " Prononciation calculée " détermine une prononciation du nom à partir des règles de prononciation du français.
    Ces règles sont complexes et parfois difficiles à appliquer, ainsi la prononciation proposée peut ne pas être correcte.
    Vous pouvez la corriger.<br />
    Vous pouvez déplacer le curseur en cliquant sur les flèches " <-- " et " --> ".<br />
        Pour supprimer un son, placez le curseur après celui-ci et cliquez sur " Effacer ".<br />
        Les boutons marqués d'une ou deux lettres permettent d'ajouter le son correspondant à l'endroit du curseur.<br />
        Quand votre souris arrive sur un de ces boutons, quelques exemples de mots contenant le son s'affichent en dessous du tableau.
        </body>

</html>