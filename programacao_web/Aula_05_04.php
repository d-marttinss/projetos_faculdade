<?php
	echo "<h1>While</h1>";

	$i = 1;
	while ($i <= 5) {
		print $i." ";
		$i++;
	}

	/////////

	echo "<h1>Do While</h1>";

	$j = 10;
	do{
		print $j." ";
		$j--;
	}while($j > 0);


	///////////

	echo "<h1>For</h1>";

	for($i=0;$i<=100;$i++){
		print $i." ";
	}

	//////////////

	echo "<h1>Foreach</h1>";

	$frutas = array("Abacaxi", "Banana", "Cajá", "Damasco", "Embaúba", "Framboesa", "Goiaba");

	foreach ($frutas as $fruta) {
		print $fruta." ";
	}

	print "<br>";

	$alfabeto = range("A","Z");

	foreach($alfabeto as $letra){
		print $letra." ";
	}

