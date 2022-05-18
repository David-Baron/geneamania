<?php

$salt1 = ';$��d';
$salt2 = '#\'_^';
$salt3 = '@")[&�';

//echo $_SERVER['PHP_SELF'].'.';
//$nom_page = $_SERVER['PHP_SELF'];
$nom_page = my_self();
$pos = strrpos($nom_page, '/');
if ($pos !== false) $nom_page = substr($nom_page,$pos+1);
//echo $nom_page.'.';

// Sp�cifique index
if ($nom_page == 'index.php') {
//if (strpos($_SERVER['PHP_SELF'],'index.php') !== false) {
	$LG_index_welcome = 'Bienvenue sur le site de g�n�alogie de';
	$LG_index_responsability = 'Les donn�es sont publi�es sous la responsabilit� du titulaire du site';
	$LG_index_connexion_error = 'Erreur de code utilisateur et/ou mot de passe';
	$LG_index_title = 'G�n�alogie';
	$LG_index_desc = 'Accueil de la g�n�alogie de';
	$LG_index_tip_no_param = 'Pensez � param�trer votre site dans le menu "Gestion du site"';
	$LG_index_quick_search = 'Recherche rapide';
	$LG_index_tip_search = 'Le nom peut contenir le caract�re g�n�rique * qui remplace alors un nombre quelconque de caract�res '.
			'(exemple : saint* donne les noms commen�ant par "saint", donc �galement ceux commen�ant par "sainte"). '.
			'La recherche ne tient pas compte des minuscules / majuscules.';
	//$LG_index_tip_infos = 'Plus d\'infos sur les recherches au survol des ';
	$LG_index_tip_maintenance = 'Site en maintenance, merci de revenir ult�rieurement';
	$LG_index_menu_pers = 'Personnes';
	$LG_index_menu_names = 'Noms';
	$LG_index_menu_towns = 'Villes';
	$LG_index_searches = 'Recherches';
	$LG_index_news = 'Actualit�s';
	$LG_index_links = 'Liens';
	$LG_index_last_update = 'Derni�re mise � jour du site le';
	$LG_index_forum = 'Forum G�n�amania';
	$LG_index_ask_site = 'Demandez votre site personnel gratuit';
	$LG_index_version = 'logiciel de g�n�alogie libre et gratuit, version';
	$LG_index_hested_premium = ' site h�berg� Premium';
	$LG_index_hested_free = ' site h�berg� gratuit';
	$LG_index_birthdays = 'anniversaires de naissance';
	$LG_index_today = 'aujourd\'hui ';
	$LG_index_tomorrow = 'demain ';
	$LG_index_version_mismatched = 'Incoh�rence dans la version';
	$LG_index_please_migrate = 'veuillez proc�der � une migration de la base.';
	$LG_index_migrate_here = 'Migration disponible ici';
	$LG_index_password = 'mot de passe';
	$LG_index_connexion = 'Connexion au site';
	$LG_index_connected_user = 'Vous utilisez actuellement l\'utilisateur';
	$LG_index_connected_level = 'avec des droits de niveau';
	$LG_index_contact_support = 'Site verrouill�, merci de contacter le support';
	$LG_index_info_genegraphe = 'Lancement de G�n�Graphe';
	$LG_index_doc_genegraphe = 'Documentation de G�n�Graphe';
	$LG_index_getting_started_Windows = 'Guide de d�marrage rapide Windows';
	$LG_index_getting_started_hosted = 'Guide de d�marrage rapide site h�berg�';
	$LG_index_hosted_free = 'site h�berg� gratuit';
	$LG_index_hosted_premium = 'site h�berg� Premium';
	$LG_index_psw_forgoten = 'mot de passe oubli�';
}

// Sp�cifique Liste des personnes 1/2
if ($nom_page == 'Liste_Pers.php') {
	define('LG_CREATE_PERS_BORN_IN', 'Cr�ation de personnes n�es �');
	define('LG_CREATE_PERS_DEAD_IN', 'Cr�ation de personnes d�c�d�es �');
	define('LG_LPERS_OBJ_C', 'Personnes par cat�gorie');
	define('LG_LPERS_OBJ_D', 'Personnes par ville de d�c�s');
	define('LG_LPERS_OBJ_K', 'Personnes par ville de contrat de mariage');
	define('LG_LPERS_OBJ_M', 'Personnes par ville de mariage');
	define('LG_LPERS_OBJ_N', 'Personnes par ville de naissance');
	define('LG_LPERS_OBJ_P', 'Liste des personnes');
	define('LG_LPERS_PERS_FILE', 'Fiche personne');
	define('LG_LPERS_QUICK_ACCESS', 'Acc�s rapide');
	define('LG_LPERS_SELECT_NAME', 'S�lectionnez un nom...');
	define('LG_ORDER_BY_DATE', 'Tri par date');
	define('LG_ORDER_BY_MEN', 'Tri par homme');
	define('LG_ORDER_BY_WOMEN', 'Tri par femme'); 
}

// Sp�cifique Liste des personnes 2/2
if (($nom_page == 'Liste_Pers2.php') or ($nom_page == 'Fiche_NomFam.php')) {
	define('LG_LPERS_OBJ_P', 'Personnes s\'appelant');
	define('LG_LPERS_OBJ_PC', 'Personnes [avec leur conjoints] s\'appelant');
	define('LG_LPERS_OBJ_N', 'Personnes n�es �');
	define('LG_LPERS_OBJ_D', 'Personnes d�c�d�es �');
	define('LG_LPERS_OBJ_M', 'Personnes mari�es �');
	define('LG_LPERS_OBJ_K', 'Personnes dont le contrat de mariage est �');
	define('LG_LPERS_OBJ_C', 'Personnes appartenant � la cat�gorie');
}

if (($nom_page == 'Edition_NomFam.php') or ($nom_page == 'Fiche_NomFam.php')) {
	define('LG_NAME', 'Nom de famille');
	define('LG_NAME_PHONETIC', 'Code phon�tique');
	define('LG_NAME_SEARCH', 'Recherche du nom sur les sites h�berg�s G�n�amania');
	define('LG_NAME_REC', 'Fiche du nom');
	define('LG_NAME_PRONUNCIATION', 'Prononciation');
	define('LG_NAME_PRONUNCIATION_CALC', 'Prononciation calcul�e');
	define('LG_NAME_VOWELS', 'Voyelles');
	define('LG_NAME_CONSONANTS', 'Consonnes');
	define('LG_NAME_SAMPLE', 'Exemple');
	define('LG_NAME_SPACE', 'Espace');
	define('LG_NAME_BACKSPACE', 'Effacer');
}

// Sp�cifique Liste des personnes par g�n�ration
if (($nom_page == 'Liste_Pers_Gen.php') or ($nom_page == 'Arbre_Desc_Pers.php')) {
	$LG_LPersG_object = 'Liste par g�n�ration';
	$LG_LPersG_Implex_or_error = 'Implex ou erreur de num�ro probable, le num�ro calcul� est entre parenth�ses';
	$LG_LPersG_first = '�re';
	$LG_LPersG_next = '�me';
	$LG_LPersG_generation = 'g�n�ration';
	$LG_LPersG_missing = 'Il manque ';	// Attention, il faut l'espace � la fin
	$LG_LPersG_father_of = 'le p�re de';
	$LG_LPersG_mother_of = 'la m�re de';
	$LG_LPersG_generation = 'G�n�ration';
	$LG_LPersG_number = 'Num�ro';
	$LG_LPersG_born_precision = 'Pr�cision naissance';
	$LG_LPersG_born_calendar = 'Calendrier naissance';
	$LG_LPersG_born_where = 'N�(e) �';
	$LG_LPersG_dead_precision = 'Pr�cision d�c�s';
	$LG_LPersG_dead_calendar = 'Calendrier d�c�s';
	$LG_LPersG_dead_where = 'D�c�d�(e) �';
	$LG_LPersG_limited_max_gen_1 = 'Affichage limit� � ';
	$LG_LPersG_limited_max_gen_2 = ' g�n�rations, veuillez utiliser �ventuellement la ';
	$LG_LPersG_limited_max_gen_3 = 'vue personnalis�e';
	$LG_LPersG_limited_max_gen_4 = ' pour remonter au del�';
	$LG_LPersG_display_places = 'Afficher les lieux';
	$LG_LPersG_missing_pers = 'Afficher les personnes manquantes';
	$LG_LPersG_display_missing = 'Oui';
	$LG_LPersG_display_only_missing = 'Seulement';
	$LG_LPersG_hint_eye = 'Afficher / masquer toutes les g�n�rations';
}

if (($nom_page == 'Fiche_Lien.php') or ($nom_page == 'Edition_Lien.php')) {
	define('LG_LINK_AVAIL_HOME', 'Pr�sent sur la page d\'accueil');
	define('LG_LINK_DESCRIPTION', 'Description');
	define('LG_LINK_NO_REFRESH', 'non rafra�chie');
	define('LG_LINK_OR_EXISTING_TYPE', 'Ou type existant');
	define('LG_LINK_SELECT_TYPE', 'S�lectionnez un type...');
	define('LG_LINK_THIS', 'ce lien');
	define('LG_LINK_TYPE', 'Type de lien');
	define('LG_LINK_URL', 'Adresse');
	define('LG_LINK_VISIBILITY', 'Visibilit� internet');
	define('LG_LINK_WITH_IMAGE', 'Avec image');
}

if ($nom_page == 'cal.php') {
	define('LG_CAL_BEG', 'Date initiale');		
	define('LG_CAL_CALCULATE', 'Calcul de date');
	define('LG_CAL_FILL_TIP', "Ne saisissez que des chiffres ; format attendu : jjmmaaaa (2 chiffres pour le jour, 2 pour le mois, 4 pour l'ann�e");
	define('LG_CAL_GREGORIAN', 'Gr�gorienne');
	define('LG_CAL_MONTH', 'Mois');
	define('LG_CAL_OFFSET', 'D�calage');
	define('LG_CAL_QUICK_FILL', "Saisie rapide d'une date gr�gorienne");
	define('LG_CAL_RESULT', 'Date calcul�e');	
	define('LG_CAL_REVOLUTIONARY', 'R�volutionnaire');
	define('LG_CAL_TITLE', "Saisie d'une date");
	define('LG_CAL_TODAY', "Aujourd'hui");
	define('LG_CAL_WITH_SELECT', 'Saisie assist�e');
	define('LG_CAL_YEAR', 'Ann�e');
	define('LG_CAL_ERROR_DATE', 'Date incoh�rente');
	define('LG_CAL_ERROR_BOUNDARIES', 'hors limites');
}

if ($nom_page == 'Rectif_Utf8.php') {
	$LG_Rect_Utf_Msg_Beg = 'Fin de la rectification ; ';
	$LG_Rect_Utf_Msg_End = ' requ�tes pass�es';
}

if ($nom_page == 'Edition_Lier_Eve.php') {
	$LG_Link_Ev_Pers_Pers = 'Personne';
	$LG_Link_Ev_Pers_Event_Type = 'Type d\'�v�nement';
	$LG_Link_Ev_Pers_Event = 'Ev�nement';
	$LG_Link_Ev_Pers_Last_Event = 'Dernier �v�nement pour le type';
	$LG_Link_Ev_Pers_Role = 'R�le';
	$LG_Link_Ev_Pers_Place = 'Lieu de la participation';
	$LG_Link_Ev_Pers_Beg_Part = 'D�but de la participation';
	$LG_Link_Ev_Pers_End_Part = 'Fin de la participation';
	$LG_Link_Ev_Pers_Paste_Beg = 'Copier la date de d�but';
	$LG_Link_Ev_Pers_Save_GeneGraphe = 'Participation prise en compte dans G�n�Graphe';
	$LG_Link_Ev_Link = 'Lier un �v�nement avec';
	$LG_Link_Ev_Main_Pers = 'Personnage principal';
}

if ($nom_page == 'Edition_Lier_Nom.php') {
	$LG_Link_Name_Pers = 'Personne concern�e';
	$LG_Link_Name_New = 'Nouveau nom';
	$LG_Link_Name_Upper = 'Mettre le nom en majuscules';
	$LG_Link_Name_Unknown = 'Nom inconnu';
	$LG_Link_Name_Delete = 'le lien avec ce nom';
	$LG_Link_Name_Not_Found = 'Personne non trouv�e';
}

if ($nom_page == 'Edition_Lier_Pers.php') {
	$LG_Link_Pers_Pers = 'Personne';
	$LG_Link_Pers_Last_Pers = 'Derni�re personne pour le nom';
	$LG_Link_Pers_Role = 'R�le';
	$LG_Link_Pers_Beg = 'D�but du lien';
	$LG_Link_Pers_End = 'Fin du lien';
	$LG_Link_Pers_Main = 'personnage principal';
	$LG_Link_Pers_No_Matter = 'indiff�rent';
	$LG_Link_Pers_With = 'Etablir un lien avec ';
	$LG_Link_Pers_Copy_Date = 'Copier la date de d�but';;
}

if (($nom_page == 'Fiche_Document.php') or ($nom_page == 'Edition_Document.php') 
		or ($nom_page == 'Create_Multiple_Docs.php') or ($nom_page == 'Edition_Lier_Doc.php')) {
	$LG_Docs_Doc = 'Document';
	$LG_Docs_Title = 'Titre';
	$LG_Docs_Nature = 'Nature';
	$LG_Docs_File = 'Fichier';
	$LG_Docs_Doc_Type = 'Type de document';
	$LG_Docs_Last_Doc = 'Dernier document pour le type';
	$LG_Docs_Default_Doc = 'Document par d�faut';
	$LG_Docs_Doc_Show = 'Visualiser le document';
	$LG_Docs_Error_No_Type = ' Vous n\'avez pas cr&eacute;&eacute; de type de document';
}

if ($nom_page == 'Liste_Documents.php') {
	define('LG_DOC_LIST_TYPE', 'Type');
	define('LG_DOC_LIST_LAST', 'Dernier document saisi');
	define('LG_DOC_LIST_ADD_1', 'Ajouter : un document');
	define('LG_DOC_LIST_ADD_MANY', 'plusieurs documents');
	define('LG_DOC_LIST_ADD_MANY_TIP', 'Ajouter plusieurs documents');
	define('LG_DOC_LIST_DISPLAY', 'Voir le document');
}

if (($nom_page == 'Edition_Lier_Doc.php') 
	or ($nom_page == 'Edition_Lier_Source.php')){
	$LG_Link_Doc_Role = 'R�le';
	$LG_Link_Doc_Beg = 'D�but du lien';
	$LG_Link_Doc_End = 'Fin du lien';
	$LG_Link_Doc_Main = 'personnage principal';
	$LG_Link_Doc_No_Matter = 'indiff�rent';
	$LG_Link_Doc_Fa_Not_Found = 'P�re non trouv�';
	$LG_Link_Doc_Mo_Not_Found = 'M�re non trouv�e';
	$LG_Link_Doc_Pers_Not_Found = 'Personne non trouv�e';
	$LG_Link_Doc_Rel_Pers = 'Personne concern�e';
	$LG_Link_Doc_Rel_Union = 'Union concern�e';
	$LG_Link_Doc_Rel_Fil =	'Filiation concern�e';
	$LG_Link_Doc_Rel_Event= 'Ev�nement concern�';
	$LG_Link_Doc_Rel_Town= 'Ville concern�e';
	$LG_Link_Doc_No = 'Pas de document � lier...';
	$LG_Link_Doc_This = 'cette liaison';
	$LG_Link_Source = 'Source';
	$LG_Link_Source_Link = 'Lier avec une source';
	$LG_Link_Source_Last = 'Derni�re source saisie';
	$LG_Link_Source_Not_Exist = 'Pas de source � lier';
	$LG_Link_Source_Title_Beg = 'Pas de source � lier';
	$LG_Link_Source_Title_End = 'Pas de source � lier';
}

if (($nom_page == 'Fiche_Actualite.php') or ($nom_page == 'Fiche_Evenement.php') or ($nom_page == 'Edition_Evenement.php')
		) {
	$LG_Event_Title = 'Titre';
	$LG_Event_Type = 'Type d\'�v�nement';
	$LG_Event_Where = 'A eu lieu �';
	$LG_Event_When = 'Dates';
	$LG_Event_Event_Beg = 'D�but';
	$LG_Event_Event_End = 'Fin';	
	$LG_Event_Event_Copy_Date = 'Copier la date de d�but';
	$LG_Event_Event_This = 'cet �v�nement';
	$LG_Event_New_This = 'cette actualit�';
}

