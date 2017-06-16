<html>
<head>
	<title>Comment - Test</title>
</head>
<body>
	<style>
		#levo {
			border: 2px solid black;
			height: 300px;
			width: 300px;
			float: left;
			margin-right: 20px;
		}
		#desno {
			border:2px solid black;
			height: 300px;
			width: 300px;
			float: left;
		}
		#levo ul {
			list-style-type: none;
		}
		#levo input[type="textarea"]{
			height: 100px;
			width: 220px;

		}
		#name {
			text-align: left;
			color: #424242;
			font-size: 10px;
		}

	</style>
	
	<div id="container"> 
		<div id="levo">
		<form action="brda.php" method="POST" name="koment">
		<ul>
			<li>Name:</li><input type="text" name="name"></input>
			<li>Comment:</li><input type="textarea"  name="komentar"></input>
			<li><input type="submit"  value="Dodaj komentar" /></li>
		</ul>
		</form>
		<?php
			$db = mysql_connect('localhost' , 'zoharica', 'winstonblue' , zoharica_app);
			mysql_select_db(zoharica_app, $db);

			$rez = mysql_query("SELECT * FROM comments");
			while ($row = mysql_fetch_assoc($rez)) {
				echo "<p>" . "Name :". $row['name'] . "</p>";
				echo "<p>" . "Komentar :". $row['comment'] . "</p>";
				
			}
			$kom = $_POST["name"];
			if (isset($kom)){
				$spermica = "kara";
				$ime=$_POST['name'];
				$komentar=$_POST['komentar'];
				if ($ime != "" and $komentar != ""){
				mysql_query("INSERT INTO comments VALUES( '', '$ime', '$komentar')");
				}
			}else {
				$spermica="zuta";
			}
			

		?>
		</div>
		<div id="desno">
			<?php echo $spermica; ?>
			<p id="komentar"></p>
			<p id="name"></p>

		</div>
	</div>

</body>
</html>