<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Estrutura de Controle IF/ELSE </title>
	</head>
	
	<body>
		<form action="index.php" method="POST">
			A <input type="Number" name="a">
			B <input type="Number" name="b">
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			@$a = $_REQUEST["a"];
			@$b = $_REQUEST["b"];
			
			if($a > $b){
				print $a."é maior que ".$b;
			}elseif($b > $a){
				print $b." é maior que ".$a;
			}else {
				print $a." é igual a ".$b;
			}
			
		?>
		
		<p> Ativiade 1</p>
		<p>Opção 1 = soma </p>
		<p>Opção 2 = subtração </p>
		<p>Opção 3 = multiplicação </p>
		<p>Opção 4 = divisão </p>
		
		<form action="index.php" method="POST">
			Numero 1 <input type="Number" name="Numero1">
			Numero 2 <input type="Number" name="Numero2">
			Opção <input type="Number" name="op">
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			@$Numero1 = $_REQUEST["Numero1"];
			@$op = $_REQUEST["op"];
			@$Numero2 = $_REQUEST["Numero2"];
			
			@$soma = $Numero1+$Numero2;
			@$subtracao = $Numero1-$Numero2;
			@$multiplicacao = $Numero1*$Numero2;
			@$divisao = $Numero1/$Numero2;
		
			
			if($op == 1){
				print "A soma de ".$Numero1." + ".$Numero2." é igual á: ".$soma;
			}elseif($op == 2){
				print "A subtracao de ".$Numero1." - ".$Numero2." é igual á: ".$subtracao;
			}elseif($op == 3){
				print "A multiplicacao de ".$Numero1." x ".$Numero2." é igual á: ".$multiplicacao;
			}elseif($op == 4){
				if($Numero2 == 0){
					print "O denominador não pode ser zero";
				}else{
					print "A subtracao de ".$Numero1." - ".$Numero2." é igual á: ".$subtracao;
				}
			}
			else{
				print "Opção inválida";
			}
		?>
		
		<p> Ativiade 2</p>
		<form action="index.php" method="POST">
			Nota 1 <input type="Number" min='0' max='10' name="Nota1">
			Nota 2 <input type="Number" min='0' max='10' name="Nota2">
			Nota 3 <input type="Number" min='0' max='10' name="Nota3">
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			@$Nota1 = $_REQUEST["Nota1"];
			@$Nota2 = $_REQUEST["Nota2"];
			@$Nota3 = $_REQUEST["Nota3"];
			
			@$media = ($Nota1+$Nota2+$Nota3)/3;
			
			if($media >= 6){
				print "Aluno Aprovado";
			}elseif($media >= 1 && $media <6){
				print "Aluno de Recuperação";
			}else{
				print "Aluno de Reprovado";
			}
			
		?>
		
		<p> Ativiade 3</p>
		<form action="index.php" method="POST">
			Numero 1 <input type="Number" min='0' max='10' name="Numero1">
			Numero 2 <input type="Number" min='0' max='10' name="Numero2">
			Numero 3 <input type="Number" min='0' max='10' name="Numero3">
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			@$Numero1 = $_REQUEST["Numero1"];
			@$Numero2 = $_REQUEST["Numero2"];
			@$Numero3 = $_REQUEST["Numero3"];
			
			
			if($Numero1 > $Numero2){
				if($Numero1 > $Numero3){
					$v1 = $Numero1
					elseif($Numero3 > $Numero2){
						$v2 = $Numero3
						$v3 = $Numero2
					}
				else{
					$v1 = $Numero3
					$v2 = $Numero1
					$v3 = $Numero2
				}
			}elseif($Numero2 > $Numero3){
				$v1 = $Numero2;
			}
			
		?>
		
		
	</body>



</html>