if ($nom_page == 'Import_CSV.php') {
	$LG_ICSV_Pers_Ville_Naissance = 'N�(e) �';
	$LG_ICSV_Pers_Ville_Deces = 'D�c�d�(e) �';
	$LG_ICSV_Pers_Numero = 'Num�ro';
	$LG_ICSV_Pers_Surnom = 'Surnom';
}
if ($nom_page == 'Import_CSV_Liens.php') {
	$LG_ICSV_Link_Type = 'Type de lien';
	$LG_ICSV_Link_Desciption = 'Description';
	$LG_ICSV_Link_URL ='Adresse';
}

if (($nom_page == 'Import_CSV_Evenements.php') or ($nom_page == 'appelle_chronologie_personne.php')){
	$LG_ICSV_Event_Type = "Type d'�v�nement";
	$LG_ICSV_Event_Where = 'Lieu';
	$LG_ICSV_Event_Title = 'Titre';
	$LG_ICSV_Event_Beg = 'D�but';
	$LG_ICSV_Event_End = 'Fin';
	$LG_ICSV_Country = 'sur le pays de naissance ou d�c�s';
	$LG_ICSV_Part_Beg = 'D�but participation';
	$LG_ICSV_Part_End = 'D�but participation';
	$LG_ICSV_Event_Where_No = 'pas de lieu demand�';
	$LG_ICSV_Event_No_Birth = 'Date de naissance absente ou non utilisable';
	$LG_ICSV_Event_Ca_Dates = 'approximation sur les dates';
}

if (in_array($nom_page,array('Import_CSV_Villes.php',
							'Fiche_Ville.php', 'Edition_Ville.php'
							)) 
	) {
	define('LG_ICSV_TOWN_ADD_DOCUMENT', 'Ajout d\'un document');
	define('LG_ICSV_TOWN_COL_CALC','Colonne du tableur');
	define('LG_ICSV_TOWN_COL_GEN_FIElD','Zone G�n�amania');	
	define('LG_ICSV_TOWN_COL_MATCHING','Correspondances');;
	define('LG_ICSV_TOWN_COL_MISSING','Absente');;
	define('LG_ICSV_TOWN_COL_PRES_IGN','Pr�sente � ignorer');
	define('LG_ICSV_TOWN_COL_PRES_TAKE','Pr�sente � prendre en compte');
	define('LG_ICSV_TOWN_COL_SEL_FIELD','S�lectionnez une zone');
	define('LG_ICSV_TOWN_GEO_COORDS', 'Coordonn�es g�ographiques');
	define('LG_ICSV_TOWN_LINK_DOCUMENT', 'Lier un document existant � la ville');
	define('LG_ICSV_TOWN_LINK_SOURCE', 'Lier une source � la ville');
	define('LG_SUBDIV_LIST', 'Liste des villes');
	define('LG_ICSV_TOWN_NAME', 'Nom de la ville');
	define('LG_ICSV_TOWN_PERS', 'Liste des personnes ');
	define('LG_ICSV_TOWN_PERS_CREATE', 'Cr�ation de personnes ');
	define('LG_ICSV_TOWN_PERS_BORN', LG_ICSV_TOWN_PERS.'n�es � ');
	define('LG_ICSV_TOWN_PERS_BORN_CREATE', LG_ICSV_TOWN_PERS_CREATE.'n�es � ');
	define('LG_ICSV_TOWN_PERS_CONTRACT', LG_ICSV_TOWN_PERS.'dont le contrat de mariage est � ');
	define('LG_ICSV_TOWN_PERS_DEAD', LG_ICSV_TOWN_PERS.'d�c�d�es � ');
	define('LG_ICSV_TOWN_PERS_DEAD_CREATE', LG_ICSV_TOWN_PERS_CREATE.'d�c�d�es � ');
	define('LG_ICSV_TOWN_PERS_MARRIED', LG_ICSV_TOWN_PERS.'mari�es � ');
	define('LG_ICSV_TOWN_SEARCH', 'Recherche de la ville dans la base des villes G�n�amania');
	define('LG_ICSV_TOWN_SEARCH_CLOUD', 'Recherche de cette ville sur les sites h�berg�s');
	define('LG_ICSV_TOWN_SELECT_DEPARTEMENT', 'S�lectionnez un d�partement');
	define('LG_ICSV_TOWN_SUBDIV', 'Liste des lieux-dits');
	define('LG_ICSV_TOWN_TIP', 'Appelez la recherche de la ville dans la base des villes G�n�amania pour trouver le code postal, la latitude et longitude afin de situer la ville sur une carte');
	define('LG_ICSV_TOWN_THIS', 'cette ville');
	define('LG_ICSV_TOWN_TIP_EDIT', 'Les coordonn�es enregistr�es permettent de situer la ville sur les cartes libres');
	define('LG_ICSV_TOWN_USED_ERR', 'suppression impossible en raison d\'utilisations');
	define('LG_ICSV_TOWN_ZIP_CODE', 'Code postal');
	define('LG_ICSV_TOWN_ZIP_LATITUDE', 'Latitude');
	define('LG_ICSV_TOWN_ZIP_LONGITUDE', 'Longitude');
}

if ($nom_page == 'Liste_Villes.php') {
	define('LG_LAREAS_SUBDIVS', 'Liste des subdivisions');
	define('LG_LAREAS_TOWNS', 'Liste des villes');
	define('LG_LAREAS_COUNTIES', 'Liste des d�partements');
	define('LG_LAREAS_REGIONS', 'Liste des r�gions');
	define('LG_LAREAS_COUNTRIES', 'Liste des pays');
	define('LG_LAREAS_SUBDIV_LAST', 'Derni�re subdivision saisie');
	define('LG_LAREAS_SUBDIV_ADD', 'Ajouter une subdivision');
	define('LG_LAREAS_TOWN_LAST', 'Derni�re ville saisie');
	define('LG_LAREAS_TOWN_ADD', 'Ajouter une ville');
	define('LG_LAREAS_COUNTY_LAST', 'Dernier d�partement saisi');
	define('LG_LAREAS_COUNTY_ADD', 'Ajouter un d�partement');
	define('LG_LAREAS_REGION_LAST', 'Derni�re r�gion saisie');
	define('LG_LAREAS_REGION_ADD', 'Ajouter une r�gion');
	define('LG_LAREAS_TOP', 'Haut de page');
}

if (in_array($nom_page,array('Edition_Subdivision.php', 'Fiche_Subdivision.php'
							)) 
	) {
	define('LG_SUBDIV_ADD_DOCUMENT', 'Ajout d\'un document');
	define('LG_SUBDIV_GEO_COORDS', 'Coordonn�es g�ographiques');
	define('LG_SUBDIV_LINK_DOCUMENT', 'Lier un document existant � la subdivision');
	define('LG_SUBDIV_LINK_SOURCE', 'Lier une source � la subdivision');
	define('LG_SUBDIV_LIST', 'Liste des subdivisions');
	define('LG_SUBDIV_NAME', 'Nom de la subdivision');
	define('LG_SUBDIV_PERS', 'Liste des personnes ');
	define('LG_SUBDIV_SEARCH_CLOUD', 'Recherche de cette ville sur les sites h�berg�s');
	define('LG_SUBDIV_SELECT_TOWN', 'S�lectionnez une ville');
	define('LG_SUBDIV_THIS', 'cette subdivision');
	define('LG_SUBDIV_TOWN', 'Ville');
	define('LG_SUBDIV_USED_ERR', 'suppression impossible en raison d\'utilisations');
	define('LG_SUBDIV_ZIP_LATITUDE', 'Latitude');
	define('LG_SUBDIV_ZIP_LONGITUDE', 'Longitude');
}

if (($nom_page == 'Edition_Role.php') or ($nom_page == 'Fiche_Role.php')){
	define('LG_ROLE_CODE','Code');
	define('LG_ROLE_ERROR_EXISTS', 'Attention, code d�j� utilis� (codes pr�sents');
	define('LG_ROLE_LABEL','Libell�');
	define('LG_ROLE_OPPOS_LABEL','Libell� inverse');
	define('LG_ROLE_SYM','Sym�trie');
	define('LG_ROLE_THIS', 'ce r�le');
}

if (($nom_page == 'Edition_Type_Evenement.php') or ($nom_page == 'Fiche_Type_Evenement.php')){
	define('LG_EVENT_TYPE_CODE', 'Code'); 	 
	define('LG_EVENT_TYPE_LABEL', 'Libell�'); 	
	define('LG_EVENT_TYPE_UNIQ' ,'Unicit� des �v�nements du type');
	define('LG_EVENT_TYPE_IS_MOD', 'Type modifiable');
	define('LG_EVENT_TYPE_GEDCOM', 'Type Gedcom');
	define('LG_EVENT_TYPE_THIS', 'ce type d\'�v�nement');
}

if (($nom_page == 'Edition_Type_Document.php') or ($nom_page == 'Fiche_Type_Document.php')){
	define('LG_DOC_TYPE_LABEL', 'Libell�'); 	
	define('LG_DOC_TYPE_THIS', 'ce type de document');
	define('LG_DOC_DOCS', 'Documents du type');
}

// Factoriser les variables sur les personnes

if (in_array($nom_page,array('Liste_Pers_Gen.php', 'Import_CSV.php'
							,'Ajout_Enfants.php', 'Noyau_Pers.php'
							,'Completude_Nom.php', 'Edition_Personne.php'
							,'Ajout_Rapide.php', 'index.php'
							,'Edition_Personnes_Ville.php'
							,'Fiche_Homonymes.php', 'Ajout_Contribution.php'
							, 'Recherche_Personne.php'
							))
	) {
	define('LG_PERS_ADD_NAME', 'Ajout d\'un nom');
	define('LG_PERS_ALT_NAMES', 'Noms secondaires');
	define('LG_PERS_ALT_NAME_ADD', 'Ajouter un nom secondaire � la personne');
	define('LG_PERS_BAPM', 'Baptis�(e) le');
	define('LG_PERS_BAPM_EVENT', 'Bapt�me');
	define('LG_PERS_BORN', 'N�(e) le');
	define('LG_PERS_BORN_AT', 'N�(e) �');
	define('LG_PERS_BORN_IN', 'Cr�ation de personnes n�es �');
	define('LG_PERS_CALC_SOSA', 'Calcul du num�ro sosa saisi (e.g. =P2)');
	define('LG_PERS_CATEGORY','Cat�gorie');
	define('LG_PERS_CHILDREN_ADD', "Ajout rapide d'enfants pour le couple");
	define('LG_PERS_CHILDREN_PRESENT', 'Enfants d�j� saisis');
	define('LG_PERS_COMPLETE_GREEN', 'information pr�sente');
	define('LG_PERS_COMPLETE_ORANGE', 'information partielle');
	define('LG_PERS_COMPLETE_RED', 'information absente');
	define('LG_PERS_CONTROL', 'Contr�le de la personne');
	define('LG_PERS_COPY_NAME', 'Reprend le nom saisi pr�c�demment');
	define('LG_PERS_CREATE_PARENTS', 'Cr�er la filiation');
	define('LG_PERS_DATA', 'Etat-civil');
	define('LG_PERS_DATE_PATTERN', 'Mod�le de date de');
	define('LG_PERS_DEAD', 'D�c�d�(e) le');
	define('LG_PERS_DEAD_AT', 'D�c�d�(e) �');
	define('LG_PERS_DEAD_IN', 'Cr�ation de personnes d�c�d�es �');
	define('LG_PERS_DECUJUS', 'Positionnement de cujus Sosa (num�ro 1)');
	define('LG_PERS_DEFAULT_NAME', 'Nom par d�faut');
	define('LG_PERS_DOCS', 'Documents');
	define('LG_PERS_DOC_LINK', "Ajout d'un document");
	define('LG_PERS_DOC_LINK_EXISTS', 'Lier un document existant � la personne');
	define('LG_PERS_DOC_LINK_NEW', 'Lier un document � la personne en cr�ant la fiche document');
	define('LG_PERS_EVENTS', 'Ev�nements');
	define('LG_PERS_FIRST_NAME', 'Pr�noms');
	define('LG_PERS_INTERNET', 'Internet');
	define('LG_PERS_IS_COUPLE', 'Union');;
	define('LG_PERS_LINKS', 'Liens');
	define('LG_PERS_LINK_SOURCE', 'Lier une source � la personne');
	define('LG_PERS_NAME', 'Nom');
	define('LG_PERS_NAME_TO_UPCASE', 'Met le nom en majuscules');
	define('LG_PERS_NAME_UPPER', 'Mettre le nom en majuscules');
	define('LG_PERS_NO_CATEGORY','Aucune cat�gorie');
	define('LG_PERS_NUMBER', 'Num�ro');
	define('LG_PERS_PARENTS', 'Filiation');
	define('LG_PERS_PARENTS_UNIONS', 'Filiation-unions');
	define('LG_PERS_PARTNERS', 'conjoint(s)');
	define('LG_PERS_PERS', 'Personne');
	define('LG_PERS_PERSONS', 'Personnes');
	define('LG_PERS_QUICK_ADD', 'Ajout rapide pour');
	define('LG_PERS_RANK', 'rang');
	define('LG_PERS_REF', 'R�f�rence');
	define('LG_PERS_SAME_BIRTH_TOWN', 'Reprend la ville de naissance saisie pr�c�demment');
	define('LG_PERS_SAME_DEATH_TOWN', 'Reprend la ville de d�c�s saisie pr�c�demment');
	define('LG_PERS_SAME_NAME', 'Reprend le nom saisi pr�c�demment');
	define('LG_PERS_SEX_UNDEF', 'Sexe ind�termin�');
	define('LG_PERS_THIS', 'cette personne (les liens vers des documents, des images, des �v�nements, des participations � des �v�nements et des personnes seront �galement supprim�s)');
	define('LG_PERS_TIP_QUICK1',"Vous pouvez aussi utiliser l'ajout rapide");
	define('LG_PERS_TIP_QUICK2','� droite pour cr�er les parents, les conjoints, les fr�res et soeurs (les liens n�cessaires sont automatiquement cr��s).');
	define('LG_PERS_UNION', 'Unis');
	define('LG_PERS_UNION_UNISEX' ,'Union unisexe');
	define('LG_PERS_UNION_MULTISEX' ,'Union classique');
	define('LG_PERS_UNIONS', 'Unions');
	define('LG_PERS_UNION_AT', 'Union �');
	define('LG_PERS_UNION_DATE', 'Union le');
	define('LG_PERS_UPDATE_PARENTS', 'Modifier la filiation');
	define('LG_PERS_UPDATE_UNION', "Modification de l'union");
	define('LG_PERS_VISIBILITY', 'Visibilit�');
	define('LG_PERS_AUTO_CALC_SOSA', 'Calcul automatique du num�ro sosa');
}

if ($nom_page == 'Ajout_Contribution.php') {
	define('LG_CONTRIBS_COPY_REF_NAME', 'Copier le nom de la personne initiale');
	define('LG_CONTRIBS_CHILDREN','Enfants');
	define('LG_CONTRIBS_CHILD_1','Enfant 1');
	define('LG_CONTRIBS_CHILD_2','Enfant 2');
	define('LG_CONTRIBS_UNLOCK','D�verrouillage');
	define('LG_CONTRIBS_UNLOCK_TIP1',"Entrez le r�sultat de l'op�ration de fin de ligne ");
	define('LG_CONTRIBS_UNLOCK_TIP2',"puis changez de zone ou d'onglet");
	define('LG_CONTRIBS_TRIBUTE','Script de captcha goupill� par Patrik');
	define('LG_CONTRIBS_EMAIL','Votre email');
	define('LG_CONTRIBS_MESSAGE','Message');
	define('LG_CONTRIBS_IP_RECORD',"Votre adresse IP fait l'objet d'un enregistrement et pourra �tre utilis�e au besoin.");
	define('LG_CONTRIBS_CTRL_KO','Echec � la v�rification du contr�le');
	define('LG_CONTRIBS_SEND_KO',"Echec sur l'envoi de la contribution");
	define('LG_CONTRIBS_FILE_KO',"Le fichier de contribution n'a pu �tre cr��");
	define('LG_CONTRIBS_EMPTY','Contribution vide');
}

