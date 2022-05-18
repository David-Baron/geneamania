<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    //  ===========================================
    //    Gerard KESTER le 02/11/2006
    //  ===========================================
    //
    include('fonctions.php');
    Ecrit_Meta('Vérification d\'une fiche personne', 'Vérification d\'une fiche personne', '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>

    <br />Cette page affiche le résultat du contrôle de la fiche d'une personne. Ils se font à plusieurs niveaux.
    <br /><strong>Pour la personne</strong><br />
    - que la fiche soit visible sur Internet ;<br />
    - que la fiche soit validée ;<br />
    - que les dates de naissance et de décès (dans le cas des personnes non vivantes) soient présentes et qu'elles correspondent à un jour précis (le ...) ;<br />
    - que la date de naissance précède ou soit égale à la date de décès.
    <br /><strong>Avec ses parents :</strong><br />
    - que les dates de décès du père et de la mère soient présentes (dans le cas des personnes non vivantes) et qu'elles correspondent à un jour précis (le ...) ;<br />
    - que la personne soit née après que le père et la mère aient 15 ans ; <br />
    - que la personne soit née au plus tard 9 mois après le décès du père ou de la mère.
    <br /><strong>Avec ses unions :</strong><br />
    - que la personne ait plus de 15 ans quand elle s'unit à une autre personne ;<br />
    - que la personne avec qui elle s'unit soit vivante lors de cette union.
    <br /><strong>Avec les enfants :</strong><br />
    - que les dates de naissance des enfants soient soient présentes et qu'elles correspondent à un jour précis (le ...) ;<br />
    - que la personne ait au moins 15 ans à la naissance des enfants ;<br />
    - que la personne soit décédée depuis moins de 9 mois lors de la naissance des enfants.
    </body>

</html>