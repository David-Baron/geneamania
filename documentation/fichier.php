<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Fichier</title>
<style type="text/css">
.cadreNoir
{
	height: 50px;
	width: 200px;
	text-align: center;
	border: 1px solid #000;
}

</style>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("include.html") ?>
<div id="contenu">
<h2><a id="haut"></a>Menu Fichier</h2>
<p><a href="#A1">Ouvrir un arbre</a> - <a href="#A2">Enregistrer un arbre</a>  - <a href="#A3">Fermer l'arbre</a> - <a href="#A4">Pr&eacute;f&eacute;rences</a> - <a href="#A5">Arbre</a> - <a href="#A6">G&eacute;n&eacute;rer PDF</a> - <a href="#A7">G&eacute;n&eacute;rer images</a> - <a href="modeleEtiq.php">G&eacute;rer les modd&egrave;les d'&eacute;tiquettes</a> - <a href="gestFichiers.php">Gestion des fichiers</a> - <a href="#A10">Rouvrir un arbre</a></p>
<table class="sansBord" summary="">
  <tr>
    <td><img src="images/fichier01.png" width="309" height="485" class="imageBord1pt" alt="" /></td>
    <td>Le menu Fichier permet de :
      <ul>
        <li>g&eacute;rer les arbres ;</li>
        <li>acc&eacute;der aux pr&eacute;f&eacute;rences de G&eacute;n&eacute;Graphe ;</li>
        <li>g&eacute;n&eacute;rer les fichiers   PDF et les images ;</li>
        <li> g&eacute;rer les mod&egrave;les d'&eacute;tiquettes ;</li>
        <li>g&eacute;rer les fichiers ;</li>
        <li>ouvrir un des derniers arbres mis &agrave; jour. </li>
      </ul>
      <p>Un arbre poss&egrave;de des caract&eacute;ristiques : </p>
      <ul>
      <li>une description</li>
      <li>un nom de fichier associ&eacute;.</li>
      </ul>    
    <p>Le nom de fichier associ&eacute; est utilis&eacute; pour g&eacute;n&eacute;rer les <a href="#A6">fichiers   PDF</a> et les <a href="#A7">images</a>. </p>    </td>
  </tr>