if ($nom_page == 'Recherche_Personne.php') {
	define('LG_PERS_REQ', 'Requ�te');
	define('LG_PERS_REQ_ALIVE', 'Vivant');
	define('LG_PERS_REQ_BORN_IN', 'naissance en ');
	define('LG_PERS_REQ_BORN_TOWN', 'Ville de naissance');
	define('LG_PERS_REQ_DEATH_IN', 'd�c�s en ');
	define('LG_PERS_REQ_DEATH_TOWN', 'Ville de d�c�s');
	define('LG_PERS_REQ_ERROR', 'Requ�te en erreur');
	define('LG_PERS_REQ_FIELDS', 'Crit�res demand�s');
	define('LG_PERS_REQ_FILE_STATUS','Statut de la fiche');
	define('LG_PERS_REQ_FIND_NAME','Recherche du nom sur les sites gratuits');
	define('LG_PERS_REQ_MORE_LESS_1', '(+ ou -');
	define('LG_PERS_REQ_MORE_LESS_2', 'an');
	define('LG_PERS_REQ_NEW_TAB', 'Nouvel onglet pour les fiches');
	define('LG_PERS_REQ_NOT_FILLED', 'Non saisie');
	define('LG_PERS_REQ_OFF_DOWN', 'Augmenter la tol�rance en ann�es');
	define('LG_PERS_REQ_OFF_UP', 'Diminuer la tol�rance en ann�es');
	define('LG_PERS_REQ_OFF_YEARS', 'ans pour les naissances ou les d�c�s');
	define('LG_PERS_REQ_PERS_FOUND_1', 'personne');
	define('LG_PERS_REQ_PERS_FOUND_2', 'trouv�e');
	define('LG_PERS_REQ_REQUEST_CHOOSE' ,"Choisissez une requ�te OU des crit�res dans l'autre pav�");
	define('LG_PERS_REQ_REQUEST_SAVE' ,'Enregister la requ�te');
	define('LG_PERS_REQ_REQUEST_TITLE' ,'sous le titre');
	define('LG_PERS_REQ_REQUEST_USE' ,'Utiliser une requ�te m�moris�e');
	define('LG_PERS_REQ_SAVE' ,'Enregistrement de la requ�te sous le titre');
	define('LG_PERS_REQ_SORT', 'Tri');
	define('LG_PERS_REQ_SORT_BORN','date de naissance');
	define('LG_PERS_REQ_SORT_DEATH','date de d�c�s');
	define('LG_PERS_REQ_SORT_NS', 'nom / pr�nom');
	define('LG_PERS_REQ_SOUND_EXACT', 'prononciation exacte');
	define('LG_PERS_REQ_SOUND_NEAR', 'prononciation approchante');
	define('LG_PERS_REQ_SPELL_EXACT', 'orthographe exacte');
	define('LG_PERS_REQ_YEAR', "Pour l'ann�e");
}


if ($nom_page == 'sel_zone_geo.php') {
	define('LG_CHOOSE_AREA_COUNTRY','Choix d\'un pays');
	define('LG_CHOOSE_AREA_REGION','Choix d\'une r�gion');
	define('LG_CHOOSE_AREA_COUNTY','Choix d\'un d�partement');
	define('LG_CHOOSE_AREA_TOWN','Choix d\'une ville');
	define('LG_CHOOSE_AREA_SUBDIVISION','Choix d\'une subdivision');
}

if ($nom_page == 'Liste_Referentiel.php') {
	define('LG_REF_LIST_ROLES', 'Liste des r�les');
	define('LG_REF_LIST_EV_TYPES', 'Liste des types d\'�v�nements');
	define('LG_REF_LIST_DOC_TYPES', 'Liste des types de documents');
	define('LG_REF_LIST_CATEG', 'Liste des cat�gories');
	define('LG_REF_LIST_REQ', 'Liste des requ�tes sur les personnes');
	define('LG_REF_LIST_REPO_SOURCES', 'Liste des d�p�ts de sources');

}
	
if ($nom_page == 'Edition_Rangs.php') {
	$LG_Rank_First_Name = 'Pr�noms';
	$LG_Rank_Born = 'N�(e)';
	$LG_Rank_Dead = 'D�c�d�(e)';
	$LG_Rank_Calc_Duration = 'Ecart calcul�';
	$LG_Rank_Calculated = 'Rang calcul�';
	$LG_Rank_Filled = 'Rang saisi';
	$LG_Rank_Error = 'Probl�me sur le rang';
	$LG_Rank_Accept = 'Accepter les rangs calcul�s';
	$LG_Rank_First_Children = 'Premier enfant n� au bout de ';
	$LG_Rank_Last_Children = 'Dernier enfant n� au bout de ';
	$LG_Rank_End_Union = ' d\'union';
	$LG_Rank_Short_Duration = 'Enfant n� moins de 9 mois apr�s le pr�c�dent';
	$LG_Rank_Parents_Union = 'Union des parents';
}

if (($nom_page == 'Fiche_Source.php') or ($nom_page == 'Edition_Source.php') or ($nom_page == 'Liste_Sources.php')){
	define('LG_SRC_TITLE' ,'Titre');
	define('LG_SRC_AUTHOR', 'Auteur');
	define('LG_SRC_CLASS', 'Classement');
	define('LG_SRC_REPO', 'D�p�t');
	define('LG_SRC_REFER', 'Cote');
	define('LG_SRC_WEB', 'Adresse Internet');
	define('LG_SRC_TRUST', 'Fiabilit�');
	define('LG_SRC_TRUST_H', 'Haute');
	define('LG_SRC_TRUST_M', 'Moyenne');
	define('LG_SRC_TRUST_L', 'Faible');
	define('LG_SRC_THIS', 'cette source');
	define('LG_SRC_LAST', 'Derni�re source saisie');
	define('LG_SRC_ADD', 'Ajouter une source');
}

if (($nom_page == 'Fiche_Ville.php') or ($nom_page == 'Edition_Ville.php')){
	$LG_Town_Title = 'Fiche d\'une ville';
}	

if ($nom_page == 'Stat_Base_Generations.php') {
	define('LG_STAT_GEN_DEC', 'Diminuer la g�n�ration');
	define('LG_STAT_GEN_FIRST_GEN', 'G�n�ration de d�but');
	define('LG_STAT_GEN_GEN', 'G�n�ration');
	define('LG_STAT_GEN_INC', 'Augmenter la g�n�ration');
	define('LG_STAT_GEN_LAST_GEN', 'G�n�ration de fin');
	define('LG_STAT_GEN_MISSING', 'manquante');
	define('LG_STAT_GEN_ON', 'sur');
	define('LG_STAT_GEN_PERSONS', 'personne');
	define('LG_STAT_GEN_POSSIBLE', 'possible');
	define('LG_STAT_GEN_RESULT', 'R�sultat');
	define('LG_STAT_GEN_RESULT_RELATED', 'Par rapport � la g�n�ration pr�c�dente');
}

if ($nom_page == 'Stat_Base_Depart.php') {
	define('LG_STAT_COUNTY_WITH', 'Avec le d�partement renseign�');
	define('LG_STAT_COUNTY_MAP', 'Carte de France');
}

if ($nom_page == 'Stat_Base_Villes.php') {
	define('LG_STAT_TOWN_COUNTY', 'Statistiques par ville pour le d�partement');
	define('LG_STAT_TOWN_FILLED', 'Avec la ville renseign�e');
}
	
if (($nom_page == 'Stat_Base.php') or ($nom_page == 'Histo_Prenoms.php')){
	define('LG_STAT_ALL_BY_AGE', 'Statistiques par �ge');
	define('LG_STAT_ALL_BY_PLACE', 'Statistiques g�ographiques');
	define('LG_STAT_ALL_CHILDREN', 'Filiations');
	define('LG_STAT_ALL_EVENTS', 'Ev�nements');
	define('LG_STAT_ALL_FLAG_GREEN_ALT' ,'drapeau vert');
	define('LG_STAT_ALL_FLAG_GREEN_TITLE', 'Respect de la charte des sites gratuits');
	define('LG_STAT_ALL_FLAG_ORANGE_ALT' ,'drapeau orange');
	define('LG_STAT_ALL_FLAG_ORANGE_TITLE', 'Risque de blocage pour non respect de la charte des sites gratuits');
	define('LG_STAT_ALL_NAMES', 'Patronymes');
	define('LG_STAT_ALL_OCC' ,'Fr�quences');
	define('LG_STAT_ALL_PERSONS', 'Personnes');
	define('LG_STAT_ALL_SOSA', 'Sosa directs');
	define('LG_STAT_ALL_TOWNS', 'Villes');
	define('LG_STAT_ALL_UNIONS', 'Unions');
	define('LG_STAT_ALL_VISIBLE', 'visible');
	define('LG_STAT_ALL_VISIBLE_WITH', 'dont');
	define('LG_STAT_SURNAMES', 'Pr�noms au cours du temps');
	define('LG_STAT_SURNAMES_MEN', 'Hommes');
	define('LG_STAT_SURNAMES_WOMEN', 'Femmes');
	define('LG_STAT_SURNAMES_SORT_FREQ', 'Tri par fr�quence');
	define('LG_STAT_SURNAMES_ASC', 'Ascendante');
	define('LG_STAT_SURNAMES_DESC', 'Descendante');
	define('LG_STAT_SURNAMES_FIRST', 'Premier pr�nom');
	define('LG_STAT_SURNAMES_ALL', 'Tous les pr�noms');
}

if ($nom_page == 'Liste_Nom_Evenement.php') {
	define('LG_NAMES_FOR_EVENT_PERS_COUNT' ,'Nombre de personnes');
	define('LG_NAMES_FOR_EVENT_EVENT', 'Nombre de personnes');
}

if ($nom_page == 'Liste_Noms_Non_Ut.php') {
	$LG_Names_NU_Del = 'suppression';
	$LG_Names_NU_Req = 'demand�e';
}

if (($nom_page == 'Naissances_Mariages_Deces_Mois.php') or ($nom_page == 'Anniversaires.php')) {
	$LG_birth_many = 'Naissances';
	$LG_death_many = 'D�c�s';
	$LG_wedding_many = 'Mariages';
	$LG_conception = 'Conception th�orique';
	$LG_conception_many = 'Conceptions';
	$LG_Ignore = 'Ignorer les personnes d�c�d�es pour les naissances ou mariages (pivot';
	$LG_Choose_Month = 'Choisissez un mois';
	$LG_Day_Birth = 'Anniversaire de naissance';
	$LG_Day_Death = 'Anniversaire de d�c�s';
}

if ($nom_page == 'Enfants_Femme_Histo.php') {
	define('LG_CH_PER_MOTHER_BORN', 'Ann�e de naissance de la m�re');
	define('LG_CH_PER_MOTHER_AVG', 'Nombre moyen d\'enfants');
	define('LG_CH_PER_MOTHER_MAX_WOMAN', 'Femme ayant eu le plus grand nombre d\'enfants');
	define('LG_CH_PER_MOTHER_SHE_HAD', 'elle a eu');
}

if (in_array($nom_page,array('Pyramide_Ages_Mar_Histo.php', 'Histo_Ages_Mariage.php'
							,'Pyramide_Ages_Histo.php', 'Histo_Ages_Deces.php'
							,'Pyramide_Ages.php'
							))
	) {
	define('LG_CH_HISTO_AGE', 'Age');
	define('LG_CH_HISTO_AGE_ALL', 'Ensemble');
	define('LG_CH_HISTO_AGE_MEN', 'Hommes');
	define('LG_CH_HISTO_AGE_OLDEST_M' ,'Doyen au d�c�s');
	define('LG_CH_HISTO_AGE_OLDEST_W', 'Doyenne au d�c�s');
	define('LG_CH_HISTO_AGE_PERS', 'personne(s)');
	define('LG_CH_HISTO_AGE_WED', 'Ann�e de naissance');
	define('LG_CH_HISTO_AGE_WOMEN', 'Femmes');
	define('LG_CH_HISTO_AGE_YOUNGEST_FATH', 'Cadet au premier enfant');
	define('LG_CH_HISTO_AGE_YOUNGEST_M', 'Cadet au mariage');
	define('LG_CH_HISTO_AGE_YOUNGEST_MOTH', 'Cadette au premier enfant');
	define('LG_CH_HISTO_AGE_YOUNGEST_W', 'Cadette au mariage');
	define('LG_CH_HISTO_AVERAGE_AGE', 'Age moyen');
	define('LG_CH_HISTO_DEATH_TITLE', 'Age de d�c�s pour la p�riode ');
	define('LG_CH_HISTO_REPARTITION', 'R�partition des �ges');
}

if ($nom_page == 'Liste_Connexions.php') {
	define('LG_CH_CONN_LIST_USER', 'Utilisateur');
	define('LG_CH_CONN_LIST_DATE', 'Date de connexion');
	define('LG_CH_CONN_LIST_IP', 'Adresse IP');
}

if ($nom_page == 'Recherche_Cousinage.php') {
	define('LG_CH_RELATED_2PERS', 'Vous devez saisir 2 personnes ...');
	define('LG_CH_RELATED_AND', 'Et');
	define('LG_CH_RELATED_BETWEEN', 'Entre');
	define('LG_CH_RELATED_CANON_LAW', 'Parent� en droit canon');
	define('LG_CH_RELATED_CIVIL_LAW', 'Parent� en droit civil');
	define('LG_CH_RELATED_DEGREE', 'degr�');
	define('LG_CH_RELATED_GENERATIONS', 'g�n�rations.');
	define('LG_CH_RELATED_NO_COMMON', "Pas d'anc�tre commun trouv� sur ");
	define('LG_CH_RELATED_ON', 'au');
	define('LG_CH_RELATED_PERS_DIFF', 'Vous devez saisir 2 personnes diff�rentes...');
	define('LG_CH_RELATED_SAME', 'idem anc�tre...');
	define('LG_CH_RELATED_SAVE', 'Sauver la demande pour G�n�Graphe');
	define('LG_CH_RELATED_THEN', 'puis');
	define('LG_CH_RELATED_TIP_BEG', 'recherche limit�e ');
	define('LG_CH_RELATED_TIP_END', 'g�n�rations au maximum');
}

if (in_array($nom_page,array('Edition_Utilisateur.php'
							,'Fiche_Utilisateur.php'
							,'Liste_Utilisateurs.php'
							))
	) {
	define('LG_UTIL_CODE', 'Code');
	define('LG_UTIL_CONNEXIONS', 'Liste des connexions de la personne');
	define('LG_UTIL_EMAIL', 'Adresse mail');
	define('LG_UTIL_ERROR_EXISTS', 'Il existe d�j� un utilisateur avec le m�me code utilisateur');
	define('LG_UTIL_ERROR_JS', 'Il semble que Javascript soit d�sactiv�, veuillez l\'activer');
	define('LG_UTIL_LAST_CNX', 'Derni�re connexion');
	define('LG_UTIL_MAIL_1', 'Un utilisateur a �t� cr�� pour vous sous le nom ');
	define('LG_UTIL_MAIL_2', ', votre code est ');
	define('LG_UTIL_MAIL_3', ' et le mot de passe est ');
	define('LG_UTIL_MAIL_OBJ', 'Cr�ation de votre utilisateur Geneamania');
	define('LG_UTIL_NAME', 'Nom');
	define('LG_UTIL_NO_CNX', 'aucune connexion');
	define('LG_UTIL_PROFILE', 'Niveau d\'autorisation');
	define('LG_UTIL_PSW', 'Mot de passe');
	define('LG_UTIL_PSW_CONFIRM', 'Confirmez le mot de passe');
	define('LG_UTIL_PSW_COPY', 'Copier le mot de passe g�n�r�');
	define('LG_UTIL_PSW_GENER', 'G�n�rer un mot de passe');
	define('LG_UTIL_SEND_MAIL', 'Envoyer un mail suite � la cr�ation');
	define('LG_UTIL_THIS', 'cet utilisateur');
	define('LG_UTIL_WARN', 'vous �tes sur la fiche de l\'utilisateur sous lequel vous �tes connect�(e)');
	define('LG_USERS_LIST_ADD', 'Ajouter un utilisateur');
}

