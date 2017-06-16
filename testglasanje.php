<?php







//-------------------------- Ovo ubacuje ip adresu u fajl, posle glasanja ----------------------------------------
$IPADRESA=$_SERVER['REMOTE_ADDR'];
$adresa="adresa.txt";
$handle =fopen($adresa, 'w');
fclose($handle);
file_put_contents($adresa, $IPADRESA . PHP_EOL, FILE_APPEND);
//-------------------------- Do ovde -----------------

//----------------------- Ovo proverava da li ip adresa vec postoji u fajlu "adresa.txt", ako postoji $glasanje=FALSE
$zezanje=file_get_contents('adresa.txt');


$lines= str_split($zezanje, 16);

foreach ($lines as $line==$IPADRESA) {//$glasanje=FALSE;
	echo $;
}
//----------------------- Do ovde -------------------------------------------------------------------

//bravo vasilije kidas ovaj posao



?>