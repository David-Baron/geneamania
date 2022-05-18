<?php

//=====================================================================
// Glossaire généalogique
// (c) JLS
// UTF-8
//=====================================================================

session_start();

// Gestion standard des pages
include('fonctions.php');
$acces = 'L';                          // Type d'accès de la page : (M)ise à jour, (L)ecture
$titre = $LG_Menu_Title['Glossary'];       // Titre pour META
$x = Lit_Env();
include('Gestion_Pages.php');

// Entête sur changement d'initiale
function Lettre($lettre)
{
	global $chemin_images, $Icones, $Comportement, $num_lig;
	$num_lig = 0;
	echo '</table>';
	if ($lettre != 'A') echo '</div>';
	echo '<table width="95%" border="0" cellspacing="1" cellpadding="3" align="center">';
	echo '<tr><td align="center" colspan="2" class="rupt_table">' . "\n";
	echo '<b><a name="' . $lettre . '"></a>' . $lettre . '</b>' . "\n";
	echo '  ' . Affiche_Icone_Lien('href="#top"', 'page_haut', 'Haut de page');
	echo '  <img id="ajout' . $lettre . '" src="' . $chemin_images . $Icones['oeil'] . '" alt="Flèche"' . Survole_Clic_Div('div' . $lettre) . '/>' . "\n";
	echo '</td></tr></table>' . "\n";
	echo '<div id="div' . $lettre . '"><table width="95%" border="0" cellspacing="1" cellpadding="3" align="center">' . "\n";
	return 0;
}

// Affiche la ligne avec le mot
function Mot($mot, $Ancre = '', $premier = false)
{
	global $num_lig;
	if (!$premier) echo '</tr>';
	if (pair($num_lig++)) $style = 'liste';
	else                $style = 'liste2';
	echo '<tr class="' . $style . '">' . "\n";
	echo '<td width="15%">';
	if ($Ancre != '') echo '<a name="' . $Ancre . '"></a>';
	echo '<b>' . my_html($mot) . '</b></td>' . "\n";
}

$compl = Ajoute_Page_Info(600, 150);
Insere_Haut($titre, $compl, 'glossaire_gen', '');

$ent_table = '<table border="0" width="95%" cellspacing="1" cellpadding="3" align="center">' . "\n";
$ent_table = '<table border="0" width="95%" cellspacing="1" align="center">' . "\n";

$exclus_liens = 'JKWXYZ';
$alpha = '';
for ($nb = ord('A'); $nb <= ord('Z'); $nb++) {
	$car = chr($nb);
	if (strpos($exclus_liens, $car) === false) {
		$contenu = '<a ';
		if ($car == 'A') $contenu .= ' id="top" ';
		$contenu .= 'href="#' . $car . '">' . $car . '</a>';
	} else                                       $contenu = $car;
	$alpha .= '<td class="rupt_table" align="center">' . $contenu . '</td>';
}

echo $ent_table . '<tr>' .
	'<td colspan="26" align="center">' . Affiche_Icone('tip', 'Conseil') . ' Cliquez sur les mots en <font color="blue">bleu</font>, ils
		renvoient à un autre mot ou sur <img src="' . $chemin_images . $Icones['loupe'] . '" border="0" alt="En savoir plus"/> pour avoir plus de détails.
	</td></tr><tr>' . $alpha . '</tr><tr><td colspan="26"> </td></tr>' . "\n";

$x = Lettre('A');