if (($nom_page == 'Edition_Utilisateur.php') or ($nom_page == 'index.php')) {
	define('LG_USER_MANDATORY', 'Pensez � remplir les champs obligatoires...');
	define('LG_USER_DIFF_PSW', 'Les deux mots de passe ne sont pas identiques');
	define('LG_USER_SHORT_PSW', 'Le mot de passe doit faire au moins 6 caract�res');
	define('LG_USER_PSW_REQUESTED', 'Il faut saisir un mot de passe');
}

if ($nom_page == 'Import_Gedcom.php') {
	$LG_Ch_UTF8 = 'Fichier au format UTF-8';
	$LG_Ch_Encoding = 'Encodage des caract�res';
	define('LG_IMP_GED_DEFAULT_STATUS', 'Valeur par d�faut du statut des fiches cr��es');
	define('LG_IMP_GED_DEFAULT_VISIBILITY', 'Visibilit� internet autoris�e par d�faut'); 	
	define('LG_IMP_GED_DEFAULT_VISIBILITY_COMMENTS', 'Visibilit� internet des notes autoris�e par d�faut');	
	define('LG_IMP_GED_ERR_TYPE', "Le fichier s�lectionn� n'a pas la bonne extension");
	define('LG_IMP_GED_FILE', 'Fichier GEDCOM � t�l�charger'); 	
	define('LG_IMP_GED_IMAGE_DEFAULT_VISIBILITY', 'Visibilit� internet des images autoris�e par d�faut');	
	define('LG_IMP_GED_IMPORT_DATES', 'Reprise des dates de modification du fichier');	
	define('LG_IMP_GED_INSERT', 'Charger les donn�es dans la base');	
	define('LG_IMP_GED_PLACES', 'Format des lieux');
	define('LG_IMP_GED_REMIND_EVT', 'Vous pouvez aussi fusionner les �v�nements semblables ; pour ce faire, appelez la fonction de ');
	define('LG_IMP_GED_REMIND_INTERNET', 'Pensez enfin � mettre � jour la visibilit� Internet des fiches des contemporains  ; pour ce faire, appelez la fonction ');
	define('LG_IMP_GED_REMIND_SOSA_1', 'Pensez � attribuer le num�ro 1 � la personne de votre choix ; pour ce faire, passez par la ');
	define('LG_IMP_GED_REMIND_SOSA_2', 'Liste par noms');
	define('LG_IMP_GED_REMIND_SOSA_3', 'Vous pourrez ensuite mettre � jour en masse les num�ros Sosa par ');
	define('LG_IMP_GED_RESET', 'Vidage pr�alable de la base actuelle');	
	define('LG_IMP_GED_DEL_1_M', 'supprim�');	
	define('LG_IMP_GED_DEL_1_F', 'supprim�e');	
	define('LG_IMP_GED_DEL_MANY_M', 'supprim�s');	
	define('LG_IMP_GED_DEL_MANY_F', 'supprim�es');	
}

if ($nom_page == 'Liste_Docs_Branche.php') {
	define('LG_DOC_BRANCH_ORIGINE', 'Personne origine de la branche');
	define('LG_DOC_BRANCH_DOC_TYPE', 'Type de document image');
	define('LG_DOC_BRANCH_SEL_TYPE', 'Type...');
	define('LG_DOC_BRANCH_SEL_NAME', 'S�lectionnez un nom...');
}

if (($nom_page == 'Edition_Image.php') or ($nom_page == 'Liste_Images.php')) {
	$LG_Ch_Image_Script_Title = 'Liaison d\'une image';
	$LG_Ch_Image_Title = 'Titre';
	$LG_Ch_Image = 'Image';
	$LG_Ch_Image_Name = 'Nom';
	$LG_Ch_Image_No_Need = "inutile de re-s�lectionner un fichier si l'image est affich�e � droite";
	$LG_Ch_Image_Default = 'Image par d�faut';
	$LG_Ch_Image_Visibility = "Visibilit� de l'image sur internet";
	$LG_Ch_Image_This = 'cette image';
}

if ($nom_page == 'Fiche_Homonymes.php') {
	define('LG_CH_FUSIONNER', 'Fusionner');
	define('LG_CH_FUSION_TIP1', 'La fusion, si elle est demand�e, est effectu�e sur la personne 1 (� gauche).');
	define('LG_CH_FUSION_TIP2', 'L\'utilisateur s�lectionne � gauche ou � droite les donn�es � copier / ajouter.');
	define('LG_CH_FUSION_TIP3', 'Les conjoints et enfants sont ajout�s � ceux existants.');
	define('LG_CH_FUSION_TIP4', 'Les donn�es non pr�sentes � l\'�cran ne sont pas copi�es / ajout�es.');
	define('LG_CH_FUSION_PERS1', 'Personne 1');
	define('LG_CH_FUSION_PERS2', 'Personne 2');
	define('LG_CH_MARIED', 'mari�s');
	define('LG_CH_BORN', 'n�');
	define('LG_CH_DEAD', 'd�c�d�');
	define('LG_CH_COUPLE', 'Fiche couple');
}

if ($nom_page == 'Recherche_Personne_Archive.php') {
	$LG_Ch_Search_Town = 'Ville de recherche';
	$LG_Ch_Search_Beg = 'Ann�e de d�but';
	$LG_Ch_Search_End = 'Ann�e de fin';
	$LG_Ch_Search_Copy_Date = "Reprise de l'ann�e de d�but";
	$LG_Ch_Search_Consider = 'Donn�es � prendre en compte';
	$LG_Ch_Search_Birth = 'naissances';
	$LG_Ch_Search_Wed = 'mariages';
	$LG_Ch_Search_Death = 'd�c�s';
	$LG_Ch_Search_Consider_Valid = 'Fiches � prendre en compte';
	$LG_Ch_Search_Valid = 'valid�es';
	$LG_Ch_Search_Non_Valid = 'non valid�es';
	$LG_Ch_Search_Internet = 'source internet';
	$LG_Ch_Search_Sort = 'Tri';
	$LG_Ch_Search_Sort_Date = 'par date';
	$LG_Ch_Search_Sort_Pers = 'par personne';
	$LG_Ch_Search_Suffix = 'ajouter le nom de la ville en suffixe';
	$LG_Ch_Search_Pers_1 = 'personne';
	$LG_Ch_Search_Pers_2 = 'trouv�e';
}

if ($nom_page == 'Recherche_Commentaire.php') {
	define('LG_SCH_COMMENT_RESTRICTION', 'Restriction aux fiches de type');
	define('LG_SCH_COMMENT', 'Recherche des commentaires contenant');
	define('LG_SCH_COMMENT_CONTAINING', 'Commentaire contenant');
	define('LG_SCH_COMMENT_FOUND_1', 'commentaire(s)');
	define('LG_SCH_COMMENT_FOUND_2', 'trouv�(s)');
	define('LG_SCH_COMMENT_ON', 'Sur ');
	define('LG_SCH_COMMENT_OF', ' de ');
	define('LG_SCH_COMMENT_AND', ' et ');
}

if (($nom_page == 'Edition_Categorie.php') or ($nom_page == 'Fiche_Categorie.php')) {
	$LG_Ch_Categ_Title = 'Titre';
	$LG_Ch_Categ_Order = 'Ordre de tri';
	$LG_Ch_Categ_Inc_Order = 'Augmenter l\'ordre';
	$LG_Ch_Categ_Dec_Order = 'Diminuer l\'ordre';
	$LG_Ch_Categ_Image = 'Image';
}

if ($nom_page == 'Edition_Depart.php') {
	$LG_County_Data = 'G�n�ral';
	$LG_County_Name = 'Nom';
	$LG_County_Id = 'Code';
	$LG_County_Region = 'R�gion';
}

if (($nom_page == 'Edition_Depot.php') or ($nom_page == 'Fiche_Depot.php')) {
	define('LG_CH_REPOSITORY_NAME', 'Nom');
	define('LG_CH_REPOSITORY_LIST', 'Liste des sources du d�p�t');
	define('LG_CH_REPOSITORY_THIS', 'ce d�p�t');
}

if (($nom_page == 'Edition_Requete.php') or ($nom_page == 'Fiche_Requete.php')) {
	define('LG_QUERY_CODE', 'Code');
	define('LG_QUERY_THIS', 'cette requ�te');
	define('LG_QUERY_TITLE', 'Titre');
}

if ($nom_page == 'Admin_Tables.php') {
	$LG_Ch_Adm_T_lib_ok = 'Proc�der � l\'action';
	$LG_Ch_Adm_T_Err_List = 'Erreur DB, impossible de lister les tables';
	$LG_Ch_Adm_T_Action = 'Action';
	$LG_Ch_Adm_T_Repair = 'R�paration';
	$LG_Ch_Adm_T_Optim = 'Optimisation';
	$LG_Ch_Adm_T_Tables = 'Tables';
	$LG_Ch_Adm_T_All_None = 'Toutes / aucune';
}

if ($nom_page == 'appelle_image_france_dep.php') {
	$LG_Img_FR_Birth = 'R�partition des naissances';
	$LG_Img_FR_Wed = 'R�partition des mariages';
	$LG_Img_FR_Death = 'R�partition des d�c�s';	
}

if (($nom_page == 'Arbre_Agnatique_Cognatique.php') 
	or ($nom_page == 'Arbre_Asc_Pers.php') 
	or ($nom_page == 'Arbre_Noyau.php') 
	or ($nom_page == 'Desc_Directe_Pers.php') 
	or ($nom_page == 'Arbre_Desc_Pers.php')){
		$LG_Tree_Men_Asc = 'Arbre agnatique';
		$LG_Tree_Women_Asc  = 'Arbre cognatique';
		$LG_Tree_Lim_1 = 'Affichage limit� � ';
		$LG_Tree_Lim_2 = ' g�n�rations, veuillez utiliser la ';
		$LG_Tree_Lim_3 = 'vue personnalis�e';
		$LG_Tree_Lim_4 = ' pour remonter au del�';
		$LG_Tree_Icon_Click = 'Cliquez sur les ic�nes ';
		$LG_Tree_Icon_Hover = 'D�placez votre souris sur les ic�nes ';
		$LG_Tree_Show_Image = ' dans les cases <br />pour faire apparaitre les images puis les faire disparaitre.';
		$LG_Tree_Pdf_7Gen = 'Arbre au format PDF 7 g�n�rations';
		$LG_Tree_Show_Hide_Child = 'Afficher / masquer les enfants du couple';
		$LG_Tree_Show_Partners = 'Afficher les conjoints';
		$LG_Tree_Show_Tree = 'Afficher l\'arbre';
		$LG_Tree_Show_Desc = 'Afficher la descendance';
}

if ($nom_page == 'Noyau_Pers.php') {
		define ('LG_DECUJUS_ERR_NO_EMPTY' , 'Fonctionnalit� non disponible ; des personnes et / ou des villes existent.');
		define ('LG_DECUJUS_DECUJUS' , 'Personnage central - decujus');
}

if ($nom_page == 'Calcul_Distance.php') {
	$LG_Ch_Dist_Between = 'Entre';
	$LG_Ch_Dist_And = 'Et';	
	$LG_Ch_Dist_Tip = 'On ne peut calculer une distance qu\'entre deux villes dont on a saisi la latitude et la longitude';	
	$LG_Ch_Dist_Res1 = 'La distance entre ';	
	$LG_Ch_Dist_Res2 = ' et ';	
	$LG_Ch_Dist_Res3 = ' est de ';	
	$LG_Ch_Dist_Res4 = ' km ';	
}

if ($nom_page == 'Edition_Parametres_Graphiques.php') {
	$LG_Graphics_3Gen = '3�me G�n�ration';
	$LG_Graphics_BG = 'Fond de page et premi�re lettre accueil';
	$LG_Graphics_BG_Label = 'Fond des libell�s';
	$LG_Graphics_BG_Value = 'Fond des valeurs';
	$LG_Graphics_Bar_List = 'Barre et liste';
	$LG_Graphics_Borders = 'Bordures';
	$LG_Graphics_Color_Current = 'Actuelle';
	$LG_Graphics_Color_New = 'Nouvelle';
	$LG_Graphics_Even = 'Lignes impaires';
	$LG_Graphics_Ex_Born[1] = 'le 12 mars 1902';
	$LG_Graphics_Ex_Born[2] = 'le 7 mars 1899';
	$LG_Graphics_Ex_Born[3] = 'le 16 avril 1905';
	$LG_Graphics_Ex_Born[4] = 'le 16 juin 1907';
	$LG_Graphics_Ex_Dead[1] = 'le 18 mai 1973';
	$LG_Graphics_Ex_Dead[2] = 'le 12 mai 1971';
	$LG_Graphics_Ex_Dead[3] = 'le 23 juin 1979';
	$LG_Graphics_Ex_Dead[4] = 'le 20 mai 1979';
	$LG_Graphics_Ex_Name[1] = 'DUPOND Prosper Joseph Antoine';
	$LG_Graphics_Ex_Name[2] = 'DURAND Ambroisine Augustine';
	$LG_Graphics_Ex_Name[3] = 'MARTIN Maurice Th�odule Fran�ois';
	$LG_Graphics_Ex_Name[4] = 'DULAC Solange Eug�nie';
	$LG_Graphics_First = 'Premier';
	$LG_Graphics_Form = 'Formulaire de saisie';
	$LG_Graphics_Form_Without_Tab = 'Pour les formulaires sans onglets';
	$LG_Graphics_Init_Color = 'Revenir � la couleur actuelle';
	$LG_Graphics_Last = 'Dernier';
	$LG_Graphics_Lists = 'Pour les listes';
	$LG_Graphics_Next = 'Suivant';
	$LG_Graphics_Odd = 'Lignes paires';
	$LG_Graphics_Pred = 'Graphismes pr�d�finis';
	$LG_Graphics_Req_Cols = 'Graphisme � la demande - couleurs';
	$LG_Graphics_Req_Img = 'Graphisme � la demande - images';
	$LG_Graphics_Show_Year = 'Pr�sence de l\'ann�e';
	$LG_Graphics_Stop = 'Stop';
	$LG_Graphics_Table_Border = 'Bordure des tableaux (onglets)';
	$LG_Graphics_Tree = 'Arbre ascendant imprim�';
	$LG_Graphics_Welcome = 'ienvenue sur le site de';
}

if ($nom_page == 'Edition_Filiation.php') {
	$LG_Ch_Filiation_Events = 'Ev�nements';
	$LG_Ch_Filiation_Docs = 'Documents';	
	$LG_Ch_Filiation_Parent_Choice = 'Choix par les parents';
	$LG_Ch_Filiation_Related_Choice = 'Choix par un collat�ral';
	$LG_Ch_Filiation_Last_Union = 'Dernier couple saisi';
	$LG_Ch_Filiation_Brother = 'Fr�re de';
	$LG_Ch_Filiation_Sister = 'Soeur de';
	$LG_Ch_Filiation_Related = 'Colatt�ral de';
	$LG_Ch_Filiation_Rank = 'Rang';
	$LG_Ch_Filiation_Rank_Inc = 'Augmenter le rang';
	$LG_Ch_Filiation_Rank_Dec = 'Diminuer le rang';
	$LG_Ch_Filiation_Link_Doc = 'Lier un document existant � la filiation';
	$LG_Ch_Filiation_Link_New_Doc = 'Lier un document � la filiation en cr�ant la fiche document';
	$LG_Ch_Filiation_Add_Doc = 'Ajout d\'un document';
}

if (($nom_page == 'Conv_Romain.php') 
	or ($nom_page == 'Calc_So.php')) {
	$LG_Ch_Calc_Max = 'Borne maxi';
	$LG_Ch_Calc_Clear = 'Effacement de la saisie';
	$LG_Ch_Calc_Gen = 'G�n�ration';
	$LG_Ch_Calc_Husb_Wif = 'Conjoint';
	$LG_Ch_Calc_Child = 'Enfant';
	$LG_Ch_Calc_Mo_Side = 'maternelle';
	$LG_Ch_Calc_Fa_Side = 'paternelle';
	$LG_Ch_Calc_Gen_Of = 'G�n�ration de';
	$LG_Ch_Calc_Fa_Of = 'P�re de';
	$LG_Ch_Calc_Mo_Of = 'M�re de';
	$LG_Ch_Calc_Ch_Of = 'Enfant de';
	$LG_Ch_Calc_Husb_Wif_Of = 'Conjoint de';
}

