
/* ---------------Code for submit information to a database PHP---------------*/
var submit = document.getElementById("principal");
var formulario1 = document.getElementById("formulario1");
var formulario2 = document.getElementById("formulario2");
var inputForm1 = formulario1.getElementsByTagName("input");
var inputForm2 = formulario2.getElementsByTagName("input");
var notasQ1 = [];
var notasQ2 = [];
/*------Determinar si es un numero------------*/
var estilos = function(){
	var numLength = this.value.length;
	console.log ("Hola");
	if(this.value == ''){
		this.setAttribute("class", "error");
		return false;
	}
	else if(isNaN(this.value)){
		this.setAttribute("class", "error");
		return false;
	}
	else if (Number(this.value)<0 || Number(this.value)>10){
		this.setAttribute("class", "error");
		return false;
	}
	else if(numLength>5){
		this.setAttribute("class", "error");
		return false;
	}
	else{
		this.setAttribute("class", "notas");
	}
}
/*-------AGREGAR EVENTS A CADA INPUT-------------*/
function agregarEventsNotas(){
	var i;
	for(i=0;i<inputForm1.length;i++){
		
		inputForm1[i].addEventListener("change",estilos);
	};
	for(i=0;i<inputForm2.length;i++){
		inputForm2[i].addEventListener("change",estilos);
	};
}
/*-----------------------------------------------*/
agregarEventsNotas();


/*--------LEER SI TODAS LAS ENTRADAS ESTAN LLENAS-----*/
var valForm1 = function(e){
	var i;
	for(i=0;i<inputForm1.length;i++){
		if(inputForm1[i].value == '' || isNaN(inputForm1[i].value) == NaN || Number(inputForm1[i].value)<0 || Number(inputForm1[i].value)>10 || inputForm1[i].value.lenght>4){
			inputForm1[i].setAttribute("placeholder", "Complete el campo");
			e.preventDefault();
		}
		else{
			/*-----------ALMACENAR EN UNA ARRAY LOS DATOS -----*/
			notasQ1[i] = Number(inputForm1[i].value);
		}
	}
}
var valForm2 = function(e){
	var i;
	for(i=0;i<inputForm2.length;i++){
		if(inputForm2[i].value == '' || isNaN(inputForm1[i].value) == true || Number(inputForm1[i].value)<0 || Number(inputForm1[i].value)>10 || inputForm1[i].value.lenght>4){
			inputForm2[i].setAttribute("placeholder", "Complete el campo");
			e.preventDefault();
		}
		else{
			/*-----------ALMACENAR EN UNA ARRAY LOS DATOS -----*/
			notasQ2[i] = Number(inputForm2[i].value);
		}
	}
}
var validar = function(e){
	valForm1(e);
	valForm2(e);
	console.log(notasQ1[0]); // BORRAR!!!

}
submit.addEventListener("submit",validar);









