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
							+"<td><input width='100%' type='button' value='ض' onclick='alpha(&#39;ض&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ز ' onclick='alpha(&#39;ز&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ر ' onclick='alpha(&#39;ر&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ذ ' onclick='alpha(&#39;ذ&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' د ' onclick='alpha(&#39;د&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' خ ' onclick='alpha(&#39;خ&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ح ' onclick='alpha(&#39;ح&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ج ' onclick='alpha(&#39;ج&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ث ' onclick='alpha(&#39;ث&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ت ' onclick='alpha(&#39;ت&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' پ ' onclick='alpha(&#39;پ&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ب ' onclick='alpha(&#39;ب&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ا ' onclick='alpha(&#39;ا&#39;)' class='btb'></td>"
						  +"</tr>"
						  +"<tr height='2' align='center'>"
						  +"<td></td>"
						  +"</tr>"
						  +"<tr align='center'> "
							+"<td><input type='button' value=' م ' onclick='alpha(&#39;م&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ل ' onclick='alpha(&#39;ل&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ك ' onclick='alpha(&#39;ك&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ݣ ' onclick='alpha(&#39;ݣ&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ق ' onclick='alpha(&#39;ق&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ف ' onclick='alpha(&#39;ف&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' غ ' onclick='alpha(&#39;غ&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ع ' onclick='alpha(&#39;ع&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ظ ' onclick='alpha(&#39;ظ&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ط ' onclick='alpha(&#39;ط&#39;)' class='btb'></td>"
							+"<td><input type='button' value=' ص ' onclick='alpha(&#39;ص&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ش ' onclick='alpha(&#39;ش&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' س ' onclick='alpha(&#39;س&#39;)' class='bt'></td>"
							+"</tr>"
						  +"<tr height='2' align='center'>"
						  +"<td></td>"
						  +"</tr>"
						  +"<tr align='center'>"

						   +"<td><input type='button' value=' ى ' onclick='alpha(&#39;ى&#39;)' class='btb'></td>"
						  +"<td><input type='button' value=' ئ ' onclick='alpha(&#39;ئ&#39;)' class='bt'></td>"
						  +"<td><input type='button' value=' ؤ ' onclick='alpha(&#39;ؤ&#39;)' class='bt'></td>"
						  +"<td><input type='button' value=' ة ' onclick='alpha(&#39;ة&#39;)' class='bt'></td>"
						  +"<td><input type='button' value=' إ ' onclick='alpha(&#39;إ&#39;)' class='bt'></td>"
						  +"<td><input type='button' value=' أ ' onclick='alpha(&#39;أ&#39;)' class='btb'></td>"
						   +"<td><input type='button' value=' آ ' onclick='alpha(&#39;آ&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ء ' onclick='alpha(&#39;ء&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ي ' onclick='alpha(&#39;ي&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' و ' onclick='alpha(&#39;و&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ه ' onclick='alpha(&#39;ه&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ڨ ' onclick='alpha(&#39;ڨ&#39;)' class='bt'></td>"
							+"<td><input type='button' value=' ن ' onclick='alpha(&#39;ن&#39;)' class='bt'></td>" 
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