if ($nom_page == 'Edition_Parametres_Site.php') {
	$LG_Site_Param_Name = 'Nom';
	$LG_Site_Param_Mail = 'Adresse mail';
	$LG_Site_Param_Year_Only = 'Affichage de l\'ann�e seule dans les dates sur Internet';
	$LG_Site_Param_Year_Threshold = 'Ann�e pivot de masquage des dates sur Internet';
	$LG_Site_Param_No_Premium = 'Option non disponible sur les sites non Premium';
	$LG_Site_Param_Hover_Clic = 'Comportement';
	$LG_Site_Param_Hover = 'Survol';
	$LG_Site_Param_Click = 'Clic';
	$LG_Site_Param_PDF_Font = 'Police de caract�res des pdf g�n�r�s';
	$LG_Site_Param_PDF_Font_Color = 'Couleur de la police de caract�res des pdf g�n�r�s';
	$LG_Site_Param_PDF_Font_Color_Current = 'Actuelle';
	$LG_Site_Param_PDF_Font_Color_New = 'Nouvelle';
	$LG_Site_Param_PDF_Font_Color_Back = 'Revenir � la couleur actuelle';
	$LG_Site_Param_Home_Image = 'Image de la page d\'accueil';
	$LG_Site_Param_Image_With = 'Avec';
	$LG_Site_Param_Image_Without = 'Sans image';
	$LG_Site_Param_Image_No_Need = 'Inutile de re-s�lectionner un fichier si vous ne voulez pas changer l\'image';
	$LG_Site_Param_Upload_Error = 'Impossible de placer le fichier dans le r�pertoire';
	$LG_Site_Param_Error = 'Erreur';
}

if ($nom_page == 'Edition_Region.php') {
	$LG_Edit_Region_Name = 'Nom';
	$LG_Edit_Region_Code = 'Code';
	$LG_Edit_Region_Country = 'Pays';
}

if ($nom_page == 'Edition_Union.php') {
	define('LG_UNION_ADD','Ajout d\'une union');
	define('LG_UNION_ADD_DOC','Lier un document existant � l\'union');
	define('LG_UNION_ADD_DOC_NEW','Lier un document � l\'union en cr�ant la fiche document');
	define('LG_UNION_CHILDREN','Enfants');
	define('LG_UNION_CHILDREN_DEF_NAME','Nom par d�faut');
	define('LG_UNION_CHILDREN_QUICK','Saisie rapide d\'enfants');
	define('LG_UNION_CONTRACT', 'Contrat');
	define('LG_UNION_CONTRACT_NOTARY', 'par ma�tre');
	define('LG_UNION_CONTRACT_NOTARY_WHERE', 'Notaire �');
	define('LG_UNION_CONTRACT_WHEN', 'Re�u le');
	define('LG_UNION_EDIT','Modification d\'une union');
	define('LG_UNION_EVENTS','Ev�nements');
	define('LG_UNION_FIRST_NAME', 'Pr�noms');
	define('LG_UNION_HUS_1ST','Conjoint 1');
	define('LG_UNION_HUS_2ND','Conjoint 2');
	define('LG_UNION_HUS_WIFE','Conjoints');
	define('LG_UNION_THIS','cette union');
	define('LG_UNION_UPDATE_PARENTS', 'Modifier la filiation');
	define('LG_UNION_WHEN', 'Unis le');
	define('LG_UNION_WHERE_WHEN', 'Date et lieu');
}

if (($nom_page == 'Edition_Union.php') or ($nom_page == 'Fiche_Couple_txt.php')) {
	define('LG_COUPLE_REPORT_TITLE','Fiche couple format texte');
	define('LG_COUPLE_REPORT_PERSON','Personne');
	define('LG_COUPLE_REPORT_NICK_M','dit');
	define('LG_COUPLE_REPORT_NICK_F','dite');
	define('LG_COUPLE_REPORT_UNION','Mari�');
	define('LG_COUPLE_REPORT_COMMENT','Note');
	define('LG_COUPLE_REPORT_CONTRACT', 'Contrat re�u ');
	define('LG_COUPLE_REPORT_CONTRACT_NOTARY', ' par ma�tre ');
	define('LG_COUPLE_REPORT_HUSB_WIF', 'Conjoint');
	define('LG_COUPLE_REPORT_CHILDREN', 'Enfant(s)');
	define('LG_COUPLE_REPORT_BORN', 'n�');
	define('LG_COUPLE_REPORT_DEAD', 'd�c�d�');
}


if ($nom_page == 'exp_GenWeb.php') {
	define('LG_GENWEB_ERROR_FILE', 'impossible de cr�er');  
	define('LG_GENWEB_EXTRACT', 'Extraire la liste');  
	define('LG_GENWEB_FILE', 'dans un fichier');
	define('LG_GENWEB_MSG', 'Export GenWeb termin� ; disponible dans le fichier');
	define('LG_GENWEB_SCREEN', '� l\'�cran');  
	define('LG_GENWEB_SUFFIX', 'ajouter le nom du d�partement en suffixe');
}

if ($nom_page == 'Galerie_Images.php') {
	define('LG_IMAGES_GAL_CHOOSE_TYPE', 'Choisissez le type du document image');
	define('LG_IMAGES_GAL_UNION', 'Union de');
	define('LG_IMAGES_GAL_UNION_AND', 'et de');
	define('LG_IMAGES_GAL_SON', 'fils de');
	define('LG_IMAGES_GAL_DAUGHTER', 'fille de');
	define('LG_IMAGES_GAL_CHILD', 'enfant de');
	define('LG_IMAGES_GAL_FILIATION', 'Filiation');
}

if (($nom_page == 'Export_Liens.php') or ($nom_page == 'Liste_Liens.php')) {
	define('LG_LINKS_DEL','Supprimer les liens s�lectionn�s');
	define('LG_LINKS_DEL_REP1', 'suppression');
	define('LG_LINKS_DEL_REP2', 'de liens effectu�e');
	define('LG_LINKS_ADD', 'Ajouter un lien');
	define('LG_LINKS_IMPORT', 'Import CSV de liens (tableur)');
	define('LG_LINKS_EYE', 'Oeil');
	define('LG_LINKS_THIS', 'le(s) lien(s) s�lectionn�(s)');
	define('LG_LINKS_EXTRACT', 'Extraction des liens pour la cat�gorie');
	define('LG_LINKS_EXTRACT_RES1', 'lien');
	define('LG_LINKS_EXTRACT_RES2', 'trouv�');
	define('LG_LINKS_EXTRACT_HEADER', 'Type de lien;Description;URL');
	define('LG_LINKS_EXTRACT_ERROR1' ,'Le fichier');
	define('LG_LINKS_EXTRACT_ERROR2' ,"n'a pas pu �tre cr�� ; assurez vous qu'il n'est pas d�j� ouvert par ailleurs et que vous avez les droits.");
}

if (($nom_page == 'Verif_Internet.php') or ($nom_page == 'Verif_Internet_Absente.php')){
	define('LG_CHK_INTERNET_BORN','Date de naissance');
	define('LG_CHK_INTERNET_DEATH','Date de d�c�s');
	define('LG_CHK_INTERNET_PERSON','Personne');
	define('LG_CHK_INTERNET_YEARS','ans');
	define('LG_CHK_INTERNET_PRES_1',' personne(s) n�e(s) ou d�c�d�e(s) il y a moins de');
	define('LG_CHK_INTERNET_PRES_2', 'ans et autoris�e(s) � la diffusion sur Internet. Changer la limite pour cette v�rification');
	define('LG_CHK_INTERNET_RESULT_1', 'rectification(s) demand�e(s)');
	define('LG_CHK_INTERNET_RESULT_2', 'rectification(s) effectu�e(s).');
	define('LG_CHK_INTERNET_TIP', 'D�cochez les lignes � rectifier.');
	define('LG_CHK_INTERNET_ABS_TIP', 'Cochez les lignes � rectifier.');
	define('LG_CHK_INTERNET_ABS_1',' personne(s) d�c�d�e(s) il y a plus de');
	define('LG_CHK_INTERNET_ABS_2', 'ans ou n�e(s) il y a plus de');
	define('LG_CHK_INTERNET_ABS_3', 'et non visible(s) sur Internet.');
	define('LG_CHK_INTERNET_ABS_CHG_LIMIT', 'Changer la limite pour cette v�rification');
}

if ($nom_page == 'Verif_Sosa.php') {
	define('LG_CHK_SOSA_CALC_NUMBER','Num�ro th�orique');
	define('LG_CHK_SOSA_NON_MATCHING','Liste des �carts constat�s');
	define('LG_CHK_SOSA_NUMBER','Num�ro lu');
	define('LG_CHK_SOSA_PERSON','Personne');
	define('LG_CHK_SOSA_RESULT_1', 'rectification(s) demand�e(s)');
	define('LG_CHK_SOSA_RESULT_2', 'rectification(s) effectu�e(s).');
}

if ($nom_page == 'Vue_Personnalisee.php') {
	define('LG_CUST_VIEW_DEFAULT', 'De cujus par d�faut');
	define('LG_CUST_VIEW_OTHER', 'Autre de cujus');
	define('LG_CUST_VIEW_PRIVATE', 'Donn�es non publiques');
	define('LG_CUST_VIEW_SELECT', 'S�lectionnez un de cujus');
}

if ($nom_page == 'Arbre_Perso.php') {
	define('LG_PERS_TREE_CHOOSE_OTHER', 'Voir une autre page ...');
	define('LG_PERS_TREE_ERROR_NO_SHOW', 'Cet arbre contient des donn�es non disponibles sur Internet');
	define('LG_PERS_TREE_MISSING_DIR', "Dans la table arbreParam, il manque l\'enregistrement de cl�s 'repertoire' et genImg");
	define('LG_PERS_TREE_MISSING_ROW', "Dans la table arbre, il manque l'enregistrement ");
	define('LG_PERS_TREE_NOT_FOUND', 'Fichier inexistant ');
	define('LG_PERS_TREE_OPEN_ERROR', 'Ouverture impossible de ');
}

if ($nom_page == 'Edition_Lier_Objet.php') {
	define('LG_LINK_EVT_TITLE', 'Lier un �v�nement');	
	define('LG_LINK_TO_PARENTS', 'Lier un �v�nement � la filiation');	
	define('LG_LINK_TO_UNION', "Lier un �v�nement � l'union");	
	define('LG_LINK_UNION_NF', 'Union non trouv�e');	
	define('LG_LINK_WITH_1', 'Lien de');	
	define('LG_LINK_WITH_2', 'avec');	
	define('LG_LINK_THIS', 'cette liaison');	
}

if ($nom_page == 'Calendriers.php') {
	define('LG_CALEND_ASCENSION', 'Ascension');
	define('LG_CALEND_AUTUMN' ,"d'automne,");
	define('LG_CALEND_BROWSER_DEP', '(visible selon les navigateurs)');
	define('LG_CALEND_CALC', 'Date calcul�e');
	define('LG_CALEND_CALCULATE', 'Calculer');
	define('LG_CALEND_CALC_ON_DATE', 'Calcul sur les dates');
	define('LG_CALEND_CONVERT', 'Convertir');
	define('LG_CALEND_DAY', 'Calcul du jour de la semaine');
	define('LG_CALEND_EASTER', 'P�ques');
	define('LG_CALEND_EASTER_CALC', 'Calcul de la date de P�ques et principales f�tes associ�es');
	define('LG_CALEND_INITIALE', 'Date initiale');
	define('LG_CALEND_LENT', 'Car�me');
	define('LG_CALEND_MONTH', 'Mois');
	define('LG_CALEND_OFFSET', 'D�calage');
	define('LG_CALEND_PALM_SUNDAY', 'Rameaux');
	define('LG_CALEND_PENTECOST', 'Pentec�te');
	define('LG_CALEND_REV_CONVERT', 'Conversions de calendrier r�publicain');
	define('LG_CALEND_SPRING', "de printemps,");
	define('LG_CALEND_SUMMER', "d'�t�,");
	define('LG_CALEND_WINTER', "d'hiver");
	define('LG_CALEND_YEAR', 'Ann�e');
}

if ($nom_page == 'Verif_Homonymes.php') {
	define('LG_NAMESAKE_CRITERIA', 'Crit�res compl�mentaires');
	define('LG_NAMESAKE_BIRTH' ,'Date de naissance');
	define('LG_NAMESAKE_DEATH', 'Date de d�c�s');
	define('LG_NAMESAKE_CHOOSE_ALERT', 'Veuillez saisir une personne dans chaque colonne');
	define('LG_NAMESAKE_ZERO', "Pas d'homonymes d�tect�s");
}

if ($nom_page == 'Utilisations_Document.php') {
	define('LG_DOC_UT_COUNT', 'utilisation(s) trouv�e(s)');
	define('LG_DOC_UT_NO', "Pas d'utilisation du document");
	define('LG_DOC_UT_ON', 'Pour');
}

if ($nom_page == 'Recherche_Ville.php') {
	define('LG_TOWN_FOUND', 'ville(s) trouv�e(s)');
	define('LG_TOWN_NEW_TAB', 'Nouvel onglet pour les fiches');
	define('LG_TOWN_SCH_NAME', 'Nom');
	define('LG_TOWN_SCH_STATUS', 'Statut de la fiche');
	define('LG_TOWN_SCH_ZIP', 'Code Postal');
}

if ($nom_page == 'Recherche_Document.php') {
	define('LG_DOC_SCH_ON', 'sur les documents de nature');
	define('LG_DOC_SCH_TYPE', 'de type');
	define('LG_DOC_SCH_TITLES', 'des titres contenant');
	define('LG_DOC_SCH_FOUND', 'document(s) trouv�(s)');
	define('LG_DOC_SCH_SEE', 'Voir le document');
	define('LG_DOC_SCH_HEADER_CSV', 'Nature_Document;Titre;Nom_Fichier;Diffusion_Internet;Date_Creation;Date_Modification;Type_Document;');
	define('LG_DOC_SCH_NEW', 'Nouvelle recherche');
	define('LG_DOC_SCH_LB_TITLE', 'Titre contenant');
	define('LG_DOC_SCH_LB_NATURE', 'Nature');
	define('LG_DOC_SCH_LB_TYPE', 'Type');
}

if ($nom_page == 'Pers_Isolees.php') {
	define('LG_PERS_NO_LK_FOUND_MEN', ' homme(s) isol�(s) trouv�(s)');
	define('LG_PERS_NO_LK_FOUND_WOMEN', ' femme(s) isol�e(s) trouv�e(s)');
	define('LG_PERS_NO_LK_FOUND_UNDEF', ' personnes(s) isol�e(s) de sexe ind�termin� trouv�(s)');
}

if ($nom_page == 'Notaires_Ville.php') {
	define('LG_NOTARY_TITLE', 'Notaires dans les unions sur la ville de ');
}

if ($nom_page == 'Liste_Pers_Mod.php') {
	define('LG_PERS_MOD_PERS', 'Personnes');	
	define('LG_PERS_MOD_WHEN' ,'Date de modification');
}

if (($nom_page == 'Liste_Nom_Pop.php') or ($nom_page == 'Liste_Prof_Pop.php')) {
	define('LG_MOST_JOBS', 'Profession');
	define('LG_MOST_NAMES', 'Nom');
	define('LG_MOST_PERS', 'Nombre de personnes');
	define('LG_MOST_JOBS_TIP1', 'Les r�sultats seront coh�rents si les �v�nements ont �t� ');
	define('LG_MOST_JOBS_TIP2', 'fusionn�s');
}

if ($nom_page == 'Liste_Nom_Vivants.php') {
	define('LG_LIVING_IGNORE', 'Ignorer les personnes sans date de naissance');
	define('LG_LIVING_SHOW_HIDE', 'Afficher / masquer tous les noms');
	define('LG_LIVING_REF_DATE', 'Date pivot de naissance');
	define('LG_LIVING_TODAY', "aujourd'hui");
	define('LG_LIVING_YEARS', 'ans');

}

if ($nom_page == 'Liste_NomFam.php') {
	define('LG_NAMES_LIST_LAST', 'Dernier nom de famille saisi');
	define('LG_NAMES_LIST_ADD', 'Ajouter un nom de famille');
}

