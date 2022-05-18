<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<?php
	include('fonctions.php');
	$objet = 'Infos import documents';
	$x = Lit_Env();
	Ecrit_Meta($objet, $objet, '');
	echo "</head>\n";
	Ligne_Body();
	?>
	Lorsqu'un utilisateur a à la fois un site local sur son ordinateur et un site internet, il remonte les données de son site local
	vers son site internet en utilisant les fonctions d'export. Toutefois, ceci permet de remonter les données mais pas les images ou autres documents.
	L'utilisateur doit alors remonter ces images et documents via un logiciel de transfert de fichiers (exemple Filezilla) lorsque cela est possible.
	Lorsque cela n'est pas possible, il doit remonter ces fichiers via la fonction d'import de documents.<br />
	Les images et documents absents sont ceux qui ont été trouvés dans les données mais pour lequel le fichier n'est pas présent.<br />
	L'option "Remplacer" permet de ne pas écraser les fichiers de même noms présents.
	</body>

</html>