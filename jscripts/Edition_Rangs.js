
// Javascript sp�cialis� pour l'�dition des rangs d'une union

// Accepter les rangs th�oriques calcul�s par le programme 
function Accepter(theElement) {
  for (var i = 0; i < document.forms["saisie"].length; i++) {
    LeNom = document.forms["saisie"].elements[i].name.substring(0,6);
    if (LeNom == "Calcul") {
      Reprise = document.forms["saisie"].elements[i].value;
    }
    if (LeNom == "LeRang") {
      document.forms["saisie"].elements[i].value = Reprise;
    }
  }
}