if ($nom_page == 'Liste_Patro.php') {
	define('LG_PATRO_THEN', 'puis');
	define('LG_PATRO_DISP_PLACE', 'Afficher les lieux');
	define('LG_PATRO_RESTRICT', 'Limiter au nom du de cujus');
	define('LG_PATRO_SHOW_NOSHOW_FIL', 'Afficher / masquer toutes les filiations');
	define('LG_PATRO_FILIATION', 'Filiation patronymique');
}

if ($nom_page == 'Liste_Evenements.php') {
	define('LG_EVENT_LIST_lAST', 'Dernier �v�nement saisi');
	define('LG_EVENT_LIST_TYPE', 'Type');
}

if ($nom_page == 'Liste_Eclair.php') {
	define('LG_COUNTY_LIST_SHOW_HIDE', 'Afficher / masquer tous les noms');
	define('LG_COUNTY_LIST_ONE', 'Liste �clair pour le d�partement');
	define('LG_COUNTY_LIST_ALL', 'Liste �clair pour tous les d�partements');
}

if ($nom_page == 'Liste_Contributions.php') {
	define('LG_CONTRIB_LIST_WHEN', 'Date de la contribution');
	define('LG_CONTRIB_LIST_PROCESS', 'Traiter la contribution');
	define('LG_CONTRIB_LIST_PERSON', 'Personne concern�e');
	define('LG_CONTRIB_LIST_NEW', 'Contribution non trait�e');
	define('LG_CONTRIB_LIST_IGNORE', 'Ignorer les contributions trait�es');
	define('LG_CONTRIB_LIST_CONTRIB', 'Contribution');	
}

if ($nom_page == 'Edition_Contribution.php') {
	define('LG_CONTRIB_EDIT_BROWSER', 'Navigateur');
	define('LG_CONTRIB_EDIT_CHILD', 'Enfants');
	define('LG_CONTRIB_EDIT_DATAS', 'Donn�es du contributeur');
	define('LG_CONTRIB_EDIT_FILE_ERROR', "Echec sur l'ouverture de ");
	define('LG_CONTRIB_EDIT_FILE_N_EXISTS', "Le fichier n'existe pas.");
	define('LG_CONTRIB_EDIT_FOR', 'pour');
	define('LG_CONTRIB_EDIT_HUB_WIFE', 'Conjoint');
	define('LG_CONTRIB_EDIT_IP', 'IP');
	define('LG_CONTRIB_EDIT_MAIL', 'Mail');
	define('LG_CONTRIB_EDIT_MESSAGE', 'Message');
	define('LG_CONTRIB_EDIT_SERVER', 'Nom du serveur');
	define('LG_CONTRIB_EDIT_SERVER_IP', 'IP du serveur');
	define('LG_CONTRIB_EDIT_THIS', 'cette contribution');
	define('LG_CONTRIB_EDIT_TIP1' ,'signification des enrichissements typographiques');
	define('LG_CONTRIB_EDIT_TIP2' ,'Zone modifi�e par rapport � la zone actuelle');
	define('LG_CONTRIB_EDIT_TIP3' ,'Zone absente de la proposition et reprise de la zone actuelle');
	define('LG_CONTRIB_EDIT_TIP_CHILD' ,"aucun enrichissement typographique n'est possible car il peut y avoir plusieurs enfants");
	define('LG_CONTRIB_EDIT_TIP_HUSB_WIFE' ,"aucun enrichissement typographique n'est possible car il peut y avoir plusieurs conjoints");
	define('LG_CONTRIB_EDIT_VERSION', 'Version de G�n�mania');
    define('LG_CONTRIB_EDIT_PARENTS', 'Parents');
    define('LG_CONTRIB_EDIT_TITLE', "Prise en compte d'une contribution");
}

if ($nom_page == 'Infos_Tech.php') {
	define('LG_TECH_INFO_VERSION', 'Version de G�n�mania');
    define('LG_TECH_INFO_ENVIR_LOCAL', 'Environnement : Local');
    define('LG_TECH_INFO_ENVIR_INTERNET', 'Environnement : Internet');
}	 
	 
// if (($nom_page == 'Import_CSV_Liens.php') or ($nom_page == 'Import_CSV_Evenements.php') or ($nom_page == 'Import_CSV_Villes.php')) {
if (strpos($nom_page, 'Import_CSV') !== false) {
	define('LG_IMP_CSV_REQ_FIELDS', 'Champs demand�s');
	define('LG_IMP_CSV_IN_COL', 'dans la colonne');
	define('LG_IMP_CSV_ERR_MATCH_1', 'Erreur de correspondance avec ent�te pr�sente ; champ ');
	define('LG_IMP_CSV_ERR_MATCH_2', ' inconnu');
	define('LG_IMP_CSV_ERROR_LINE', 'Erreur sur la ligne');
	define('LG_IMP_CSV_LINKS_RESET_LINKS', "Vidage pr�alable d'une cat�gorie de liens");
	define('LG_IMP_CSV_LINKS_SEL_TYPE', 'S�lectionnez un type si n�cessaire');
	define('LG_IMP_CSV_LINKS_DEL_BEFORE', 'Vidage pr�alable des liens de type');
	define('LG_IMP_CSV_LINKS_CREATED', 'lien(s) cr��(s)');
	define('LG_IMP_CSV_PERS_CREATED', 'personne(s) cr��e(s)');
	define('LG_IMP_CSV_EVTS_CREATED', '�v�nement(s) cr��(s)');
	define('LG_IMP_CSV_TOWNS_CREATED', 'ville(s) cr��e(s)');
	define('LG_IMP_CSV_HEADER_NO', 'Absente');
	define('LG_IMP_CSV_HEADER_YES_IGNORE', 'Pr�sente � ignorer');
	define('LG_IMP_CSV_HEADER_YES_CONSIDER', 'Pr�sente � prendre en compte');
	define('LG_IMP_CSV_COLS_MATCH', 'Correspondances');
	define('LG_IMP_CSV_COL_MATCH_ERROR', 'Erreur correspondance');
	define('LG_IMP_CSV_COLS_GEN', 'Zone G�n�amania');
	define('LG_IMP_CSV_COLS_CSV', 'Colonne du tableur');
	define('LG_IMP_CSV_ERR_OPEN_FILE', 'Fichier impossible � ouvrir');
	define('LG_IMP_CSV_ERR_TYPE', "Le fichier s�lectionn� n'a pas la bonne extension");
	define('LG_IMP_CSV_DEFAULT_SHOW', 'Visibilit� internet autoris�e par d�faut');
	define('LG_IMP_CSV_COL_GEN', 'S�lectionnez une zone');
	define('LG_IMP_CSV_NO_PREMIUM', 'Option non disponible sur les sites non Premium');
}
 
if (($nom_page == 'exp_Gedcom_Personne.php') or ($nom_page == 'exp_Gedcom.php') or ($nom_page == 'xx.php')) {
	define('LG_GEDCOM_FORM', 'Ville,Code lieu,D�partement,R�gion,Pays');
	define('LG_GEDCOM_FILE', "L'export Gedcom est disponible dans le fichier");
	define('LG_GEDCOM_FILE_ERROR', "Fichier impossible � cr�er");
	define('LG_GEDCOM_PERS', 'personne(s) � traiter.');
	define('LG_GEDCOM_PERS_PROCESS', 'personnes trait�es.');
	define('LG_GEDCOM_UNIONS', 'unions(s) � traiter.');
	define('LG_GEDCOM_UNIONS_PROCESS', 'unions trait�es.');
	define('LG_GEDCOM_FILE_EXPORT', "L'export Gedcom de la base est disponible dans le fichier ");
	define('LG_GEDCOM_FILE_EXPORT_LIGHT', "L'export Gedcom l�ger de la base est disponible dans le fichier ");
}

function lib_sexe_born($sexe) {
	switch ($sexe) {
		case 'm' : $ret = 'n�'; break;
		case 'f' : $ret = 'n�e'; break;
		default : $ret = 'n�(?)';
	}
	return $ret;
}

function lib_sexe_dead($sexe) {
	switch ($sexe) {
		case 'm' : $ret = 'd�c�d�'; break;
		case 'f' : $ret = 'd�c�d�e'; break;
		default : $ret = 'd�c�d�(?)';
	}
	return $ret;
}

function lib_sexe_nickname($sexe) {
	switch ($sexe) {
		case 'm' : $ret = 'dit'; break;
		case 'f' : $ret = 'dite'; break;
		default : $ret = 'dit(?)';
	}
	return my_html($ret);
}	 
if (($nom_page == 'Fiche_Indiv_txt.php') or ($nom_page == 'Fiche_Fam_Pers.php')) {
	define('LG_PERS_PERS', 'Personne');
	define('LG_PERS_BROTHERS_SISTERS', 'Fr�res et soeurs');
	define('LG_PERS_CHILDREN', 'Enfants');
	define('LG_PERS_OLD', '�ge');
	define('LG_PERS_MARIED', 'Mari�s');
	define('LG_PERS_CONTRACT', 'contrat re�u');
	define('LG_PERS_MAITRE', 'par ma�tre');
	define('LG_PERS_NOTARY', 'notaire');
	define('LG_PERS_EVENTS', 'Ev�nements');
	define('LG_PERS_EVENT', 'Ev�nement');
	define('LG_PERS_WHERE', 'lieu');
	define('LG_PERS_PARTICIPATION', 'Participation');
}

// Sp�cifique Fiche familiale
if ($nom_page == 'Fiche_Fam_Pers.php') {
	define('LG_FFAM_OBJECT', 'Fiche familiale');
	define('LG_FFAM_CHILDREN_WITH', 'Enfants avec le conjoint');
	define('LG_FFAM_ADD_CHILDREN', 'Cr�er des enfants pour le couple');
	define('LG_FFAM_CHLIDREN_NO_UNION', 'Enfants hors union');
	define('LG_FFAM_BROTHERS_SISTERS', 'Fr�res et soeurs');
	define('LG_FFAM_RANK_ISSUE', 'Probl�me sur le rang');
	define('LG_FFAM_RANK_REORG', 'R�-organisation des rangs');
	define('LG_FFAM_CONTRIBUTE', 'Ajouter une contribution pour');
	define('LG_FFAM_SET_AS_DECUJUS', 'Choisir provisoirement cette personne comme de cujus (ou Sosa 1)');
	define('LG_FFAM_ALT_NAME', 'dit');
	define('LG_FFAM_ALL_NAME', 'Afficher toutes les personnes portant le nom');
	define('LG_FFAM_MEN_ASC', 'Arbre agnatique');
	define('LG_FFAM_WOMEN_ASC', 'Arbre cognatique');
	define('LG_FFAM_PRINTABLE_TREE', 'Arbre imprimable');
	define('LG_FFAM_INDIV_TEXT_PDF', 'Fiche individuelle au format PDF');
	define('LG_FFAM_ERROR', "Dans la table arbreParam, il manque l'enregistrement de cl�s 'repertoire' et genPdf");
	define('LG_FFAM_CUST_TREES', 'Arbres personnalis&eacute;s (images)');
	define('LG_FFAM_HUSB_WIFE', 'Conjoints');
	define('LG_FFAM_COUPLE_REC', 'Fiche couple');
	define('LG_FFAM_COUPLE_REC_PDF','Fiche couple au format PDF');
	
}

if ($nom_page == 'Fusion_Evenements.php') {
	define('LG_EVT_MERGE_OK', 'Fusionner');
	define('LG_EVT_MERGE_PROCESS', 'Traitements des �v�nements');
	define('LG_EVT_MERGE_REF', 'R�f�rence');
	define('LG_EVT_MERGE_OTHER', 'A fusionner');
	define('LG_EVT_MERGE_SIMULATE', 'Mode simulation');
	define('LG_EVT_MERGE_TIP', 'Sont fusionn�s les �v�nements pr�sentant les m�mes lieux, type, titre et dates.');
	$lg_evt_participation = 'participation';
	$lg_evt_participations = $lg_evt_participation.'s';
	$lg_evt_image = 'image';
	$lg_evt_images = $lg_evt_image.'s';
	$lg_evt_document = 'document';
	$lg_evt_documents = $lg_evt_document.'s';
	define ('LG_EVT_MERGE_ACTION', '� basculer');
	define ('LG_EVT_MERGE_IS_COMMENT', 'Pr��sence de commentaires, pas de fusion');
	$lg_evt_nb_event = '�v�nement concern�.';
	$lg_evt_nb_events = '�v�nements concern�s.';
	$lg_evt_done = array("m" => "bascul�", "ms" => "bascul�s", "f" => "bascul�e", "fs" => "bascul�es");
}

if ($nom_page == 'Init_Sosa.php') {
	define('LG_DEL_SOSA_KEEP', 'Garder le de cujus �ventuel');	
}

if ($nom_page == 'Init_Noms.php') {
	define('LG_INIT_NAMES_DONE' ,'Identifiants recalcul�s');
	define('LG_INIT_NAMES_NONE', "Pas d'identifiant � recalculer");
	define('LG_INIT_NAMES_REF', 'R�f�rence');
	define('LG_INIT_NAMES_INIT', 'R�-initialisation demand�e');
}

if ($nom_page == 'Verif_Personne.php') {
	define('LG_CHK_PERS_CTRLS' ,'Contr�les de la personne');
	define('LG_CHK_PERS_CTRLS_PARENTS' ,'Contr�les des parents');
	define('LG_CHK_PERS_CTRLS_UNIONS' ,'Contr�les des unions');
	define('LG_CHK_PERS_CTRLS_CHILDREN' ,'Contr�les des enfants');
}

if ($nom_page == 'Premiers_Pas_Genealogie.php') {
	define('LG_START_DEF', 'D�finition de la g�n�alogie');
	define('LG_START_SOURCES', "Sources d'information");
	define('LG_START_CIVIL_REGISTRATION', "L'�tat civil");
	define('LG_START_CHURCH_RECORDS', 'Registres paroissiaux');
	define('LG_START_YOUR_TURN' ,'A vous de jouer...');
}

