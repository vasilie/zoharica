<?php 

$db = mysql_connect('localhost' , 'zoharica', 'winstonblue' , zoharica_app);
mysql_select_db(zoharica_app,$db);

$sql = "
SELECT * FROM smradovi";
$result = mysql_query($sql, $db);
while ($row = mysql_fetch_array($result)) {

	echo '<p>' . $row['ime'] . ' ima ' . $row['poeni'] . ' poena' . '</p>';
}

 ?>