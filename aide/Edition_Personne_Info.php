<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<?php
	include('fonctions.php');
	$objet = 'Infos édition personne';
	$x = Lit_Env();
	Ecrit_Meta($objet, $objet, '');
	echo "</head>\n";
	Ligne_Body();
	?>
	Les zones obligatoires sont le nom et les prénoms.<br />
	Cette page permet de créer ou modifier une personne.<br />
	La date de naissance ou de décès peut être choisie en cliquant sur l'icône <?php echo Affiche_Icone('calendrier', 'calendrier'); ?>.<br />
	Les professions sont gérées dans les évènements.<br />
	L'icône <?php echo Affiche_Icone('ajout', 'ajout ville'); ?> permet d'ajouter dynamiquement une ville aux listes des villes de naissance ou de décès.<br />
	L'icône <?php echo Affiche_Icone('calculette', 'calculette'); ?> permet de calculer le numéro sosa à partir de la saisie effectuée par l'utilisateur dans le numéro.
	Les calculs disponibles sont "père" (P), "mère" (M), "enfant" (E) ou "conjoint" (C). Par exemple, si l'utilisateur veut calculer la mère de la personne de numéro
	sosa 10, il saisit =M10 dans le numéro ; un clic sur l'icône transforme le numéro saisi en 21 (mère de 10 dans la numérotation sosa). Il est à noter que le
	calcul est insensible à la casse ; ainsi =m10 a le même effet que =M10.
	<br />
	L'icône <?php echo Affiche_Icone('decujus', 'de cujus'); ?> permet d'attribuer automatiquement le numéro 1 (de cujus) à la personne.<br />
	L'icône <?php echo Affiche_Icone('copier', 'copie'); ?> permet de coller le nom, la ville de naissance ou de décès de la fiche précédente sur laquelle était l'utilisateur en création ou modification.<br />
	<br />
	Les boutons disponibles sont :<br />
	- <?php echo $lib_Okay; ?> pour valider la création ou modification ;<br />
	- <?php echo $lib_Annuler; ?> pour annuler les modifications sur la fiche ;<br />
	- <?php echo $lib_Supprimer; ?> pour supprimer la personne ; ce bouton n'est affiché que si la personne n'est pas dans une union, qu'elle n'a pas de filiation
	et qu'elle n'est pas dans une filiation en tant que parent.<br /><br />
	Cette page n'est accessible que pour le profil contributeur.
	</body>

</html>