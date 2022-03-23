<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Métodos de envio</title>
	</head>
	<body>
	
		
	
		<form action="index.php" method="POST">
		
			<label>Atividade 1</label>
			<br>
			<label> Nome </label> <input type="text" name="Nome1">
			<br>
			<label> Ano de Nascimento </label> <input type="number" name="Nascimento1">
			<br>
			
			<label>Atividade 2</label>
			<br>
			
			<label> Frase </label> <input type="text" name="Frase2">
			<br>
			
			<label>Atividade 3</label>
			<br>
			
			<label> Nome </label> <input type="text" name="Nome3">
			<br>
			<label> Ano de Nascimento </label> <input type="txt" name="Nascimento3">
			<br>
			
			<label>Atividade 4</label>
			<br>
			
			<label> Valor1 </label> <input type="number" name="Valor1">
			<label> Valor2 </label> <input type="number" name="Valor2">
			<label> Valor3 </label> <input type="number" name="Valor3">
			<br>
			
			<label>Atividade 5</label>
			<br>
			
			<label> Frase </label> <input type="text" name="Frase5">
			<br>
			
			
		<?php
			print("<br>");
			
			print("Atividade 1");
			print("<br>");
			$Nome1 = @$_REQUEST["Nome1"];
			$Nascimento1 = @$_REQUEST["Nascimento1"];
			
			$Idade = date("Y") - @$Nascimento1;
			print ("Meu nome é {$Nome1} e tenho {$Idade} ");
			print("<br>");
			print("<br>");
			
			print("Atividade 2");
			print("<br>");
			$Frase2 = @$_REQUEST["Frase2"];
			print str_replace("porra","******", $Frase2);
			print("<br>");
			print("<br>");
			
			print("Atividade 3");
			print("<br>");
			$Nome3 = @$_REQUEST["Nome3"];
			$Nascimento3 = @$_REQUEST["Nascimento3"];
			print str_shuffle("{$Nome3} {$Nascimento3}");
			print("<br>");
			print("<br>");
			
			print("Atividade 4");
			print("<br>");
			$Valor1 = @$_REQUEST["Valor1"];
			$Valor2 = @$_REQUEST["Valor2"];
			$Valor3 = @$_REQUEST["Valor3"];
			
			@$multiplicacao = $Valor1 * $Valor2 * $Valor3;
			@$divisao = $Valor1 / $Valor2 / $Valor3;
			@$soma = $Valor1 + $Valor2 + $Valor3;
			@$subtracao = $Valor1 - $Valor2 - $Valor3;
	
			print($multiplicacao);
			print("<br>");
			print($divisao);
			print("<br>");
			print($soma);
			print("<br>");
			print($subtracao);
			print("<br>");
			print("<br>");
			print("<br>");
			
			print("Atividade 5");
			print("<br>");
			$Frase5 = @$_REQUEST["Frase5"];
			print($Frase5);
			print("<br>");
			print str_word_count($Frase5);
			print("<br>");
			print strlen($Frase5);
			print("<br>");
			print strrev($Frase5);
		?>
		
			<br>
			<button type="submit">ENVIAR</button>
		</form>
	</body>



</html>


