//Fonction : Clavier Arabe
var id_input;
function alpha(item) { 
	var input = document.getElementById(id_input);
		 if (document.selection) { 
          input.focus();
			range = document.selection.createRange() ;
			range.text = item ;
          range.select(); 
		}
		else if (input.selectionStart || input.selectionStart == '0') {
		var startPos = input.selectionStart;
		var endPos = input.selectionEnd;
		var cursorPos = startPos;
		var scrollTop = input.scrollTop;
		var baselength = 0;
		input.value = input.value.substring(0, startPos)
          + item
          + input.value.substring(endPos, input.value.length);
		cursorPos += item.length;
		input.focus();
		input.selectionStart = cursorPos;
		input.selectionEnd = cursorPos;
		input.scrollTop = scrollTop;
		}
	else {
		input.value += item;
		input.focus();
	}
}

function doNotWork() {	
	document.getElementById("background").style.display = "none";
	document.getElementById("clv_arb").style.display = "none";
	return false;
}

function doWork(F) {
	var toInput = document.getElementById(F.textArea.value);
	var ll = 50;
	if (F.textContent.value.length < 50)
		ll = F.textContent.value.length;
		toInput.value = F.textContent.value.substring(0, ll);
	
	return doNotWork();
}

function showArabicKey(mitem){
	id_input = "textContent";
	var input = document.getElementById(mitem);
	var content = "";
	if (true){ //style='border:1px solid #000000'>"
		content = 
			"<form action='#' onsubmit='return false;'>" 
				+"<input type='hidden' name='textArea' value='" + mitem + "' />"
				+"<table width='100%' height='100%'>"
				+"<tr><td valign='middle'>"
				+"<table width='50%' align='center' style='border:3px #009900 double' bgcolor='#FFFFFF'>"
					+"<tr>"
						+"<td width='24'><input type='button' class='bt' value='X' onclick='doNotWork()' /></td>"
						+"<td>&nbsp;</td>"
					+"</tr>"
				+"	<tr>"
				+"		<td colspan='2' align='center'><input type='text' name='textContent' id='textContent' maxlength='150' size='100' dir='rtl' /></td>"
				+"	</tr>"
				+"	<tr>"
				+"		<td colspan='2'>"
							+"<table width='80%' cellpadding='0' cellspacing='0' align='center'>" 
							+"<tr align='center'>"
							+"<td><input width='100%' type='button' value='??' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='btb'></td>"
						  +"</tr>"
						  +"<tr height='2' align='center'>"
						  +"<td></td>"
						  +"</tr>"
						  +"<tr align='center'> "
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='btb'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"</tr>"
						  +"<tr height='2' align='center'>"
						  +"<td></td>"
						  +"</tr>"
						  +"<tr align='center'>"

						   +"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='btb'></td>"
						  +"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
						  +"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
						  +"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
						  +"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
						  +"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='btb'></td>"
						   +"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ?? ' onclick='alpha(&#39;??&#39;)' class='bt'></td>" 
						  +"</tr>"
						  +"</table>"
				+ "</td>"
			+"	</tr>"
			+"	<tr>"
			+"		<td colspan='2' align='center'><input type='button' value='Valider' onclick='doWork( this.form )' /></td>"
			+"	</tr>"
			+"</table>"
			+"</td></tr></table>"
		+"</form>";
	}
	input.dir="rtl";
	
	var div = document.getElementById("clv_arb");
	//var model = document.getElementById("model").innerHTML;
	
	//var reg=new RegExp("([CONTENT_DIV])", "g");
	//model = model.replace("[CONTENT_DIV]", content);
	//alert(model);
	div.innerHTML = content;
	
	document.getElementById("background").style.display = "";
	div.style.display = "";
	
	//showHideBloc(div);
	//hdiv.style.display = "none";
}