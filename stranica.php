<?php


require 'db/connect.php';

$result = $db->query("SELECT * FROM smradovi") or die($db->error);
	if ($result->num_rows ) {
		
		$rows = $result->fetch_assoc();

		echo '<pre>'  , print_r($rows) , '</pre>'; 



	}
	



?>