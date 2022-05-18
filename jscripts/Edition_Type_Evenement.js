
// Javascript sp�cialis� pour l'�dition de type d'�v�nement



function verification_code(zone) {
	var codes = document.forms.saisie.codes.value;
	var posi  = codes.indexOf(zone.value);
	if (posi > -1) {
		window.alert('Attention, code d�j� utilis� (codes pr�sents :'+codes+').');
		zone.value = '';
	}

}

