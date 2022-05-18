<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <?php
    include('fonctions.php');
    $titre = 'Informations édition d\'un utilisateur';
    Ecrit_Meta($titre, $titre, '');
    echo "</head>\n";
    $x = Lit_Env();
    Ligne_Body();
    ?>

    Cette page permet de définir un utilisateur qui sera utilisé dans la version Internet de Généamania.. Le <strong>nom</strong> est un rappel du nom réel de la personne. Le <strong>code utilisateur</strong> et le <strong>mot de passe</strong> serviront pour s'identifier sur la page d'accueil de Généamania. Le <strong>niveau</strong> sert à définir les possibilités que vous accordez à cet utilisateur. On distingue 3 niveaux :
    <ul>
        <li>invité : il peut consulter toutes les pages en respectant les verrouillages légaux d'accès aux informations personnelles ;</li>
        <li>privilégié : cet utilisateur peut consulter toutes les pages sans qu'il y ait de verrouillage d'accès aux informations personnelles. Il peut signaler au gestionnaire des modifications par le système des contributions, accessible sur la fiche d'une personne; </li>
        <li>gestionnaire : c'est la personne qui peut tout faire sur le logiciel.</li>
    </ul>
    Un internaute qui accède à une généalogie a des <strong>droits d'invité</strong>. Cela correspond à toute personne qui veut consulter votre travail. Il n'est pas nécessaire de créer un utilisateur invité, cela est fait automatiquement. <br />
    Vous déclarerez en <strong>utilisateur privilégié</strong> une personne en qui vous avez confiance et qui pourra vous signaler des modifications par le système des contributions. Ces personnes ne peuvent rien modifier. Vous pouvez créer autant d'utilisateurs privilégiés que vous voulez <br />
    Seules les personnes ayant des <strong>droits de gestionnaire</strong> peuvent apporter toutes les modifications à la base de données. Ces personnes ont donc totalement le contrôle de l'évolution de le généalogie.<br />
    Pour travailler dans des conditions de sécurité correctes, il faut être vigilent lorsque vous définissez un mot de passe. Les recommandations habituelles en la matière sont :
    <ul>
        <li>qu'il contienne au moins 8 caractères ;</li>
        <li>qu'il ne soit pas un mot d'une langue quelconque.</li>
    </ul>
    Mélangez les lettres majuscules, minuscules, les chiffres et utilisez les caractères qui sont plus rarement utilisés :
    <ul>
        <li>les diacritiques (é, è, à, ç, â, ê, î, ô, û) ;</li>
        <li>les symboles (&, #, $, €, &sect;, @, \, /) ; </li>
        <li>les signes de ponctuation (, ; . : ! ? { } [ ] ( )) ; </li>
        <li>les symboles mathématiques (+, -, *, /, %).</li>
    </ul>
    Pour mémoriser plus facilement un mot de passe efficace, vous pouvez prendre une phrase que vous mémoriserez facilement et vous conservez la première lettre de chaque mot. Vous pouvez remplacer les s ou S par $, les o ou O par 0 (zéro), les a par @. Par exemple, la phrase "J'ai acheté 5 oeufs pour 3 euros" peut donner "j@50p3€".<br />
    </body>

</html>