</table>
<hr />
<h4><a id="A1"/>Ouvrir un arbre <a href="#haut"><img src="images/debut.gif" width="16" height="16" class="imageSansBord" alt="" /></a></h4>
<p>Par cette commande, vous pouvez ouvrir un arbre qui a d&eacute;j&agrave; &eacute;t&eacute; enregistr&eacute;. G&eacute;n&eacute;Graphe vous propose la liste des arbres existants, vous s&eacute;lectionnez celui que vous souhaitez ouvrir et vous cliquez sur <span class="bouton">Valider</span>. La description des arbres est celle qui est donn&eacute;e lors de leur <a href="#A2">enregistrement</a>. </p>
<p><img src="images/ouvrir01.png" width="304" height="380" alt="" /></p>
<p>Attention : cette op&eacute;ration remplace l'arbre existant, m&ecirc;me s'il n'a pas &eacute;t&eacute; sauvegard&eacute;.</p>
<hr />
<h4><a id="A2"/> Enregistrer un arbre  <a href="#haut"><img src="images/debut.gif" alt="" width="16" height="16" class="imageSansBord" /></a></h4>
<p>Cette op&eacute;ration permet d'enregistrer l'arbre en cours d'&eacute;dition. Quand vous la choisissez, G&eacute;n&eacute;Graphe vous ouvre la fen&ecirc;tre suivante : </p>
<p><img src="images/enregistrer01a.png" width="304" height="400" alt="" /></p>
<p>Vous trouvez, en haut, la liste des arbres d&eacute;j&agrave; enregistr&eacute;s. En bas, vous trouvez les champs &laquo;Nom de fichier&raquo; et &laquo;Description de l'arbre&raquo;. Vous pouvez changer ces valeurs. Si l'arbre a d&eacute;j&agrave; &eacute;t&eacute; enregistr&eacute;, ces champs sont renseign&eacute;s. </p>
<p>Le nom de fichier est utilis&eacute; lors de la g&eacute;n&eacute;ration de <a href="#A6">fichier PDF</a> et de <a href="#A7">fichier image</a>. </p>
<p>La description est utilis&eacute;e dans la fen&ecirc;tre d'<a href="#A1">ouverture d'arbre</a>.</p>
<span class="souligne">Attention</span> : si vous donnez le m&ecirc;me nom de fichier &agrave; deux arbres, lors de la  g&eacute;n&eacute;ration des fichiers PDF et images, vous &eacute;craserez les fichiers pr&eacute;c&eacute;dents. Vous ne pourrez pas avoir en m&ecirc;me temps les fichiers des deux arbres.
<p><span class="souligne">Remarque</span> : le fait de changer le nom du fichier n'a pas pour cons&eacute;quence d'enregistrer l'arbre sous un autre nom, comme le ferait une commande &laquo;&nbsp;Enregistrer sous&nbsp;&raquo;. Cette possibilit&eacute; de cr&eacute;er un arbre &agrave; partir d'un autre n'existe pas.</p>
<hr />
<h4><a id="A3"/>Fermer l'arbre <a href="#haut"><img src="images/debut.gif" alt="" width="16" height="16" class="imageSansBord" /></a></h4>
<p>Ce choix du menu fichier ferme l'arbre courant. Vous retrouvez alors une page vierge et votre arbre n'a jamais &eacute;t&eacute; sauvegard&eacute;.</p>
<hr />
<h4><a id="A4"/>Pr&eacute;f&eacute;rences <a href="#haut"><img src="images/debut.gif" alt="" width="16" height="16" class="imageSansBord" /></a></h4>
<p>Ce choix est trait&eacute; dans un <a href="preferences.php">chapitre</a> &agrave; part. </p>
<hr />
<h4><a id="A5"/>Arbre <a href="#haut"><img src="images/debut.gif" width="16" height="16" class="imageSansBord" alt="" /></a></h4>
<p>Vous voyez les renseignements g&eacute;n&eacute;raux de l'arbre :</p>
<ul>
  <li>le nom du fichier associ&eacute; (utilis&eacute; lors de la g&eacute;n&eacute;ration de fichier PDF ou d'image) ;</li>
  <li>la description de l'arbre ;</li>
  <li> la date de la cr&eacute;ation de l'arbre ;</li>
  <li> la date de la derni&egrave;re modification de l'arbre.</li>
</ul>
<p>Vous pouvez modifier ici les param&egrave;tres sp&eacute;cifiques &agrave; l'arbre comme le nombre de pages en largeur et en hauteur et le format de page. </p>
<p>Le nom de fichier et la description sont modifiables dans la fen&ecirc;tre de <a href="gestFichiers.php">gestion des fichiers</a>. </p>
<p>Quand vous modifiez le nombre de pages en largeur et/ou en hauteur, la fen&ecirc;tre de travail tient compte de ces valeurs. Les pages sont mat&eacute;rialis&eacute;es par des traits pointill&eacute;s bleus. Il en est de m&ecirc;me quand vous modifiez le format de la page. </p>
<p><img src="images/arbre01.png" width="480" height="176" alt="" /></p>
<hr />
<h4><a id="A6"/>G&eacute;n&eacute;rer PDF <a href="#haut"><img src="images/debut.gif" width="16" height="16" class="sansBord" alt="" /></a></h4>
<p>Quand vous demandez cette op&eacute;ration, G&eacute;n&eacute;Graphe g&eacute;n&egrave;re un fichier PDF contenant l'arbre tel que vous l'avez &agrave; l'&eacute;cran. Ce fichier est g&eacute;n&eacute;r&eacute; dans le r&eacute;pertoire pr&eacute;cis&eacute; dans les <a href="preferences.php#A4">pr&eacute;f&eacute;rences</a> et il a comme nom celui que vous avez pr&eacute;cis&eacute; dans les <a href="#A5">param&egrave;tres de l'arbre</a>.</p>
<p>Quand la g&eacute;n&eacute;ration est termin&eacute;e, G&eacute;n&eacute;Graphe vous en avertit : </p>
<p><img src="images/genPdf01.png" width="214" height="94" alt="" /></p>
<p>Pour plus de renseignements sur la g&eacute;n&eacute;ration des fichiers PDF, voir le <a href="generationPDF.php">chapitre sp&eacute;cifique.</a> </p>
<hr />
<h4><a id="A7"/>G&eacute;n&eacute;rer images <a href="#haut"><img src="images/debut.gif" width="16" height="16" class="imageSansBord" alt="" /></a></h4>
<p>Quand vous demandez cette op&eacute;ration, G&eacute;n&eacute;Graphe g&eacute;n&egrave;re un ou plusieurs fichiers images (format PNG) repr&eacute;sentant l'arbre tel que vous l'avez &agrave; l'&eacute;cran. Ces fichiers sont g&eacute;n&eacute;r&eacute;s dans le r&eacute;pertoire pr&eacute;cis&eacute; dans les <a href="preferences.php#A4">pr&eacute;f&eacute;rences</a>. Leur nom se base sur celui que vous avez pr&eacute;cis&eacute; dans les <a href="#A5">param&egrave;tres de l'arbre</a>.</p>
<p><img src="images/genImg01.png" width="214" height="96" alt="" /></p>
<p>Le nom de l'image g&eacute;n&eacute;r&eacute;e est &laquo;&nbsp;Arbre01_0_0.png&nbsp;&raquo;. Voici comment il est constitu&eacute; :</p>
<ul>
  <li>&laquo;&nbsp;Arbre01&nbsp;&raquo; est le nom de fichier que vous avez pr&eacute;cis&eacute; dans les <a href="#A5">param&egrave;tres de l'arbre</a> ;</li>
  <li>le premier z&eacute;ro est le num&eacute;ro de colonne de la page ;</li>
  <li>le second z&eacute;ro est le num&eacute;ro de ligne de la page.</li>
</ul>
<p>Voici les noms des fichiers g&eacute;n&eacute;r&eacute;s pour un arbre qui contient 3 pages en largeur et 2 pages en hauteur. </p>
<table  cellpadding="5" cellspacing="0" summary="">
  <tr>
    <td class="cadreNoir">Arbre01_0_0.png</td>
    <td class="cadreNoir">Arbre01_0_1.png</td>
    <td class="cadreNoir">Arbre01_0_2.png</td>
  </tr>
  <tr>
    <td class="cadreNoir">Arbre01_1_0.png</td>
    <td class="cadreNoir">Arbre01_1_1.png</td>
    <td class="cadreNoir">Arbre01_1_2.png</td>
  </tr>
</table>
<p>Ces images sont visibles dans G&eacute;n&eacute;amania. Allez dans la fiche d'une personne, le menu d&eacute;roulant sous l'ic&ocirc;ne d'arbre vous permettra d'afficher toutes les images d'arbres li&eacute;es &agrave; la personne :</p>
<p><img src="images/genImg02.png" width="193" height="99" class="imageBord1pt" alt="" /></p>
<hr />
<h4><a id="A10" />Rouvrir un fichier <a href="#haut"><img src="images/debut.gif" width="16" height="16" class="imageSansBord" alt="" /></a></h4>
<p>La partie basse du menu fichier vous propose la liste des 10 derniers arbres mis &agrave; jour. En cliquant sur un nom, vous l'ouvrez. </p>
</div>
</div>
</body>
</html>
