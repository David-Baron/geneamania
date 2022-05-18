
// Javascript sp�cialis� pour l'�dition de r�le


function dupplique() {
	if (document.forms.saisie.LibelleInvF.value == "") {
		document.forms.saisie.LibelleInvF.value = document.forms.saisie.LibelleF.value;
	}
}

function verification_code(zone) {
	var codes = document.forms.saisie.codes.value;
	var posi  = codes.indexOf(zone.value);
	if (posi > -1) {
		window.alert('Attention, code d�j� utilis� (codes pr�sents :'+codes+').');
		zone.value = '';
	}

}

