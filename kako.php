<!DOCTYPE html>
<html>
<head>
	<title>Žoharica - Istorija</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<meta charset='utf-8'>
</head>
<body>
<div id="content">
	
	<div id="nav"><ul>
		<li><a href="index.php"><b>HOME</b></a></li>
		<li><a href="kako.php"><b>ISTORIJA ŽOHARICE</b></a></li>
		<li><a href="glasanje.php"><b>GLASANJE</b></a></li>
		<li><a href="#"><b>ABOUT</b></a></li>
		<span id="smaracica">
			<?php 
				
				if (isset($_COOKIE['username'])) {
					echo "Dobrodošao " .$_COOKIE['username'];

				} else {
					echo "Dobrodošao neznanče. Skokni do <a href='index.php'>pocetne</a> na prijavicu laganu.";
				}
  			?>
 		</span>
		
	</ul></div>

	<div id="glavno">

		<div id="header"><h1>Žoharica</h1></div>
		<div id="banner">Istorija Žoharice</div>
	
		<div id="sredina">
				<div id="left"> 
					<h3>Žoharenje od davnina</h3>
					<p> Nekada davno dok Žoharica nije bila rasprostranjena u tolikoj meri koliko je danas, za ulazak u takvu jednu organizaciju pojedinac je morao da prodje obred žoharenja koji se odrzavao jednom u četiri godine u skrivenoj šumi nadomak Bašina. Tada bi se clanovi velike lože Žoharice okupili oko slike Čabe Silađi, vrhovnog vladara i začetnika juznoevropske škole žoharenja koja je kasnije prihvaćena kao primarna, i čiji se elementi danas koriste kao glavne smernice u ovom kultu. Kandidati su prolazili dugogodišnje psihičke pripreme i njihov broj je zavisio isključivo od broja prodatih Dormeo dušeka na godišnjem nivou podeljenih brojem slova "r" koje Đule Van Gogh pogrešno izgovori na poslednjem albumu. Prolaznost kandidata nikada nije prelazila 7%, nije poznato zašto je na tako niskom nivou, ipak negde postoji spisak razloga.       </p>
					
					<h3>Žoharenje danas</h3>
					<p>Danas se žoharanje obavlja na lokalnom nivou, više ne postoje velike lože, ne postoji vrhovni obred žoharenja, jer se vremenom broj Žohara povećao u tolikoj meri da su dve najveće, Velika Loža iz Male Moštanice i Velika Žoharska Loža Geštalt Strižibuba iz Pljevlje zaratile oko odgovora na vrhovno obredno pitanje na kom se bazira filozofija ovog pokreta. Rat je trajao 26 dana, prekinut je dolaskom ekipe "48 sati svadba" na kućnu adresu Aleksandra Krtole, vodju Pljevljanske lože, koji je ispunio zadatke i oženio tada već kabastiju Isidoru Njuškalo.   
					    </p>
					<h3>Lorem ipsum dolor sit.</h3> 
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, incidunt, voluptas, excepturi, dolorum corrupti ipsam tenetur quas harum cumque nemo numquam maiores veniam voluptatibus libero accusamus iste ex mollitia aspernatur optio magnam deleniti nobis ipsum nesciunt nulla labore. Obcaecati eius repellat omnis eos fugit numquam quam doloribus corporis. Iste, repudiandae, hic, tenetur, magni recusandae ea fugiat quaerat iure dicta officiis libero animi molestias ipsa ullam eos nulla quo placeat. Dicta. 
					</p>
								
				</div>
				<div id="right" style="padding-bottom: 47px;">
					<h3>Žohari u brojkama</h3>
					<p style="padding-bottom: 5px;">Prosečan žohar na dnevnoj bazi potroši 60% sredstava iz izvora koji je stekao žoharenjem.</p>
				</div>
				
				<div id="right"  style="padding-bottom: 49px;">
					<h3>Prvi poznati žohar</h3>
					<p style="padding-bottom: 5px;">Prvi poznati žohar na ovim prostorima je bila mlada partizanka Njegina Uze.</p>
				</div>
				
				<div id="nav_right" style="height: 224px;" >
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="kako.html">Istorija Žoharice</a></li>
					<li><a href="glasanje.php">Glasanje</a></li>
					<li><a href="oblaci.html">About</a></li>
					
				</ul>
			</div>					
		</div>
		
	</div>
	<div id="footer">copyright &copy; 2014 Vasilije Milenković</div>

</div>
</body>
</html>		