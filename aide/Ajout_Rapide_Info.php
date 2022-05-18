<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $objet = 'Infos ajout rapide';
    Ecrit_Meta($objet, $objet, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>
    Cette page permet de créer des personnes et les liens associés de manière automatique.<br />
    A partir d'un personne, on peut :
    <ul>
        <li>Créer une soeur ou un frère. Dans ce cas, la personne créée bénéficiera automatiquement de la même filiation que la personne d'origine.
            Cette fonction n'est accessible que si la filiation de la personne d'origine est connue.</li>
        <li>Créer un conjoint. Dans ce cas, l'union avec la personne d'origine sera automatiquement créée.</li>
        <li>Créer les parents. Les parents et leur union sont créés dans la même page ; la filiation avec la personne d'origine est automatiquement créée.
            Cette fonction n'est accessible que si la filiation de la personne d'origine n'est pas connue.</li>
    </ul>
    Les listes de villes sont alimentées à partir des villes de naissance, baptême et décès de la personne d'origine.<br />
    Les dates peuvent être choisies en cliquant sur l'icone <?php echo Affiche_Icone('calendrier', 'calendrier'); ?>.<br />
    Les boutons disponibles sont :<br />
    - <?php echo $lib_Okay; ?> pour valider les créations ;<br />
    - <?php echo $lib_Annuler; ?> pour annuler les créations ;<br />
    Cette page n'est accessible que pour le profil gestionnaire.
    </body>

</html>