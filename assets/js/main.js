
function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}

function comentario(){
	var contenido;

	contenido=document.getElementById('contenido').value;

	if(contenido==""){
		alert("No hay nada en el comentario");
		document.getElementById('contenido').focus();
		return false;
	}else if(contenido.length>300){
			alert("Solo se permiten 300 caracteres en el comentario");
			document.getElementById('comentario').focus();
			return false;
		}
}

function seguridad(){

	var nickname;
	var correoElectronico;
	var contrasenia;
	var expresionC;
	var expresionN;
	expresionC=/\w+@\w+\.+[a-z]/;


	nickname=document.getElementById('nickname').value;
	correoElectronico=document.getElementById('correoElectronico').value;
	contrasenia=document.getElementById('contrasenia').value;

	if(nickname==""){
		alert("Falta ingresar nickname");
		document.getElementById('nickname').focus();
		document.getElementById('nickname').style.background="pink";
		return false;

	}else{
		if (correoElectronico=="") {
			alert("Falta ingresar el correo electrónico");
			document.getElementById('correoElectronico').focus();
			document.getElementById('correoElectronico').style.background="pink";
			document.getElementById('nickname').style.background="white";
			return false;
		}else if (contrasenia=="") {
			alert("Falta ingresar una contrasenia");
			document.getElementById('contrasenia').focus();
			document.getElementById('contrasenia').style.background="pink";
			document.getElementById('correoElectronico').style.background="white";
			return false;
		}else if (nickname.length>25) {
			alert("Solo se permiten 25 caracteres en nickname");
			document.getElementById('nickname').focus();
			return false;
		}else if(correoElectronico.length>60){
			alert("Solo se permiten 60 caracteres en el correo");
			document.getElementById('correoElectronico').focus();
			return false;
		}else if(contrasenia.length>15){
			alert("Solo se permiten 15 caracteres en la contraseña");
			document.getElementById('contrasenia').focus();
			return false;
		}else if(contrasenia.length<8){
			alert("La contraseña debe de ser mayor a 8 caracteres");
			document.getElementById('contrasenia').focus();
			return false;
		}else if(!expresionC.test(correoElectronico)){
			alert("Correo inválido");
			return false;

		}
	}

}

	function seguridadPublicacion(){

	var titulo;
	var sinopsis;
	var contenido;
	


	titulo=document.getElementById('titulo').value;
	sinopsis=document.getElementById('sinopsis').value;
	contenido=document.getElementById('contenido').value;

	if(titulo==""){
		alert("Falta ingresar un titulo");
		document.getElementById('titulo').focus();
		document.getElementById('titulo').style.background="pink";
		return false;

	}else{
		if (sinopsis=="") {
			alert("Falta ingresar la sinopsis");
			document.getElementById('sinopsis').focus();
			document.getElementById('sinopsis').style.background="pink";
			document.getElementById('titulo').style.background="white";
			return false;
		}else if (contenido=="") {
			alert("Falta ingresar contenido");
			document.getElementById('contenido').focus();
			document.getElementById('contenido').style.background="pink";
			document.getElementById('sinopsis').style.background="white";
			return false;
		}else if (titulo.length>50) {
			alert("Solo se permiten 50 caracteres en titulo");
			document.getElementById('titulo').focus();
			return false;
		}else if(sinopsis.length>300){
			alert("Solo se permiten 300 caracteres en la sinopsis");
			document.getElementById('sinopsis').focus();
			return false;
		}else if(contenido.length>100000){
			alert("Solo se permiten 100000 caracteres en el contenido");
			document.getElementById('contenido').focus();
			return false;
		}
	}
}