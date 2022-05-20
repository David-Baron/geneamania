<?php 

require __DIR__ . '/src/bootstrap.php';
include_once __DIR__ . '/fonctions/fonctions.php';

?>
<!DOCTYPE html>
<html>

<head>
	<?php
	$x = Lit_Env();
	$titre = 'Commentaire général sur le site';
	Ecrit_Meta($titre, $titre, '');
	echo "</head>\n";
	Ligne_Body(false);

	$Presence_Commentaire = Rech_Commentaire(0, 'G');
	if (($Presence_Commentaire) and (($_SESSION['estPrivilegie']) or ($Diffusion_Commentaire_Internet == 'O'))) {
		echo html_entity_decode($Commentaire, ENT_QUOTES, $def_enc);
	}
	?>
	</body>

</html>