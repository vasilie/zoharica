<?php




		$db = mysql_connect('localhost' , 'zoharica', 'winstonblue' , zoharica_app) or die("Doslo je do problema");
				
		mysql_select_db(zoharica_app,$db) or die("Ne mozes da selektujes ovu databazu");
		
		$vreme = time();
		
		mysql_query("UPDATE vreme SET vreme='$vreme' WHERE ID=1");
				
		$result = mysql_query("SELECT * FROM vreme WHERE id=1 LIMIT 1");
		
		$row = mysql_fetch_assoc($result);
		
		$vreme2 = $row['vreme'];
		echo "Vreme1 je:" . $vreme . "<br>";
		echo "Vreme2 je:" . $vreme2 . "<br>";













?>