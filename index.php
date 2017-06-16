<!DOCTYPE html>
<html>
<head>
	<title>Žoharica - Home</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<meta charset='utf-8'>
	<meta name="keywords" content="Žoharica, Žoharenje, Žohar, Žohariti, žohica, uzimanje, na, ler, zohar, zoharenje, zohariti, zoharica, " />
	<link rel="shortcut_icon"  href="favicon.ico">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body onload="sirina()">
	<script type="text/javascript">
		function pali(){
				var e = document.getElementById('dialogoverlay');
				var b = document.getElementById('dialogbox1');
				e.style.display="block";
				b.style.display="block";
			}
		function gasi(){
				var e = document.getElementById('dialogoverlay');
				var b = document.getElementById('dialogbox1');
				e.style.display="none";
				b.style.display="none";
			}
		function sirina(){
				var x = window.innerWidth;
				
				var sirina2 =(x-230)/2;
				var z =document.getElementById('dialogbox1');
				z.style.left=sirina2+"px";

			}

	</script>
<div id="dialogoverlay"></div>
<div id="dialogbox1">
	<form action="prijava.php" method="POST">
	<p id="suncanica">Prijavi se</p>
	<p id="suncanica" style="font-size:14px; border-top:1px solid #FF624D; padding-top:8px;">Ovde ubaci svoj username, potpuno random, ističe za sat vremena u svakom slučaju. <input type="text" id="prijava" name="username" /></p>
	<input type='submit' value="Ok, ne mrači me više" onClick="gasi()">
	</form>
</div>
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
 ?></span>
	</div>

	<div id="glavno">

		<div id="header"><h1>Žoharica</h1></div>
		<div id="banner">Žoharenje 101</div>
		<div id="sredina">
			<div id="left"> 
				<h3>Uvod Razrada?</h3>
				<p>Na početku našeg putovanja susrećemo se sa rastućim taborom mladih papana, koji boreći se sa teškom ekonomskom situacijom pronalaze rešenje u drevnom obredu žoharenja. Izučavana od davnina, ova veština predstavlja must know skill set potreban za preživljavanje crnih dana. Žoharica, na ulici poznata kao "Žohica", postaje kult, stil i nacin ponašanja. Ova mlada, ali isto toliko i raspala družina tvrdokrilaca svoju tajnu čuva i prenosi sa kolena na koleno. Nije poznat početak žoharenja, neki kažu da je još u Božijem vrtu Adam ižohario jabuku na ler, ipak neki drugi izvori govore da je taj podatak neproveren, jer, kako kažu teško je poverovati Gociju ciganu. </p>
				
				<h3>Još malo razrade</h3>
				<p>Žoharica potice od latinske reči "Zohae" što u prevodu znači "Onaj koji skuplja mrvice", obožavalac Žoharice se naziva Žohar. Žoharenje ili žohariti u prvobitnom obliku označava skupljanje ostataka iskorišćene namirnice koju Žohar na kraju procesa konzumira. Vremenom kroz sleng žoharenje je dobilo više značenja, na primer "Žohariti nekog za pare" se može prevesti kao uzimanje novca od osobe koja ne želi da podeli svoje vlasništvo, ali uz pomoć magije Žoharice osoba odjednom vidi sebe kako izdvaja sredstva koje je Žohar zatražio. Pitanje koje sledi nakon procesa žoharenja je "Je l' si ižohario?".
				</p>
				<h3>Kako se odbraniti od Žohara?</h3> 
				<p>Ne postoji dokazan način za odbranu od žoharenja, jer obično ni sama osoba nad kojom se ovaj obred vrši ne razume da je bila ižoharena, ali ipak postoje neki saveti koji mogu smanjiti rizik od žoharenja. </p>

				<ul>
					<li>1. Nivo čistoće: Kuća &gt Apoteka.</li>
					<li>2. Ne posedovati nijednu materijalnu stvar.</li>
					<li>3. Ne družiti se sa Džonijem.</li>		
				</ul>				
			</div>


			<div id="right"> <h3>Prvo žoharsko pravilo</h3> <p>Napadaj ostale da su veći žohari od tebe.</p> </div>
			<div id="right"><h3>Drugo žoharsko pravilo</h3><p>Nikad ne veruj Joci Žoharu.</p></div>
			<div id="nav_right" >
				<div id="navig">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="kako.html">Istorija Žoharice</a></li>
						<li><a href="glasanje.php">Glasanje</a></li>
						<li><a href="oblaci.html">About</a></li>
						
					</ul>
				</div>
			</div>
			

		</div>
		
	
	</div>
	<div id="footer">copyright &copy; 2014 Vasilije Milenković</div>
</div>
</body>
</html>


