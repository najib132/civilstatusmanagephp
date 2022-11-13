/************************
Contenu du fichier selection.js
*************************/
var select = 0;
var temp;

// colore la ligne en transparent

// colore la ligne en transparent si elle est rouge
// remet en transparent la ligne selectionn&eacute;e precedement et colore celle si en rouge si differente
// indique qu'une ligne est selectionn&eacute;e en mettant le parametre select a 1
function selec(ligne)
{
			ligne.style.background='green';
			temp=ligne;
		}
	
function trans(ligne)
{
			ligne.style.background='transparent';
			temp=ligne;
		}

