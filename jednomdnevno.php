
<?php

$search=$_SERVER['REMOTE_ADDR'];
$lines=file(ip.txt);

	foreach ($lines as $line) {
		if (strpos($line)==$search)
			{$glasanje="false";
	}









