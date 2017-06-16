<?php


$vreset=date(ym) . date(d)+1 . date(his);
//  $vreset je promenljiva koja se ubacuje u databazu
$vremesad=date(ymdhis);
//.echo $vremesad . "<br>";
echo 'Ovo je $vreset: ' . $vreset . "<br>";

// "$vremesad" je vreme glasanja u formatu godina, mesec, dan + 1, cas, minut, sekunda.
// To bi trebalo da se ubaci u databazu

//if( > ;

//$vzadreset=	
			$db = mysql_connect('localhost' , 'zoharica', 'winstonblue' , zoharica_app) or die("Doslo je do problema");
				
			mysql_select_db(zoharica_app,$db);
			
			$sql = "SELECT vreme FROM vreme";
				
				$result = mysql_query($sql, $db);
				
			while ($row = mysql_fetch_array($result)) {
				$vreset=date(ym) . date(d)+1 . date(his);
				$kara=$row['vreme'];
				echo 'ovo je kara: ' . $kara . '<br>';
				

				/*	  
				echo "Vreme sad je: " . $vremesad . "Vreme resetovanja je: " . $row['vreme'];
				if ($vremesad<$row['vreme'])	{ 

					echo "Vreme sad je: " . $vremesad . "Vreme resetovanja je: " . $row['vreme'];
					mysql_query("UPDATE vreme SET vreme='$vreset' WHERE id='1'");



				*/	
				//}

						
					

}
//mysql_query("UPDATE vreme SET vreme='$vreset' WHERE id='1'" , $db);
// Kod funkcionise tako sto postavlja pitanje da li je vise od 23 na primer, to je najlakse.
// Ako jeste onda pita da li je $vremesad>$vzadreset $vzadreset uzima podatak iz databaze, a u tu databazu je ubacen
// datum kad je zadnji put resetovano iz $vreset, koristim dve promenljive za isti podatak jer je tako lakse



//mysql_query("UPDATE vreme SET vreme='$vremesad' WHERE id='1'")



//$vreset=date('ym') . date('d')+1 . date('his');
echo 'ovo je vreset: ' . $vreset;
mysql_query("UPDATE  `vreme` SET  `vreme` =  $vreset WHERE  `vreme`.`ID` =1 LIMIT 1" , $db);
?>