$x = Mot(LG_GLOSS_ACT, '', true);
?>
<td>
	écrit constatant un fait (acte d'état civil) ou enregistrement une déclaration.
</td>
<?php $x = Mot(LG_GLOSS_ADULTERINE); ?>
<td>
	Enfant né de relations hors mariage.
</td>
<?php $x = Mot(LG_GLOSS_AGNATIC, 'AG'); ?>
<td>
	Ascendant ou descendant par les hommes. Une généalogie
	est agnatique lorsqu'elle ne prend en compte que les hommes. Voir
	aussi <a href="#CO">Cognat</a>.
</td>
<?php $x = Mot(LG_GLOSS_GRAND_FA_MOTHER); ?>
<td>
	Désigne le grand-père ou la grand-mère.
</td>
<?php $x = Mot(LG_GLOSS_ANCESTORS); ?>
<td>
	Au pluriel, désigne l'ensemble des ancêtres.
</td>
<?php $x = Mot(LG_GLOSS_ELDER); ?>
<td>
	Celui qui est né le premier. Voir aussi <a href="#BE">Benjamin</a>
	ou <a href="#PU">Puîné</a>.
</td>
<?php $x = Mot(LG_GLOSS_FIRSTBORN); ?>
<td>
	Priorité d'&acirc;ge, principalement entre les enfants m&acirc;les d'une famille noble.<br />
	Droit d'aînesse : droit qu'avait l'aîné de prendre dans la succession des parents, une plus grande part que les autres enfants.
</td>
<?php $x = Mot(LG_GLOSS_RELATED); ?>
<td>
	Allié par le mariage.
</td>
<?php $x = Mot(LG_GLOSS_ARMORIAL); ?>
<td>
	Recueil d'armoiries.
</td>
<?php $x = Mot(LG_GLOSS_ARMS, 'AR'); ?>
<td>
	Toujours au pluriel, désigne l'ensemble de l'écu et de ses ornements.
</td>
<?php $x = Mot(LG_GLOSS_REG_ITEM); ?>
<td>
	Unité de classement d'archives (registres, pièces, ...).
</td>
<?php $x = Mot(LG_GLOSS_ANCESTOR); ?>
<td>
	Un ancêtre direct
</td>
<?php $x = Mot(LG_GLOSS_COMMON_ANCESTOR); ?>
<td>
	Ancêtre commun à plusieurs branches. On utilise souvent ce terme pour la noblesse.
</td>
</tr>
<?php $x = Lettre('B');
$x = Mot(LG_GLOSS_BANNS, '', true); ?>
<td>
	Proclamations publiques.
</td>
<?php $x = Mot(LG_GLOSS_BAPTISM); ?>
<td>
	Sacrement qui marque l'entrée d'un enfant (ou d'un adulte) dans la vie chrétienne.
</td>
<?php $x = Mot(LG_GLOSS_YOUNGEST); ?>
<td>
	Le plus jeune enfant de la famille. Le dernier né. Voir
	aussi <a href="#PU">Puîné</a> ou <a href="#AI">Aîné</a>.
</td>
<?php $x = Mot(LG_GLOSS_GREAT_GRANDPARENT); ?>
<td>
	Père, mère de l'aïeul (arrière grand-père, arrière-grand-mère).
</td>
<?php $x = Mot(LG_GLOSS_BLAZON); ?>
<td>
	Ensemble des pièces qui constituent un écu héraldique.
</td>
<?php $x = Mot(LG_GLOSS_BWB, 'BMS'); ?>
<td>
	Cette abréviation désigne les <a href="#RE">registres
		paroissiaux</a> dans lesquels les Baptêmes, Mariages et Sépultures étaient indiqués.
</td>
<?php $x = Mot(LG_GLOSS_BRANCH); ?>
<td>
	Partie d'un arbre généalogique. Exemples : branche paternelle, branche cadette...
</td>
</tr>
<?php $x = Lettre('C');
$x = Mot(LG_GLOSS_CA, '', true); ?>
<td>
	Abréviation du latin Circa qui signifie environ. Ainsi ca 1800 signifie vers 1800.
</td>
<?php $x = Mot(LG_GLOSS_LAND_REGISTRY); ?>
<td>
	Registre public sur lequel on indiquait la surface et la valeur
	des biens fonciers en vue de la perception de l'impôt.
</td>
<?php $x = Mot(LG_GLOSS_CADET); ?>
<td>
	Né en second. On parle aussi de la <a href="#BR">branche</a> cadette d'une famille.
</td>
<?php $x = Mot(LG_GLOSS_POLL_TAX); ?>
<td>
	Impôt, taxe par tête. La capitation fut établie à la fin de 1695.
</td>
<?php $x = Mot(LG_GLOSS_CARTULARY); ?>
<td>
	Ensemble de documents, chartes, contrats, actes de foi et d'hommage,
	donations..., d'une famille ou d'une institution comme une abbaye.
</td>
<?php $x = Mot(LG_GLOSS_CHARTER); ?>
<td>
	Document qui concerne les biens et les titres d'une famille ou
	d'une institution et prouvant ses droits. Le chartrier est l'ensemble
	des chartes de la famille ou de l'institution.
</td>
<?php $x = Mot(LG_GLOSS_BOURG_RECENS); ?>
<td>
	En Bourgogne, ce sont des états nominatifs des chefs de
	famille établis en vue de l'assiette d'impositions directes.
</td>
<?php $x = Mot(LG_GLOSS_COGNATIC, 'CO'); ?>
<td>
	Ascendant ou descendant par les femmes. Une généalogie
	est cognatique lorsqu'elle ne prend en compte que les femmes.
	Voir aussi <a href="#AG">Agnat</a>.
</td>
<?php $x = Mot(LG_GLOSS_COLLATERAL); ?>
<td>
	Parent descendant d'un ancêtre commun. Les collatéraux
	sont issus d'une autre <a href="#BR">branche</a>. Un cousin est
	par exemple un collatéral.
</td>
<?php $x = Mot(LG_GLOSS_CONSANGUINEOUS, 'CONS'); ?>
<td>
	Parent du côté paternel. Deux enfants issus d'un
	même père mais de mères différentes
	sont dits frères consanguins. Voir aussi <a href="#UT">Utérin</a>.
</td>
<?php $x = Mot(LG_GLOSS_CONSANGUINITY); ?>
<td>
	Parenté proche entre deux conjoints. Voir dispense de consanguinité.
</td>
<?php $x = Mot(LG_GLOSS_CONSCRIPTION); ?>
<td>
	Tous les ans, les jeunes gens ayant atteint l'&acirc;ge d'effectuer
	leur service militaire national s'inscrivent sur les rôles militaires.
</td>
<?php $x = Mot(LG_GLOSS_REFERENCE); ?>
<td>
	Marque alphabétique et /ou numérique servant à
	classer des liasses d'archives ou des ouvrages de bibliothèques.
</td>
<?php $x = Mot(LG_GLOSS_CURATORSHIP, 'CURAT'); ?>
<td>
	Régime de protection des incapables majeurs plus souple que la <a href="#TUT">tutelle</a>, leur permettant
	d'accomplir certains actes administratifs.
</td>
</tr>
<?php $x = Lettre('D');
$x = Mot(LG_GLOSS_DECUJUS, 'CUJUS', 1); ?>
<td>
	La personne dont on établit la généalogie.
	En latin : "<i>de cujus successione agitur" </i> ou
	"<i>de cujus boni agitur"</i>, ce qui signifie "<i>de la succession de qui il s'agit</i>".
	Sert à désigner par extension le point de départ d'une généalogie.
	Le de cujus porte le N° <a href="#SOSA">Sosa</a>1.
</td>
<?php $x = Mot(LG_GLOSS_DEG_RELATIONSHIP); ?>
<td>
	Nombre permettant de mesurer la parenté entre deux membres
	d'une même famille. Le degré de parenté ne
	se mesure pas de la même manière en droit civil et
	en droit canon. Voir aussi<a href="#dispense"> Dispenses de consanguinité</a>.
</td>
<?php $x = Mot(LG_GLOSS_DESCENDANTS); ?>
<td>
	Ensemble des personnes issues d'un individu ou d'un couple (enfants, petits-enfants, ...).
</td>
<?php $x = Mot(LG_GLOSS_INBREEDING_EXEMPTIONS, 'dispenseC'); ?>
<td>
	Lorsque les époux étaient parents, ils devaient demander une dispense de consanguinité avant de pouvoir
	se marier. Voir aussi <a href="#IMP">Implexe</a>
</td>
<?php $x = Mot(LG_GLOSS_AFFINITY_EXEMPTIONS, 'dispenseA'); ?>
<td>
	Lors des mariages, elles étaient nécessaires dans certains cas dont les principaux sont :
	<ul>
		<li> remariage avec un parent du conjoint défunt (frère,
			soeur, oncle, tante, neveu, nièce, etc.) ;</li>
		<li> parenté avec l'époux ou l'épouse d'un ascendant du
			conjoint, mais ne figurant pas dans l'ascendance du dit conjoint ;</li>
		<li>parrain ou marraine épousant filleule ou filleul ; on parle alors d'affinité spirituelle ;</li>
		<li>mariage des parrain et marraine d'un même enfant.</li>
	</ul>
</td>
</tr>
<?php $x = Lettre('E');
$x = Mot(LG_GLOSS_ENDOGAMY, '', 1); ?>
<td>
	Mariage entre individus originaires du même lieu.
</td>
<?php $x = Mot(LG_GLOSS_REGISTRATION); ?>
<td>
	Inscription sur un registre public des actes notariés.
</td>
</tr>
<?php $x = Lettre('F');
$x = Mot(LG_GLOSS_ANNOUNCEMENT, '', 1); ?>
<td>
	Lettre ou billet qui annonce un événement familial
	: naissance, baptême, mariage, décès...
</td>
<?php $x = Mot(LG_GLOSS_HOUSE, 'FE'); ?>
<td>
	Sous l'Ancien Régime (avant la Révolution), cela
	désignait l'ensemble des personnes vivant sous le même
	toit et se réunissant donc le soir autour du feu. Le feu
	ne comprend donc pas seulement la famille nucléaire mais
	aussi les domestiques... Les <a href="#REC">recensements</a> se
	faisaient par feu et non par personne.
</td>
<?php $x = Mot(LG_GLOSS_FILIATION, 'FI'); ?>
<td>
	Lien de parenté unissant ascendants et descendants. Une
	filiation peut être <a href="#AG">agnatique</a> ou <a href="#CO">cognatique</a>.
	Voir aussi ces mots.
</td>
<?php $x = Mot(LG_GLOSS_COLLECTION); ?>
<td>
	Ensemble des documents d'archives conservés dans un dépôt,
	des livres conservés dans une bibliothèque, ...
</td>
</tr>
<?php $x = Lettre('G');
$x = Mot(LG_GLOSS_GEDCOM, '', 1); ?>
<td>
	Norme d'échange de données généalogiques.
</td>
<?php $x = Mot(LG_GLOSS_GENERATION); ?>
<td>
	Chacun des degrés successifs d'une <a href="#FI">filiation</a>
	: Génération 1 : l'enfant, génération
	2 : les parents, génération 3 : les grands-parents...
	On évalue à 30 ans en moyenne le temps qui sépare deux générations.
</td>
<?php $x = Mot(LG_GLOSS_FULL_ORIGIN); ?>
<td>
	Frère germain, soeur germaine : issu du même père et de la même mère.
	(voir <a href="#UT">utérin</a> et <a href="#CONS">consanguin</a>).
	Cousin germain, cousine germaine : issu d'un frère ou d'une soeur du père ou de la mère.
</td>
<?php $x = Mot(LG_GLOSS_REGISTRY); ?>
<td>
	Lieu ou l'on classe et l'on conserve, sous la surveillance du greffier, les minutes des jugements, arrêts,
	rapports d'experts et ou l'on fait des déclarations, des dépôts.
</td>
</tr>
<?php $x = Lettre('H');
$x = Mot(LG_GLOSS_HERALDRY, '', 1); ?>
<td>
	Science des blasons et des <a href="#AR">armoiries</a>.
</td>
<?php $x = Mot(LG_GLOSS_HEIRS, 'HO'); ?>
<td>
	Héritiers directs. On trouve la mention sans hoirs ou
	s.h. dans des généalogies. Voir aussi <a href="#PO">postérité</a>.
</td>
</tr>
<?php $x = Lettre('I');
$x = Mot(LG_GLOSS_ILLEGITIMATE, '', 1); ?>
<td>
	Né hors mariage.
</td>
<?php $x = Mot(LG_GLOSS_IMPLEX, 'IMP'); ?>
<td>
	C'est le rapport entre le nombre théorique des ancêtres
	et leur nombre réel. Voir aussi <a href="#dispense">dispenses
		de consanguinités</a>
</td>
<?php $x = Mot(LG_GLOSS_INDEX); ?>
<td>
	Table alphabétique des noms cotés dans un ouvrage
	ou un ensemble de documents.
</td>
<?php $x = Mot(LG_GLOSS_PUB_RECORD); ?>
<td>
	Inscription sur les registres du greffe du bailliage de la teneur
	essentielle des actes rédigés par les notaires.
</td>
<?php $x = Mot(LG_GLOSS_NO_WILL); ?>
<td>
	Décédé sans testament.
</td>
<?php $x = Mot(LG_GLOSS_INVENTORY); ?>
<td>
	Ouvrage qui analyse un fond d'archives et permet de l'exploiter
	plus facilement.
</td>
<?php $x = Mot(LG_GLOSS_POST_MORTEM_INVENTORY); ?>
<td>
	Dénombrement de tous les biens meubles et immeubles laissés par un défunt et constituant sa succession.
	On trouve ces documents dans la série B aux archives départementales.
</td>
</tr>
<?php $x = Lettre('L');
$x = Mot(LG_GLOSS_LEGITIMATION, 'LEGIT', 1); ?>
<td>
	Action de légitimer, de rendre légitime. La légitimation d'un enfant <a href="#NATUR">naturel</a>.
</td>
<?php $x = Mot(LG_GLOSS_BUNDLE); ?>
<td>
	Unité de conservation d'archives.
</td>
<?php $x = Mot(LG_GLOSS_LINEAGE); ?>
<td>
	Ligne directe qui lie une personne à son ancêtre. On dit encore lignée ou ligne.
</td>
<?php $x = Mot(LG_GLOSS_HISTORY_BOOK); ?>
<td>
	Ouvrage manuscrit dans lequel ont été inscrits tous les événements marquants de la vie d'une famille,
	parfois sur plusieurs générations.
</td>
<?php $x = Mot(LG_GLOSS_FAMILY_REC_BOOK); ?>
<td>
	Document délivré lors du mariage o&ugrave; sont notés les renseignements relatifs à l'état civil.
</td>
<?php $x = Mot(LG_GLOSS_MILITARY_RECORD); ?>
<td>
	Document délivré lors du service militaire.
</td>
</tr>
<?php $x = Lettre('M');
$x = Mot(LG_GLOSS_FAMILY, '', 1); ?>
<td>
	Famille, s'emploie uniquement pour la noblesse.
</td>
<?php $x = Mot(LG_GLOSS_MATRONYM, 'MA'); ?>
<td>
	Nom de famille transmis par la mère. Voir aussi <a href="#PA">Patronyme</a>.
</td>
<?php $x = Mot(LG_GLOSS_MARGINAL_MENTION); ?>
<td>
	Inscription faite en marge d'un acte d'état civil indiquant le contenu d'un autre acte.
</td>
<?php $x = Mot(LG_GLOSS_RECORD); ?>
<td>
	Acte original déposé au greffe ou conservé chez un notaire,
	pour délivrer des copies appelées grosses ou expéditions.
</td>
</tr>
<?php $x = Lettre('N');
$x = Mot(LG_GLOSS_NATURAL, 'NATUR', 1); ?>
<td>
	Qui est né hors mariage, par opposition à <a href="#LEGIT">légitime</a>. Enfant naturel.
	Qui est né de la personne même par opposition à adoptif
</td>
<?php $x = Mot(LG_GLOSS_NUMBERING); ?>
<td>
	Système d'indexation des arbres généalogiques permettant un inventaire et un repérage méthodique de chaque individu.<br />
	Exemples : <a href="#SOSA">Sosa</a>-Stradonitz (ou encore Eytzinger), d'Aboville, Meurgey Tupigny.
</td>
<?php $x = Mot(LG_GLOSS_NOBLE_FAMILIES); ?>
<td>
	Ouvrage recensant les familles nobles.
</td>
</tr>
<?php $x = Lettre('O');
$x = Mot(LG_GLOSS_URGENT_BAPTISM, '', 1); ?>
<td>
	Baptême réalisé d'urgence en l'absence d'un ecclésiastique, lorsque l'on craint le décès de l'enfant.
</td>
<?php $x = Mot(LG_GLOSS_ONOMASTICS); ?>
<td>
	Science qui étudie les noms propres (noms de lieux, patronymes...).
</td>
</tr>
<?php $x = Lettre('P');
$x = Mot(LG_GLOSS_PALEOGRAPHY, '', 1); ?>
<td>
	étude des écritures anciennes.
</td>
<?php $x = Mot(LG_GLOSS_RELATIVES); ?>
<td>
	Ensemble des parents vivants d'un individu à un moment donné.
</td>
<?php $x = Mot(LG_GLOSS_PARISH); ?>
<td>
	Territoire soumis à l'autorité spirituelle d'un curé.
</td>
<?php $x = Mot(LG_GLOSS_PATRONYMIC, 'PA'); ?>
<td>
	Nom de famille transmis par le père. Voir aussi <a href="#MA">Matronyme</a>.
</td>
<?php $x = Mot(LG_GLOSS_POSTERITY, 'PO'); ?>
<td>
	Ensemble des descendants d'une personne. Lorsque la personne n'a pas de descendants, on indique "sans postérité"
	ou "s.p.". Voir aussi <a href="#HO">Hoirs</a>.
</td>
<?php $x = Mot(LG_GLOSS_YOUNGER, 'PU'); ?>
<td>
	Né après. On parle par exemple d'un frère
	puîné. Voir aussi <a href="#HO">Hoirs</a> et <a href="#BE">Benjamin</a>.
</td>
</tr>
<?php $x = Lettre('Q');
$x = Mot(LG_GLOSS_LINEAGE_ANCESTOR, '', 1); ?>
<td>
	Mot ancien synonyme d'ancêtre.
</td>
</tr>
<?php $x = Lettre('R');
$x = Mot(LG_GLOSS_CENSUS, 'REC', 1); ?>
<td>
	Opération administrative qui consiste à dénombrer une population. Ces documents apportent de nombreux renseignements
	concernant les familles. Jusqu'au XVIIIe siècle, les recensements sont faits par <a href="#FE">feu</a>.
</td>
<?php $x = Mot(LG_GLOSS_PARISH_REGISTERS, 'RE'); ?>
<td>
	Registres de la paroisse dans lesquels étaient indiqués
	les baptêmes, mariages et sépultures. Voir aussi <a href="#BMS">BMS</a>.
</td>
</tr>
<?php $x = Lettre('S');
$x = Mot(LG_GLOSS_SOSA, 'SOSA', 1); ?>
<td>
	Numéro que l'on attribue à un ancêtre.
	<a href="<?php echo Get_Adr_Base_Ref(); ?>Glossaire_Sosa.php">
		<img src="<?php echo $chemin_images . $Icones['loupe']; ?>" alt="En savoir plus" border="0" />
	</a>
</td>
<?php $x = Mot(LG_GLOSS_SOURCES); ?>
<td>
	Documents consultés pour l'établissement d'une généalogie ou d'une histoire familiale.
</td>
<?php $x = Mot(LG_GLOSS_NICKNAME); ?>
<td>
	Nom donné à une personne en plus de son nom véritable.
	Les surnoms du Moyen &Acirc;ge sont à l'origine de nos noms de famille actuels.
</td>
</tr>
<?php $x = Lettre('T');
$x = Mot(LG_GLOSS_10Y_TABLE, '', 1); ?>
<td>
	Registre récapitulatif des actes d'état civil classés
	par ordre alphabétique et chronologique sur une période
	de dix ans. Ces tables ont été instituées en 1793.
</td>
<?php $x = Mot(LG_GLOSS_TABELLION); ?>
<td>
	Fonctionnaire autrefois chargé de mettre en grosse les actes dont les minutes
	avaient été dressées par les notaires.
</td>
</tr>
<?php $x = Lettre('U');
$x = Mot(LG_GLOSS_COMMON, '', 1); ?>
<td>
	Ouvrage de consultation courante mis à la disposition
	des lecteurs dans un dépôt d'archives ou une bibliothèque.
</td>
<?php $x = Mot(LG_GLOSS_UTERINE, 'UT'); ?>
<td>
	Parent du côté maternel. Deux enfants nés d'une même mère mais de pères différents
	sont dits frères utérins. Voir aussi <a href="#CONS">Consanguin</a>.
</td>
</tr>
<?php $x = Lettre('V');
$x = Mot(LG_GLOSS_5PC_TAX, '', 1); ?>
<td>
	Impôt indirect de 5% de tous les revenus, établi en 1749 et
	aboli en 1786, destiné à l'amortissement de la dette du royaume.
</td>
</tr>
</table>
</div>
<table>
	<tr>
		<td> </td>
	</tr>
</table>
<?php

Insere_Bas($compl);
?>
</body>

</html>