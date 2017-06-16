<!DOCTYPE html>
<html>
<head>
	<title>Žoharica - Šta su drugi rekli</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<meta charset='utf-8'>
	<meta name="keywords" content="Žoharica, Žoharenje, Žohar, Žohariti, žohica, uzimanje, na, ler, zohar, zoharenje, zohariti, zoharica, " />
	<link rel="shortcut_icon"  href="favicon.ico">
</head>
<body>
<div id="content">
	<div id="nav">
		<ul>
			<li><a href="index.php"><b>HOME</b></a></li>
			<li><a href="kako.php"><b>ISTORIJA ŽOHARICE</b></a></li>
			<li><a href="glasanje.php"><b>GLASANJE</b></a></li>
			<li><a href="oblaci.html"><b>ABOUT</b></a></li>
			
		</ul>
		<span id="smaracica">
			<?php 
				
				if (isset($_COOKIE['username'])) {
					echo "Dobrodošao " .$_COOKIE['username'];

				} else {
					echo "Dobrodošao neznanče. | <a onclick='pali()'>Prijavi se</a>";
				}
			 ?>
		</span>
	</div>
	<div id="glavno">

			<div id="header"><h1>Žoharica</h1></div>
			<div id="banner">Šta su drugi rekli o žoharenju</div>
			<div id="komentari">
				<form>
					<ul>
						<li><input type="text" name="ime" />Ime..</input></li>
						<li><input type="textarea" name="komentar">Dodaj komentar...</input></li>
						<li><input type="submit" name="submit" value="OK"></li>
					</ul>
				</form>

			</div>
	</div>
</div>
</body>
</html>