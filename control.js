function control(){
	//nombre
	var n;
	n = document.getElementById("numero").value;
    if (n === ""){
		alert("[ERROR]Tiene que ingresar un valor en binario");
		document.getElementById("numero").focus();
		return false;
	}
}

function numeros(){
    var valor,expresion;
	expresion = /^([0-1])*$/; //Expresión regular admite solo números entre 0 y 1
    valor=document.getElementById("numero").value;
	if(!expresion.test(valor)){
		alert("Solo se admiten 1 y 0 (unos y ceros)");
		document.getElementById("numero").value ="";
		document.getElementById("numero").focus();
		
		
		return false;
			
		
	   }
    
    
    
}
