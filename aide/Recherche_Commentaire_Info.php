<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');

    $objet = 'Information recherche dans les commenatires';
    Ecrit_Meta($objet, $objet, '');

    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();

    ?>
    Cette page, accessible aux personnes de profil gestionnaire, permet à l'utilisateur d'effectuer une recherche dans les commentaires stockés dans la base,
    quel que soit l'objet pointé par le commentaire (personne, union, zone géographique...).<br />
    L'utilisateur n'est pas obligé de saisir le contenu complet du commentaire ; de même, la casse n'est pas prise en compte.<br />
    E.g., si l'utilisateur saisit le mot "ancien" (sans les guillemets), les commentaires suivants pourront être trouvés :
    <ul>
        <li>Ancien département de la Seine et Oise</li>
        <li>Naissance sur l'ancienne commune de ...</li>
    </ul>
    <p>La sortie du résultat de la recherche peut s'effectuer sous forme de liste cliquable (sortie écran) ou sous format destiné à être imprimé (sortie texte).</p>
    </body>

</html>