<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $lib = 'Infos recherche de villes';
    Ecrit_Meta($lib, $lib, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet à l'utilisateur d'effectuer une recherche multicritères sur les villes de la base.
    Elle ramène toutes les villes répondant aux critères demandés.<br />
    Le nom de la ville recherchée est automatiquement mis en majuscules ; ainsi les villes 'paris' et 'Paris' sont équivalentes.<br />
    Par défaut, le nom de la ville recherché doit être équivalent au champ saisi (sans considération de casse) ;
    il est cependant possible de faire des recherches partielles en introduisant un ou plusieurs caractères "joker" * ;
    ainsi la recherche sur le nom 'p*' donne les villes 'Paris', 'Perpignan'...
    Demander '*ar*' ramènera toutes les villes dont le nom contient la chaine de caractères 'ar' à un emplacement quelconque.<br />

    <p>La sortie du résultat de la recherche peut s'effectuer sous liste cliquable (sortie écran),
        sous format destiné à être imprimé (sortie texte) ou sous forme de fichier CSV (pour un tableur, le séparateur étant le ";" ;
        disponible à partir du profil privilégié).</p>

    </body>

</html>