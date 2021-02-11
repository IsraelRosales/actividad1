<?php 	
	
	$lado1 = 3;
	$lado2 = 4;
	$hipotenusa = 0;

	$hipotenusa = sqrt(pow($lado1, 2) + pow($lado2, 2));

 ?>
 
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Programación Web</title>
 </head>
 <body>
 	<h2 align="center" margin-right="50px">CÁLCULO DE HIPOTENUSA DE UN TRIÁNGULO RECTÁNGULO</h2>
	<?php 
	echo "<div align ='center'>";
	echo "Fomula para hallar la hipotenusa: ";
	echo " h = &#8730a&#178 + b&#178<br>";
	echo "Lado a: ".$lado1."cm, ";
	echo "Lado b: ".$lado2."cm<br><br>";
	echo "<h2>Cálculos:</h2><br>";
	echo "h = &#8730(3)&#178 + (4)&#178<br><br>";
	echo "h = &#8730 ". pow(3,2) ." + ".pow(4,2) ."<br><br>";
	echo "h = &#8730 ". (9+16) ."<br><br>";
	echo "h = ".$hipotenusa."cm <br><br>";
	echo "La Hipotenusa es: ".$hipotenusa."cm<br><br>";
	echo "</div>";
	?>

 </body>
 </html>