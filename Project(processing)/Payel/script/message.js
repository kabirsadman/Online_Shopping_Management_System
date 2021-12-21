
"use strict"

function f1(){
	let element = document.getElementById('text');
	//alert(element.value);
	//document.getElementById('head1').innerHTML = element.value;
	document.getElementById('1').innerHTML= document.getElementById('text').value;
	//document.getElementById('name').value ="";

} 


function validate(){
	let text = document.getElementById('text').value;
	if(text == ""){
		document.getElementById('1').innerHTML = "Not Send!";
	}else{
		document.getElementById('1').innerHTML = "Send";
	}
}


function ajax(){
	let text = document.getElementById('text').value;
	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', 'message.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('text='+text);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('1').innerHTML = this.responseText;
		}
	}
} 