if ($nom_page == 'Glossaire_Gen.php') {
	define('LG_GLOSS_ACT', 'Acte');				
	define('LG_GLOSS_ADULTERINE', 'Adult�rin');			
	define('LG_GLOSS_AGNATIC', 'Agnat, Agnatique');	
	define('LG_GLOSS_GRAND_FA_MOTHER', 'A�eul(e)');	
	define('LG_GLOSS_ANCESTORS', 'A�eux');		
	define('LG_GLOSS_ELDER', 'A�n�');			
	define('LG_GLOSS_FIRSTBORN', 'A�nesse'); 			
	define('LG_GLOSS_RELATED', 'Apparent�');			
	define('LG_GLOSS_ARMORIAL', 'Armorial');		
	define('LG_GLOSS_ARMS', 'Armoiries');			
	define('LG_GLOSS_REG_ITEM', 'Article');	
	define('LG_GLOSS_ANCESTOR', 'Ascendant');			
	define('LG_GLOSS_COMMON_ANCESTOR', 'Auteur');
	define('LG_GLOSS_BANNS', 'Bans');
	define('LG_GLOSS_BAPTISM', 'Bapt�me');
	define('LG_GLOSS_YOUNGEST', 'Benjamin');
	define('LG_GLOSS_GREAT_GRANDPARENT', 'Bisa�eul');
	define('LG_GLOSS_BLAZON', 'Blason');
	define('LG_GLOSS_BWB', 'B.M.S.');
	define('LG_GLOSS_BRANCH', 'Branche');	
	define('LG_GLOSS_CA', 'CA');
	define('LG_GLOSS_LAND_REGISTRY', 'Cadastre');
	define('LG_GLOSS_CADET', 'Cadet');
	define('LG_GLOSS_POLL_TAX', 'Capitation');
	define('LG_GLOSS_CARTULARY', 'Cartulaire');
	define('LG_GLOSS_CHARTER', 'Charte');
	define('LG_GLOSS_BOURG_RECENS', 'Cherche de feux');
	define('LG_GLOSS_COGNATIC', 'Cognat - Cognatique');
	define('LG_GLOSS_COLLATERAL', 'Collat�ral');
	define('LG_GLOSS_CONSANGUINEOUS', 'Consanguin');
	define('LG_GLOSS_CONSANGUINITY', 'Consanguinit�');
	define('LG_GLOSS_CONSCRIPTION', 'Conscription');
	define('LG_GLOSS_REFERENCE', 'Cote');
	define('LG_GLOSS_CURATORSHIP', 'Curatelle');
	define('LG_GLOSS_DECUJUS', 'De cujus');
	define('LG_GLOSS_DEG_RELATIONSHIP', 'Degr� de parent�');
	define('LG_GLOSS_DESCENDANTS', 'Descendance');
	define('LG_GLOSS_INBREEDING_EXEMPTIONS', 'Dispenses de consanguinit�');
	define('LG_GLOSS_AFFINITY_EXEMPTIONS', "Dispenses d'affinit�");	
	define('LG_GLOSS_ENDOGAMY', 'Endogamie');
	define('LG_GLOSS_REGISTRATION', 'Enregistrement');
	define('LG_GLOSS_ANNOUNCEMENT', 'Faire-part');
	define('LG_GLOSS_HOUSE', 'Feu');
	define('LG_GLOSS_FILIATION', 'Filiation');
	define('LG_GLOSS_COLLECTION', 'Fonds');	
	define('LG_GLOSS_GEDCOM', 'Gedcom');
	define('LG_GLOSS_GENERATION', 'G�n�ration');
	define('LG_GLOSS_FULL_ORIGIN', 'Germains');
	define('LG_GLOSS_REGISTRY', 'Greffe');
	define('LG_GLOSS_HERALDRY', 'H�raldique');
	define('LG_GLOSS_HEIRS', 'Hoirs');
	define('LG_GLOSS_ILLEGITIMATE', 'Ill�gitime');
	define('LG_GLOSS_IMPLEX', 'Implexe');
	define('LG_GLOSS_INDEX', 'Index');
	define('LG_GLOSS_PUB_RECORD', 'Insinuation');
	define('LG_GLOSS_NO_WILL', 'Intestat');
	define('LG_GLOSS_INVENTORY', 'Inventaire');
	define('LG_GLOSS_POST_MORTEM_INVENTORY', 'Inventaire apr�s d�c�s');
	define('LG_GLOSS_LEGITIMATION', 'L�gitimation');
	define('LG_GLOSS_BUNDLE', 'Liasse');
	define('LG_GLOSS_LINEAGE', 'Lignage');
	define('LG_GLOSS_HISTORY_BOOK', 'Livre de raison');
	define('LG_GLOSS_FAMILY_REC_BOOK', 'Livret de famille');
	define('LG_GLOSS_MILITARY_RECORD', 'Livret militaire');
	define('LG_GLOSS_FAMILY', 'Maison');
	define('LG_GLOSS_MATRONYM', 'Matronyme');
	define('LG_GLOSS_MARGINAL_MENTION', 'Mention marginale');
	define('LG_GLOSS_RECORD', 'Minute');
	define('LG_GLOSS_NATURAL', 'Naturel');
	define('LG_GLOSS_NUMBERING', 'Num�rotation');
	define('LG_GLOSS_NOBLE_FAMILIES', 'Nobiliaire');
	define('LG_GLOSS_URGENT_BAPTISM', 'Ondoiement');
	define('LG_GLOSS_ONOMASTICS', 'Onomastique');
	define('LG_GLOSS_PALEOGRAPHY', 'Pal�ographie');
	define('LG_GLOSS_RELATIVES', 'Parent�le');
	define('LG_GLOSS_PARISH', 'Paroisse');
	define('LG_GLOSS_PATRONYMIC', 'Patronyme');
	define('LG_GLOSS_POSTERITY', 'Post�rit�');
	define('LG_GLOSS_YOUNGER', 'Pu�n�');
	define('LG_GLOSS_LINEAGE_ANCESTOR', 'Quartier');
	define('LG_GLOSS_CENSUS', 'Recensement');
	define('LG_GLOSS_PARISH_REGISTERS', 'Registres paroissiaux');
	define('LG_GLOSS_SOSA', 'Sosa');
	define('LG_GLOSS_SOURCES', 'Sources');
	define('LG_GLOSS_NICKNAME', 'Surnom');
	define('LG_GLOSS_10Y_TABLE', 'Table d�cennale');
	define('LG_GLOSS_TABELLION', 'Tabellion');
	define('LG_GLOSS_COMMON', 'Usuel');
	define('LG_GLOSS_UTERINE', 'Ut�rin');
	define('LG_GLOSS_5PC_TAX', 'Vingti�me');
}

if ($nom_page == 'Export.php') {
	define('LG_EXPORT_TYPE', "Type d'export");
	define('LG_EXPORT_FILE_SUFFIXE', "Suffixe du fichier d'export");
	define('LG_EXPORT_FILE_SUFFIXE_WITH', 'Avec');
	define('LG_EXPORT_FILE_SUFFIXE_WITHOUT', 'Sans le suffixe');
	define('LG_EXPORT_TARGET_INTERNET', 'Internet');
	define('LG_EXPORT_TARGET_HOSTED', 'pour site h�berg� sur G�n�amania'); 
	define('LG_EXPORT_TARGET_BACKUP', 'Sauvegarde');
	define('LG_EXPORT_OMIT_RECENT', 'Masquage des dates r�centes');
	define('LG_EXPORT_DATE_THRES', 'Pivot');
	define('LG_EXPORT_YEARS', 'ans');
	define('LG_EXPORT_LIST_ERROR', 'Impossible de lister les tables');
	define('LG_EXPORT_HOVER', 'passez votre souris');
	define('LG_EXPORT_CLICK', 'cliquez');
	define('LG_EXPORT_TIP1', 'Toutes les tables sont s�lectionn�es par d�faut ; ');
	define('LG_EXPORT_TIP2', " sur l'ic�ne qui suit pour faire appara�tre la liste des tables");
	define('LG_EXPORT_SHOW', 'Montrer les tables');
	define('LG_EXPORT_ALL_NONE', 'Toutes / aucune');
	define('LG_EXPORT_NO_EXPORT', "Les donn�es de cette table ne sont pas export�es lors d'un export Internet");
	define('LG_EXPORT_MODIFY', "Les donn�es de cette table sont modifi�es lors d'un export Internet");
	define('LG_EXPORT_RES_NO_EXTRACT', "Pas d'extraction des donn�es");
	define('LG_EXPORT_DATA_OK', 'Donn�es OK');
	define('LG_EXPORT_STRUCTURE_OK', 'Structure OK');
	define('LG_EXPORT_RAWS', 'ligne(s)');
	define('LG_EXPORT_FILE', "L'export de la base est disponible dans le fichier");
	define('LG_EXPORT_GUEST', 'invit�');
	define('LG_EXPORT_CATEG_BLUE','Cat�gorie bleue');
	define('LG_EXPORT_CATEG_GREEN', 'Cat�gorie verte');
	define('LG_EXPORT_CATEG_ORANGE', 'Cat�gorie orange');
	define('LG_EXPORT_CATEG_PINK' ,'Cat�gorie rose');
	define('LG_EXPORT_CATEG_PURPLE', 'Cat�gorie violette');
	define('LG_EXPORT_CATEG_RED', 'Cat�gorie rouge');
	define('LG_EXPORT_CATEG_YELLOW', 'Cat�gorie jaune');
	define('LG_EXPORT_EVT1', "la Revue Fran�aise de G�n�alogie teste Geneamania dans son num�ro d'�t�");
}

if (($nom_page == 'controle_nomFam.php') or ($nom_page =='Edition_NomFam.php' )) {
	define('LG_CTRL_NAME_EXISTS',"Le nom de famille existe d�j� dans la base. Voulez-vous fusionner ce nom avec celui existant ?");
}

if ($nom_page == 'Import_Sauvegarde.php') {
	define('LG_IMP_BACKUP_RESET', 'Vidage pr�alable de la base actuelle');
	define('LG_IMP_BACKUP_RESET_TIP', 'Ne validez cette option que si vous savez ce que vous faites !');
	define('LG_IMP_BACKUP_FILE', 'Fichier de sauvegarde � t�l�charger');
	define('LG_IMP_BACKUP_FILE_SELECT', 'ou s�lectionnez en un parmi ceux pr�sents ');
	define('LG_IMP_BACKUP_FILE_SHOW', 'Montrer les fichiers');
	define('LG_IMP_BACKUP_TARGET', 'Base de destination');
	define('LG_IMP_BACKUP_TARGET_LOCAL', 'Locale');
	define('LG_IMP_BACKUP_TARGET_INTERNET', 'Internet');
	define('LG_IMP_BACKUP_INTERNET_PARAMS', 'Param�tres de connexion pour internet');
	define('LG_IMP_BACKUP_INTERNET_PARAMS_DB','Base');
	define('LG_IMP_BACKUP_INTERNET_PARAMS_USER','Utilisateur');
	define('LG_IMP_BACKUP_INTERNET_PARAMS_PSW', 'Mot de passe');
	define('LG_IMP_BACKUP_INTERNET_PARAMS_SITE', 'Site');
	define('LG_IMP_BACKUP_INTERNET_PARAMS_PORT', 'port');
	define('LG_IMP_BACKUP_INTERNET_PARAMS_SAVE', 'M�morisation des param�tres de connexion dans un fichier');
	define('LG_IMP_BACKUP_INTERNET_SAVE_REQUEST', 'demande de m�morisation');
	define('LG_IMP_BACKUP_KEEP_USERS', 'Pr�server la liste des utilisateurs');
	define('LG_IMP_BACKUP_KEEP_USERS2', 'Pr�servation de la liste des utilisateurs');
	define('LG_IMP_BACKUP_READ_LINES', 'lignes trait�es');
	define('LG_IMP_BACKUP_LINES_ERROR', 'Nombre de lignes incoh&eacute;rent pour la table, vidage...');
	define('LG_IMP_BACKUP_FILE_ERROR', 'impossible de cr�er');
	define('LG_IMP_BACKUP_TABLE_ERROR', 'Impossible de lister les tables');
	define('LG_IMP_BACKUP_FILE_ERROR_TXT', "Le fichier doit avoir l'extension txt");
	define('LG_IMP_BACKUP_FILE_ERROR_TXT_SQL', "Le fichier doit avoir l'extension txt ou sql");
	define('LG_IMP_BACKUP_NO_FILE', 'Pas de fichier s�lectionn�');
	define('LG_IMP_BACKUP_NO_PREFIX', 'pas de pr�fixe');
	define('LG_IMP_BACKUP_PREFIX', 'Pr�fixe de rechargement');
	define('LG_IMP_BACKUP_ERR_VERS', "Votre version locale n'est pas en phase avec la version courante ; arr�t de l'import");
	define('LG_IMP_BACKUP_LOCAL_VERS', 'version locale');
	define('LG_IMP_BACKUP_CUR_VERS', 'version courante');
	define('LG_IMP_BACKUP_TABLE_IN_PROGRESS', 'Traitement de la table');
	define('LG_IMP_BACKUP_REQ', 'requ�tes');
    define('LG_IMP_BACKUP_LINES', 'lignes');
    define('LG_IMP_BACKUP_ITEM_READ', 'lues dans le fichier');
    define('LG_IMP_BACKUP_ITEM_OK', 'requ�tes ex�cut�es avec succ�s');
    define('LG_IMP_BACKUP_TABLE_DELETE', 'suppression de la table cr��e � tort');

}

if ($nom_page == 'Import_Docs.php') {
	define('LG_IMP_DOCS_MISS_IMG', 'Images absentes');
	define('LG_IMP_DOCS_MISS_DOC', 'Documents absents');
	define('LG_IMP_DOCS_MISS_IMG_DOC', 'Image / document');
	define('LG_IMP_DOCS_DOC_NOT_FORESSEN1', 'Image ou document de type image ');
	define('LG_IMP_DOCS_DOC_NOT_FORESSEN2', ' non pr�vu');
	define('LG_IMP_DOCS_FILE_EXISTS1', 'Fichier ');
	define('LG_IMP_DOCS_FILE_EXISTS2', ' d�j� existant');
	define('LG_IMP_DOCS_IMPORT', 'Import de ');
	define('LG_IMP_DOCS_IMG', 'image');
	define('LG_IMP_DOCS_HTML', 'page HTML');
	define('LG_IMP_DOCS_PDF', 'fichier PDF');
	define('LG_IMP_DOCS_SIZE', ' octets ');
}

// Divers
$Mois_Lib = Array("janvier", "f&eacute;vrier", "mars", "avril", "mai", "juin",
					"juillet", "ao&ucirc;t", "septembre", "octobre", "novembre", "d&eacute;cembre");
// without entities
$Mois_Lib_h = Array("janvier", "f�vrier", "mars", "avril", "mai", "juin",
					"juillet", "ao�t", "septembre", "octobre", "novembre", "d�cembre");
