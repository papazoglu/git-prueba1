<!DOCTYPE html>
<html>
<head>
	<title>Trabajo Práctico Nro1</title>
	<script src="control.js"></script>
	
	<link rel="stylesheet" type="text/css" href="tp1.css">
	<meta charset="utf-8">
</head>
<body>
	<form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" onsubmit="return control();">
		<h1 class="formtitulo">Ingrese un número</h1>
		<h2>Convierte un binario a hexadecimal y decimal</h2>
		Numero: <input type="text" id="numero" name="numero" maxlength="9" onkeyup="return numeros();">
		<br><br>
		<input id="boton" type="submit" value="Calcular" name="Enviar">
	</form>
<br>
 

	<?php
		if(isset($_POST['Enviar'])){
			$vector;
			$cont=0;
			$n=$_POST['numero'];
			echo "<h2 id='numeroingresado'>El número ingresado es: {$n}</h2>";
			echo "<br>";	
            $longitud=strlen($n);
            echo "<h2 class='resultado'>En decimal: ".$decimal=bindec($n)."</h2>";
            echo "<h2 class='resultado'>En hexadecimal: ".dechex(bindec($n))."</h2>";
			echo "<br>";
		}	
	?>   
    



</body>
</html