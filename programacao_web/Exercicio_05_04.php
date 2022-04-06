<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Estrutura de Controle IF/ELSE </title>
	</head>
	
	<body>
		<p>Exercicio 1</p>
		<form action="Exercicio.php" method="POST">
			Numero 1 <input type="Number" name="num1">
			Numero 2 <input type="Number" name="num2">
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			@$num1 = $_REQUEST["num1"];
			@$num2 = $_REQUEST["num2"];
			
			@$soma = $num1+$num2;
			
			if($soma > 20){
				print $soma + 8;
			}else {
				print @$soma - 5;
			}
			
		?>
		
		<p>Exercicio 3</p>
		<form action="Exercicio.php" method="POST">
			Numero da Tabuada <input type="Number" name="num">
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			@$num = $_REQUEST["num"];
			
		 for($i=0; $i <= 10; $i++){
			 $resultado = $num * $i;
			 print "o resultado de ".$num." x ".$i." é igual a ".$resultado."<br>";
		 }
			
			
		?>
		
		<p>Exercicio 4</p>
		<form action="Exercicio.php" method="POST">
			Valor de A <input type="Number" name="A">
			Valor de B <input type="Number" name="B">
			Valor de C <input type="Number" name="C">
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			@$A = $_REQUEST["A"];
			@$B = $_REQUEST["B"];
			@$C = $_REQUEST["C"];
			
			$resultado = ($A - $B) * $C;
			
			 print "o resultado da expressão (".$A." - ".$B.") x ".$C." é igual a ".$resultado."<br>";
			
			
		?>
		
		<p>Exercicio 5</p>
		<form action="Exercicio.php" method="POST">
			Distância <input type="Number" name="dist">
			Valor de KM/Litro <input type="Number" name="kmLitro">
			Preço da Gasolina <input type="Number" name="vlrGaso">
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			@$dist = $_REQUEST["dist"];
			@$kmLitro = $_REQUEST["kmLitro"];
			@$vlrGaso = $_REQUEST["vlrGaso"];
			
			
			@$litroGasto = $dist/$kmLitro;
			@$gastoGasolina = $litroGasto * $vlrGaso;
			
			
			 print "<br>Maria gastará R$".$gastoGasolina." e seu carro consumirá ".$litroGasto." litros";
			
			
		?>
		<p>Exercicio 6</p>
		<form action="Exercicio.php" method="POST">
			Anos Fumando <input type="Number" name="anos">
			Quantos cigarros fuma por dia <input type="Number" name="cigarro_diario">
			Preço da Carteira <input type="Number" name="vlrCarteira">
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			@$anos = $_REQUEST["anos"];
			@$cigarro_diario = $_REQUEST["cigarro_diario"];
			@$vlrCarteira = $_REQUEST["vlrCarteira"];
			
			$dias_fumando = $anos * 365;
			$numero_carteiras = ($dias_fumando * $cigarro_diario) / 20;
			$total_gasto = $numero_carteiras * $vlrCarteira;
			
			
			 print "<br>O valor gasto foi de ".$total_gasto;
			
			
		?>
		
		<p>Exercicio 8</p>
		<form action="Exercicio.php" method="POST">
			Numero de CPF <input type="Number" name="CPF">
			Dependentes <input type="Number" name="dependentes">
			Renda Mensal <input type="Number" name="renda_mensal">
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			@$CPF = $_REQUEST["CPF"];
			@$dependentes = $_REQUEST["dependentes"];
			@$renda_mensal = $_REQUEST["renda_mensal"];
			
			$salario_minimo = 1212;
			
			$valor_desconto = $salario_minimo - ((($salario_minimo/100) * 5)*$dependentes);	
			$valor_total = $renda_mensal - $valor_desconto;
			
			
			if($valor_total <= ($salario_minimo * 3){
				print "Isento de imposto";
			}
			
			
		?>
	</body>
</html>