<?php



$txt="adresa.txt";
$niz = array(a, b, c, d, e, f, g,);
$adresa=$_SERVER['REMOTE_ADDR'];
file_put_contents($txt, $adresa);


$zezanje=file_get_contents('adresa.txt');


$lines= str_split($zezanje, 16);

foreach ($lines as $line) {if ($line==$adresa){    
	echo $line . " = " . $adresa . "<br>";    }}
	//else echo "nije u redu nesto";}
//foreach ($niz as $broj ) { echo $broj;}
	# code...
//}
	# code...
//}
//echo $zezanje;
//$lines= explode($zezanje, "\n");
//echo "OVO JE LINES: " . $lines;
















?>