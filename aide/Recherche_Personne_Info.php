<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    Ecrit_Meta('Infos recherche de personnes', 'Infos recherche de personnes', '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet à l'utilisateur d'effectuer une recherche multi-crtitère sur les personnes de la base.
    Elle ramène toutes les personnes répondant aux critères demandés.
    En mode non privilégié, seules sont prises en compte les personnes dont la visibilté Internet n'est pas restreinte.<br />
    Les critères portant sur des zones de type "caractères" sont automatiquement mis en majuscules ; ainsi les prénoms 'jean' et 'Jean' sont équivalents.<br />
    Par défaut, le champ recherché doit être équivalent au champ saisi (sans considération de casse) ;
    cependant, sur les zones de type "caractères", il est possible de faire des recherches partielles en introduisant un ou plusieurs caractères "joker" * ;
    ainsi la recherche sur le nom 'du*' donne les personnes s'appelant 'Durand', 'Dupond', 'Dumoulin'...
    Demander '*du*' ramènera toutes les personnes dont le nom contient la chaine de caractères 'du' à un emplacement quelconque.<br />
    Exemple : pour avoir toutes les femmes de la base, on coche le bouton "Femme" et on lance la recherche.
    Si on veut affiner la recherche et obtenir les femmes dont l'un des prénoms est "Marie', on ajoutera '*marie*' dans la zone Prénoms.<br />

    <br />La recherche sur le nom peut être orthographique, phonétique exacte ou phonétique approchée.<br />
    La recherche phonétique exacte donne tous les noms se prononçant de la même façon.<br />
    La recherche phonétique approchée fait des approximations sur la prononciation. Cela permet de rapprocher les sons suivants :
    <ul>
        <li>" a " et " â " ;</li>
        <li>" é " et " è " ;</li>
        <li>" o " et " ô " ;</li>
        <li>" in " et " un " ;</li>
        <li>" en " et " on " ;</li>
        <li>" n " et " gn ".</li>
    </ul>
    La recherche donne alors tous les noms de famille dont la prononciation correspond à celle du nom saisi tout en tenant compte des approximations.


    <p>La sortie du résultat de la recherche peut s'effectuer sous liste cliquable (sortie écran), sous format destiné à être imprimé (sortie texte)
        ou sous forme de fichier CSV (pour un tableur, le séparateur étant le ";" ; disponible à partir du profil privilégié).</p>

    </body>

</html>