$Mois_Abr = Array( 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN','JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC' );
$Jours_Lib = Array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');

define('LG_SEMIC', '&nbsp;:&nbsp;');
$LG_tip = 'Conseil';
define('LG_TIP', 'Conseil');
$LG_help = 'Aide';
$LG_star = '�toile';
$LG_and = 'et';
$LG_at = '�';
define('LG_AT' ,'�');
$LG_here = 'ici';
$LG_add = 'Ajouter';
$LG_modify = 'Modifier';
$LG_last_pers = 'Derni�re personne saisie';
$LG_add_pers = 'Ajouter une personne';
$LG_printable_format = 'Format imprimable';
$LG_pdf_format = 'Format PDF';
$LG_csv_export = 'Export CSV';
$LG_csv_import = 'Import CSV';
$LG_gedcom_export = 'Export gedcom';
$LG_top = 'Haut de la page';
$LG_noshow_on_internet = 'Pas de visibilit� Internet';
$LG_show_on_internet = 'Visibilit� Internet';
$LG_checked_record = 'Fiche valid�e';
define('LG_CHECKED_RECORD_SHORT', 'Valid�e');
$LG_nochecked_record = 'Fiche non valid�e';
define('LG_NOCHECKED_RECORD_SHORT','Non valid�e');
$LG_record = 'Fiche';
define('LG_RECORD', 'Fiche');
define('LG_FROM_INTERNET', 'Source Internet');
$LG_show_noshow = 'Afficher / masquer';
$LG_Data_noavailable_profile = 'Donn�es non disponibles pour votre profil';
$LG_function_noavailable_profile = 'Fonctionnalit� non disponible pour votre profil';
$LG_modify_list = 'Modifier la liste';
$LG_Sosa_Number = 'Num�ro Sosa';
$LG_person = 'Personne';
$LG_birth = 'Naissance';
$LG_born = 'n�';
$LG_death = 'D�c�s';
$LG_dead = 'd�c�d�';
$LG_wedding = 'Mariage';
define('LG_COUNTY' ,'D�partement');

define('LG_SEXE', 'Sexe');
define('LG_SEXE_MAN', 'Homme');
define('LG_SEXE_WOMAN', 'Femme');
define('LG_SEXE_MAN_I', 'H');
define('LG_SEXE_WOMAN_I', 'F');

define('LG_PERS_OCCU', 'Profession');
	
$LG_with = 'avec';
$LG_csv_available_in = "L'export CSV est disponible dans le fichier";
$LG_show_comment = 'Visualiser la note';
$LG_back_to_home = 'Retour � l\'accueil';
$LG_desc_tree = 'Arbre descendant';
$LG_assc_tree = 'Arbre ascendant';
$LG_quick_adding = 'Ajout rapide';
$LG_Yes = 'oui';
$LG_No = 'non';
$LG_Simu_No_Granted = 'Simulation acc�s invit�';
define('LG_CHILD', 'enfant');
define('LG_SON', 'fils');
define('LG_DAUGHTER', 'fille');
define('LG_HUSB_WIFE', 'conjoint');
define('LG_BROTHER_SISTER', 'fr�re / soeur');
define('LG_PARENTS', 'parents');
$LG_Place_Select = 'S�lection d\'une zone';
$LG_Requested_File = 'Fichier demand�';
$LG_Default_Status = 'Statut par d�faut des fiches';
$LG_Event = '�v�nement';
$LG_LPers_Check_Pers = 'Contr�le de la personne';
define('LG_FATHER', 'P�re');
define('LG_MOTHER', 'M�re');
$LG_of = 'de';
$LG_andof = 'et';
$LG_name_pers = 'personnes portant ce nom';
$LG_Name = 'Nom';
define('LG_PERS_SURNAME', 'Surnom');
$LG_Reference = 'R�f�rence';
$LG_Image = 'Image';
define('LG_NAME_TO_UPCASE','Mettre le nom en majuscules');
define('LG_ADD_NAME','Ajouter un nom');

$LG_Month = 'Mois';
$LG_All = 'Tous';
define('LG_TARGET_OBJECT', 'Objet cible');
define('LG_TARGET_OBJECT_PERS' ,'Personne');
define('LG_TARGET_OBJECT_UNION' ,'Union');
define('LG_TARGET_OBJECT_FILIATION' ,'Filiation');
define('LG_TARGET_OBJECT_OTHER' ,'Autre');
$LG_Comment = 'commentaire';
define('LG_CH_COMMENT', 'commentaire');
define('LG_CH_COMMENT_VISIBILITY', 'Visibilit� Internet du commentaire');
define('LG_CH_IMAGE_MAGNIFY', "Cliquez sur l'image pour l'agrandir");
define('LG_FFAM_CHRONOLOGIE', 'Chronologie');
$LG_Ch_Output_Format = 'Format de sortie';
$LG_Ch_Output_Screen ='�cran';
$LG_Ch_Output_Text ='texte';
$LG_Ch_Output_CSV ='CSV';
$LG_Chronology = 'Chronologie';
$LG_7_Gens = '7 g�n�rations';
$LG_Add_Existing_Event = 'Ajouter un �v�nement existant';
$LG_Add_Event = 'Ajouter un �v�nement';
$LG_Add_Event_Mult_Quick = 'Ajout rapide d\'�v�nements de type multiple';
$LG_Add_Event_Quick = 'Ajout rapide d\'�v�nements';
$LG_Del_Event = 'Supprimer le derni�r �v�nement';

define('LG_ADD_TOWN', 'Ajout d\'une ville');
define('LG_ADD_TOWN_LIST', 'Ville � ajouter aux listes');


$LG_csv_file_upload = 'Fichier CSV � t�l�charger';
$LG_csv_header = 'Ligne d\'ent�te dans le fichier';

$LG_update_link = 'Modification de la liaison';
$LG_this_link = 'ce lien';
$LG_see_document ='Voir le document';
$LG_html_file = 'Fichier HTML';
$LG_image_file = 'Fichier image';
$LG_pdf_file = 'Fichier PDF';
$LG_text_file = 'Fichier texte';
$LG_audio_file = 'Fichier audio';
$LG_video_file = 'Fichier vid�o';
$LG_display_list = 'Afficher la liste';

$LG_first = '1er';
$LG_year['abt'] = 'environ';
$LG_year['ca'] = 'ca';
$LG_year['on'] = 'en';
$LG_year['bf'] = 'avant';
$LG_year['af'] = 'apr�s';
$LG_day['ca'] = 'ca';
$LG_day['on'] = 'le';
$LG_day['bf'] = 'avant le';
$LG_day['af'] = 'apr�s le';

// Boutons
$lib_OK = 'OK';
$lib_Okay = 'Valider';
$lib_Annuler = 'Annuler';
$lib_Retour = 'Retour...';
$lib_Rechercher = 'Rechercher';
$lib_Rectifier = 'Rectifier';
$lib_Supprimer = 'Supprimer';
$lib_Deconnecter = 'Se d�connecter';
$lib_Connecter = 'Se connecter';
$lib_Calculer = 'Calculer';
$lib_Nouv_Rech = 'Nouvelle recherche';
$lib_Nouv_Rech_Aff = 'Affiner la recherche';
$lib_Erase ='Effacer';
$LG_Check_Again = 'Rev�rifier';
$lib_Afficher = 'Afficher';

define('LG_CH_DATA_TAB', 'Donn�es g�n�rales');
define('LG_CH_DOCS', 'Documents');
define('LG_CH_FILE', 'Fiche');
$LG_Data_tab = 'Donn�es g�n�rales';
define('LG_DATA_TAB', 'Donn�es g�n�rales');
$LG_File = 'Fiche';
define('LG_CALL_OPENSTREETMAP', 'Appelle la carte OpenStreetMap avec les coordonn�es g�ographiques');
$LG_Show_On_Map = 'Situe la ville sur une carte OpenStreetMap';
define('LG_TIP_OPENSTREETMAP', 'Les coordonn�es permettent de situer une zone sur les cartes libres ');


// Titres des pages
if (!is_info()) {
	$LG_Menu_Title['Rect_Utf']					= 'Rectification des caract�res UTF-8 en base';
	$LG_Menu_Title['Link_Ev_Pers']				= 'Edition d\'un lien �v�nement-personne';
	$LG_Menu_Title['Link_Pers']					= 'Lier deux personnes';
	$LG_Menu_Title['Find_Doc']					= 'Recherche de document';
	$LG_Menu_Title['Subdiv']					= 'Fiche d\'une subdivision';
	$LG_Menu_Title['Subdiv_Edit']				= 'Modification d\'une subdivision';
	$LG_Menu_Title['Subdiv_Add']				= 'Ajout d\'une subdivision';
	$LG_Menu_Title['Town']						= 'Fiche d\'une ville';
	$LG_Menu_Title['Town_Edit']					= 'Modification d\'une ville';
	$LG_Menu_Title['Town_Add']					= 'Ajout d\'une ville';
	$LG_Menu_Title['County_Edit']				= 'Modification d\'un d�partement';
	$LG_Menu_Title['County_Add']				= 'Ajout d\'un d�partement';
	$LG_Menu_Title['Person_Add']				= 'Ajout d\'une personne';
	$LG_Menu_Title['Person_Modify']				= 'Modification d\'une personne';
	$LG_Menu_Title['Event_Add']					= 'Ajout d\'un �v�nement';
	$LG_Menu_Title['Name_Is_Complete']			= 'Compl�tude des informations des ';
	$LG_Menu_Title['Gen_Is_Complete']			= 'Compl�tude des personnes par g�n�ration';
	$LG_Menu_Title['Names_For_Event']			= 'Liste des noms pour un �v�nement';
	$LG_Menu_Title['Delete_Sosa']				= 'Supprimer les num�ros sosa';
	$LG_Menu_Title['Site_parameters']			= 'Param�tres g�n�raux du site';
	$LG_Menu_Title['Name'] 						= 'Fiche d\'un nom de famille';
	$LG_Menu_Title['Name_Edit'] 				= 'Modification d\'un nom de famille';
	$LG_Menu_Title['Name_Add'] 					= 'Ajout d\'un nom de famille';
	$LG_Menu_Title['Document_Multiple_Add']		= 'Ajout multiple de documents';
	$LG_Menu_Title['Check_Pers']				= 'Contr�le des personnes';
	$LG_Menu_Title['Convert_Roman_To_Arabic']	= 'Convertisseur de nombres romains - arabes';
	$LG_Menu_Title['Category']					= 'Fiche d\'une cat�gorie';
	$LG_Menu_Title['Category_Edit']				= 'Edition d\'une cat�gorie';
	$LG_Menu_Title['First_Wedding']				= 'Age de premier mariage pour la p�riode de naissance';
	$LG_Menu_Title['Namesake_Cheking']			= 'V�rification des homonymes';
	$LG_Menu_Title['Internet_Cheking']			= 'V�rification des visibilit�s Internet';
	$LG_Menu_Title['Internet_Hidding_Cheking']	= 'V�rification des visibilit�s Internet restreintes';
	$LG_Menu_Title['Documents_List']			= 'Liste des documents';
	$LG_Menu_Title['Document']					= 'Fiche d\'un document';
	$LG_Menu_Title['Document_Edit']				= 'Modification d\'une fiche document';
	$LG_Menu_Title['Document_Add']				= 'Cr�ation d\'une fiche document';
	$LG_Menu_Title['Document_Utils']			= 'Utilisation(s) du document';
	$LG_Menu_Title['Request']					= 'Fiche d\'une requ�te';
	$LG_Menu_Title['Request_Edit']				= 'Modification d\'une requ�te';
	$LG_Menu_Title['Pers_Uncles']				= 'Oncles et tantes';
	$LG_Menu_Title['Pers_Cousins']				= 'Cousins et cousines';
	$LG_Menu_Title['Pers_Gen']					= 'Liste par g�n�ration';
	$LG_Menu_Title['Calculate_Distance']		= 'Calcul de distance � vol d\'oiseau';
	$LG_Menu_Title['Death_Age']					= 'Pyramide des �ges au d�c�s';
	$LG_BDM_Per									= 'Naissances, mariages et d�c�s par ';
	$LG_Menu_Title['BDM_Per_Month']				= $LG_BDM_Per.'mois';
	$LG_Menu_Title['BDM_Per_Town']				= $LG_BDM_Per.'ville';
	$LG_Menu_Title['BDM_Per_Depart']			= $LG_BDM_Per.'d�partement';
	$LG_Histo									= 'Historique de l\'�ge au ';
	$LG_Menu_Title['Histo_Death']				= $LG_Histo.'d�c�s';
	$LG_Menu_Title['Histo_First_Wedding']		= $LG_Histo.'premier mariage';
	$LG_Menu_Title['Histo_First_Child']			= $LG_Histo.'premier enfant';
	$LG_Menu_Title['Children_Per_Mother']		= 'Historique des enfants par femme';
	$LG_Menu_Title['Statistics'] 				= 'Statistiques de la base';
	$LG_Menu_Title['Last_Mod_Pers'] 			= 'Liste des derni�res personnes modifi�es';
	$LG_Menu_Title['Most_Used_Names'] 			= 'Noms les plus port�s';
	$LG_Menu_Title['Most_Used_jobs'] 			= 'Professions les plus exerc�es';
	$LG_Menu_Title['Connections'] 				= 'Liste des connexions';
	$LG_Menu_Title['Links'] 					= 'Liste des liens';
	$LG_Menu_Title['Living_Pers'] 				= 'Liste par nom des personnes vivantes';
	$LG_Menu_Title['Search_Related'] 			= 'Recherche de parent�';
	$LG_Menu_Title['Search_Comment'] 			= 'Recherche dans les commentaires';
	$LG_Menu_Title['Galery'] 					= 'Galerie de documents images';
	$LG_Menu_Title['Galery_Branch'] 			= 'Galerie de documents images par branche';
	$LG_Menu_Title['Compare_Persons'] 			= 'Comparaison de 2 personnes';
	$LG_Menu_Title['Decujus_And_Family'] 		= 'Saisie du de cujus et de son noyau familial';
	$LG_Menu_Title['Archive_Preparation'] 		= 'Pr�paration de recherche aux archives';
	$LG_Menu_Title['Rank_Edit'] 				= 'Edition des rangs';
	$LG_Menu_Title['Name_Not_Used'] 			= 'Noms non utilis�s';
	$LG_Menu_Title['Tables_Admin']				= 'Administration des tables';
	$LG_Menu_Title['Calc_Sosa']					= 'Calculatrice Sosa';
	$LG_Menu_Title['Direct_Desc']				= 'Descendance directe';
	$LG_Menu_Title['Event']						= 'Fiche d\'un �v�nement';
	$LG_Menu_Title['Event_Edit']				= 'Modification d\'un �v�nement';
	$LG_Menu_Title['Event_Add']					= 'Ajout d\'un �v�nement';
	$LG_Menu_Title['New']						= 'Fiche d\'une actualit�';
	$LG_Menu_Title['New_Edit']					= 'Modification d\'une actualit�';
	$LG_Menu_Title['New_Add']					= 'Ajout d\'une actualit�';
	$LG_Menu_Title['Link']						= 'Fiche d\'un lien';
	$LG_Menu_Title['Link_Edit']					= 'Modification d\'un lien';
	$LG_Menu_Title['Link_Add']					= 'Ajout d\'un lien';
	$LG_Menu_Title['Alt_Name']					= 'Nom secondaire d\'une personne';
	$LG_Menu_Title['Role']						= 'Fiche d\'un r�le';
	$LG_Menu_Title['Role_Edit']					= 'Modification d\'un r�le';
	$LG_Menu_Title['Role_Add']					= 'Cr�ation d\'un r�le';	
	$LG_Menu_Title['Event_Type']				= 'Fiche d\'un type d\'�v�nement';
	$LG_Menu_Title['Event_Type_Edit']			= 'Modification d\'un type de document';
	$LG_Menu_Title['Event_Type_Add']			= 'Cr�ation d\'un type de document';
	$LG_Menu_Title['Doc_Type']					= 'Fiche d\'un type de document';
	$LG_Menu_Title['Doc_Type_Edit']				= 'Modification d\'un type de document';
	$LG_Menu_Title['Doc_Type_Add']				= 'Cr�ation d\'un type de document';
	$LG_Menu_Title['Repo_Sources'] 				= 'Fiche d\'un d�p�t de sources';
	$LG_Menu_Title['Repo_Sources_Edit'] 		= 'Cr�ation d\'un d�p�t de sources';
	$LG_Menu_Title['Repo_Sources_Add'] 			= 'Modification d\'un d�p�t de sources';
	$LG_Menu_Title['Source'] 					= 'Fiche d\'une source';
	$LG_Menu_Title['Source_Add'] 				= 'Cr�ation d\'une source';
	$LG_Menu_Title['Source_Edit'] 				= 'Modification d\'une source';
	$LG_Menu_Title['Source_List'] 				= 'Liste des sources';
	$LG_Menu_Title['User'] 						= 'Fiche d\'un utilisateur';
	$LG_Menu_Title['User_Add'] 					= 'Cr�ation d\'un utilisateur';
	$LG_Menu_Title['User_Edit'] 				= 'Modification d\'un utilisateur';
	$LG_Menu_Title['Users_List'] 				= 'Liste des utilisateurs';
	$LG_Menu_Title['exp_GenWeb'] 				= 'Export cousins GenWeb';
	$LG_Menu_Title['Sch_Pers'] 					= 'Recherche de personnes';
	$LG_Menu_Title['Image_List'] 				= 'Liste des images';
	$LG_Menu_Title['Custom_View'] 				= 'Vue personnalis�e';
	$LG_Menu_Title['Check_Sosa'] 				= 'V�rification de la num�rotation sosa';
	$LG_Menu_Title['Pers_Tree'] 				= "Affichage d''un arbre personnalis�";
	$LG_Menu_Title['Town_Search'] 				= 'Recherche de villes';
	$LG_Menu_Title['Non_Linked_Pers'] 			= 'Liste des personnes isol�es';
	$LG_Menu_Title['Names_List'] 				= 'Liste des noms de famille';
	$LG_Menu_Title['Patronymic_List'] 			= 'Liste patronymique';
	$LG_Menu_Title['Event_List']				= 'Liste des �v�nements';
	$LG_Menu_Title['News_List']					= 'Liste des actualit�s';
	$LG_Menu_Title['Jobs_List']					= 'Liste des professions';
	$LG_Menu_Title['County_List']				= 'Liste �clair';
	$LG_Menu_Title['Contribs_List']				= 'Liste des contributions';
	$LG_Menu_Title['Tech_Info']					= 'Informations techniques';
	$LG_Menu_Title['Imp_CSV_Links']				= 'Import CSV de liens (tableur)';
	$LG_Menu_Title['Imp_CSV_Events']			= "Import CSV d'�v�nements (tableur)";
	$LG_Menu_Title['Imp_CSV_Towns']				= 'Import CSV de villes (tableur)';
	$LG_Menu_Title['Exp_Ged_Pers']				= 'Export Gedcom personne';
	$LG_Menu_Title['Exp_Ged']					= 'Export Gedcom';
	$LG_Menu_Title['Exp_Ged_Light']				= 'Export Gedcom "l�ger"';
	$LG_Menu_Title['Indiv_Text_Report']			= 'Fiche individuelle format texte';
	$LG_Menu_Title['Nuclear_Family']			= 'Noyau familial';
	$LG_Menu_Title['Event_Merging']				= "Fusion d'�v�nements";
	$LG_Menu_Title['Init_Names']				= 'Identifiants manquants pour les noms de famille';
	$LG_Menu_Title['Check_Pers']				= "Contr�le d'une personne";
	$LG_Menu_Title['Start']						= 'Premiers pas en g�n�alogie';
	$LG_Menu_Title['Glossary']					= 'Glossaire de g�n�alogie';
	$LG_Menu_Title['Sosa']						= 'Num�rotation Sosa';
	$LG_Menu_Title['Import_Backup']				= "Import d'une sauvegarde";
	$LG_Menu_Title['Import_Docs']				= "Import de documents et d'images";
}
?>