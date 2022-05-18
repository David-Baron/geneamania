<?php

//=====================================================================
// Explications sur la numérotation Sosa
//=====================================================================

session_start();

include('fonctions.php');
$acces = 'L';                          // Type d'accès de la page : (M)ise à jour, (L)ecture
$titre = $LG_Menu_Title['Sosa'];       // Titre pour META
$x = Lit_Env();                        // Lecture de l'indicateur d'environnement
include('Gestion_Pages.php');

?>
<style type="text/css">
    .homme {
        background-color: #9999FF;
        border: 1px solid black;
    }

    .femme {
        background-color: #FF9999;
        border: 1px solid black;
    }

    .indet {
        background-color: #FFFFFF;
        border: 1px solid black;
    }
</style>
<?php

$compl = Ajoute_Page_Info(600, 150);
Insere_Haut($titre, $compl, 'Glossaire_Sosa', '');

?>
Règles de base :
<ul>
    <li>La personne dont on part est le numéro 1 (Cf. <a href="Glossaire_Gen.php#CUJUS">De cujus</a>).</li>
    <li>Pour obtenir le numéro d'un père, on multiplie par 2 le numéro de la personne.</li>
    <li>Pour obtenir le numéro d'un mère, on multiplie par 2 le numéro de la personne et on ajoute 1.</li>
    <li>Seuls les ascendants directs font l'objet d'une numérotation.</li>
</ul>
<br />
Il en ressort :
<ul>
    <li>Un numéro pair correspond à un homme et un nombre impair à une femme (sauf pour le numéro 1).</li>
    <li>Le numéro d'une femme est égal au numéro de son mari + 1.</li>
    <li>Le premier numéro d'une génération double à chaque fois : 1, 2, 4, 8, 16, 32...</li>
    <li>On peut calculer la génération d'appartenance à partir du numéro ou plus exactement du premier numéro de la génération. Exemple : 8 = 2 puissance 3 ; il s'agit donc de la 3ème génération.</li>
    <li>Le premier numéro d'une génération correspond au nombre le nombre d'ancêtres théoriques pour cette génération.</li>
    <li>La numérotation n'est valable que pour la personne de départ ; elle varie pour ses ascendants et descendants.</li>
</ul>
<br />
Ce qui nous donne :
<br />
<table width="50%" align="center" border="0">
    <tr align="center">
        <td rowspan="4" valign="middle" class="indet">Personne de départ<br />De cujus<br />Sosa : 1</td>
        <td rowspan="2" valign="middle" class="homme">Père<br />Sosa : 2<br />(=1*2)</td>
        <td class="homme">Grand-père paternel<br />Sosa : 4<br />(=2*2)</td>
    </tr>
    <tr align="center">
        <td class="femme">Grand-mère paternelle<br />Sosa : 5<br />(=2*2+1)</td>
    </tr>
    <tr align="center">
        <td rowspan="2" valign="middle" class="femme">Mère<br />Sosa : 3<br />(=1*2+1)</td>
        <td class="homme">Grand-père maternel<br />Sosa : 6<br />(=3*2)</td>
    </tr>
    <tr align="center">
        <td class="femme">Grand-mère maternelle<br />Sosa : 7<br />(=3*2+1)</td>
    </tr>
</table>
<br /><a href="<?php echo Get_Adr_Base_Ref() ?>Calc_So.php">Calculette Sosa</a><br />
<?php
Insere_Bas($compl); ?>
</body>

</html>