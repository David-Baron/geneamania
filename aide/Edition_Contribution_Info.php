<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $x = Lit_Env();
    $titre = 'Edition d\'une contribution';
    Ecrit_Meta($titre, $titre, '');
    echo "</head>\n";
    Ligne_Body();
    ?>
    Cette page permet de prendre en compte une contribution proposée par un utilisateur du net.<br />
    L'ensemble des traitements est déclenché si l'utilisateur clique sur le bouton <?php echo $lib_Okay; ?>.<br />
    En règle générale, l'utilisateur peut choisir de modifier une personne existante, d'en créer une (selon les cas) ou d'ignorer la proposition pour la personne.<br />
    <ul>
        <li>Pour le père :<br />
            Si le père existe, l'utilisateur peut remplacer le père connu ou ignorer la proposition.
            Si le père n'existe pas, l'utilisateur peut créer le père (la filiation est automatiquement créée) ou ignorer la proposition.
            La page présente en gras les zones du père qui sont modifiées et en italique, les zones absentes de la proposition et qui sont reprises du père existant.</li>
        <li>Pour la mère :<br />
            Le comportement est le même. A l'issue du traitement des parents, l'union des parents est éventuellement créée (s'il y a eu création du père et / ou de la mère) ou modifiée.
        </li>
        <li>Pour le conjoint :<br />
            La page présente la liste des conjoints connus pour la personne. L'utilisateur peut alors choisir de remplacer un conjoint existant, d'en créer un nouveau ou d'ignorer la proposition ;
            dans ce cas, il y a création automatique de l'union entre le conjoint créé et la personne.
        </li>
        <li>Pour les enfants :<br />
            La page présente la liste des enfants connus pour la personne. L'utilisateur peut alors choisir de remplacer un (ou deux) enfant existant(s), d'en créer un (ou deux) nouveau(x) ou d'ignorer la proposition ;
            dans ce cas, il y a création automatique de la filiation entre l'enfant créé et la personne.
            Attention, la filiation créée ne référence pas le conjoint dans la mesure où le système ne saurait pas forcément à quel conjoint rattacher la filiation.
        </li>
    </ul>

    A l'issue du traitement, la contribution est réputée traitée si l'utilisateur clique sur <?php echo $lib_Okay; ?>.<br /><br />

    Cette page n'est disponible que pour le profil gestionnaire.
    </body>

</html>