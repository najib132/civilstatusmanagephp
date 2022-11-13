function getXhr(){
	var xhr = null;
	if(window.XMLHttpRequest) // Firefox et autres
	xhr = new XMLHttpRequest();
	else if(window.ActiveXObject){ // Internet Explorer
		try {
			xhr = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	else { // XMLHttpRequest non support&eacute; par le navigateur
		alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
		xhr = false;
	}
	return xhr;
}

/**************************************************************FCT DEPARTEMENT*************************/
							
//Retourne la liste des d&eacute;partements d'une r&eacute;gion
function getjugement(){
	var xhr = getXhr();
	// On d&eacute;fini ce qu'on va faire quand on aura la r&eacute;ponse
	xhr.onreadystatechange = function(){
		// On ne fait quelque chose que si on a tout re&ccedil;u et que le serveur est ok
		if(xhr.readyState == 4 && xhr.status == 200){
			leselect1 = xhr.responseText;
			// On se sert de innerHTML pour rajouter les options a la liste
			
			document.getElementById('champsjugement').innerHTML = leselect1;
			
		}
	}
	
//document.getElementById('champsjugement').innerHTML=document.write('<IMG SRC="' + ../patienter.gif + '" ')

				document.getElementById('champsjugement').innerHTML="Patienter...";

	// Ici on va voir comment faire du post
	xhr.open("POST","ajax_delait.php",true);
	// ne pas oublier &ccedil;a pour le post
	xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	sel = document.getElementById('type_jugement');
	idtype_jugement = sel.options[sel.selectedIndex].value;
	xhr.send("idtype_jugement="+idtype_jugement);
}

//Retourne la liste des villes d'un d&eacute;partement
function getVille(){
	var xhr = getXhr(); 	var xhr = getXhr();

	// On d&eacute;fini ce qu'on va faire quand on aura la r&eacute;ponse
	xhr.onreadystatechange = function(){
		// On ne fait quelque chose que si on a tout re&ccedil;u et que le serveur est ok
		if(xhr.readyState == 4 && xhr.status == 200){
			leselect = xhr.responseText;
			// On se sert de innerHTML pour rajouter les options a la liste
			
			document.getElementById('champsVille').innerHTML = leselect;
			
			
		}
	}
	
				document.getElementById('champsVille').innerHTML="Patienter...";


	// Ici on va voir comment faire du post
	xhr.open("POST","ajax.ville.php",true);
	// ne pas oublier &ccedil;a pour le post
	xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	sel = document.getElementById('dpt');
	idDpt = sel.options[sel.selectedIndex].value;
	xhr.send("idDpt="+idDpt);




}