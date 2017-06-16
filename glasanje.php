<!DOCTYPE html>
<html>
<head>
	<title>Žoharica - Glasanje</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<meta charset='utf-8'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body onload="onload(), sirina(), startTime(), startDate()">
<script type="text/javascript">

			var kliknuto=0
			function izaberi(){

				if (kliknuto != 1) {


					pomeri();
					kliknuto++;

				} else {
					smanji();
					vrati();
					kliknuto=0;
				}
			}
			function startTime() {
			    var today=new Date();
			    var h=today.getHours();
			    var m=today.getMinutes();
			    var s=today.getSeconds();
			    h = checkTime(h);
			    m = checkTime(m);
			    s = checkTime(s);
			    document.getElementById('vrem').innerHTML ="<span class='boja'>"+h+"</span>:<span class='boja'>"+m+"</span>:<span class='boja'>"+s+"</span>";
			    var t = setTimeout(function(){startTime()},500);
			}
			function startDate(){
				var datum = new Date();
				var d = datum.getDate();
				var m = datum.getMonth()+1;
				var y = datum.getFullYear();
				d = checkTime(d);
				m =checkTime(m);
				document.getElementById('datum').innerHTML = "<span class='boja'>"+d+"</span>.<span class='boja'>"+m+"</span>.<span class='boja'>"+y+"</span>.";


			}

			function checkTime(i) {
   				 if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
   				 return i;
			}
			function pomeri(){
				var e = document.getElementById('tulbar');
				e.style.transition="all 2s";
				e.style.right="-250px";
				var b = document.getElementById('kl');
				b.style.transform="rotate(180deg)";
				b.style.WebkitTransform = "rotate(180deg)"
				b.style.transition="all 2s";
			}
			function vrati(){
				var e = document.getElementById('tulbar');
				e.style.transition="all 2s";
				e.style.right="-370px";
				var b = document.getElementById('kl');
				b.style.transform="rotate(0deg)";
				b.style.WebkitTransform = "rotate(0deg)";
				b.style.transition="all 2s";
			}
			function rasti(){

				var h = document.getElementById('banner');
				h.style.transition="all 2s";
				h.style.background="blue";
				h.style.width="900px";

			}
			function smanji(){

				var h = document.getElementById('banner');
				h.style.width="944px";


			}
			function sirina(){
				var x = window.innerWidth;

				var sirina2 =(x-230)/2;
				var z =document.getElementById('dialogbox');
				z.style.left=sirina2+"px";

			}
			function pali(){
				var e = document.getElementById('dialogoverlay');
				var b = document.getElementById('dialogbox');
				e.style.display="block";
				b.style.display="block";
			}
			function gasi(){
				var e = document.getElementById('dialogoverlay');
				var b = document.getElementById('dialogbox');
				e.style.display="none";
				b.style.display="none";
			}
			var nesicainfo="Nešica, žohar kakvog nema.";

			function selektor(ime){

				document.getElementById("krpelj").innerHTML="Bravo, izabran je <span class='boja'>"+ime+"</span>.";

			}
			function onload(){
				document.getElementById("krpelj").innerHTML="Niko još nije izabran.";

			}



			function nista(){
				document.getElementById("uvod").innerHTML="Dobrodosli na svecano krunisanje";
				document.getElementById("razrada").innerHTML="Konačno imamo priliku da izaberemo predstavnika Balkanske škole žoharenja.  ";

			}
			function smooth(){
				document.getElementById('uvod').style.color="white";
				document.getElementById('uvod').style.opacity="1";
				document.getElementById('razrada').style.color="white";
				document.getElementById('razrada').style.opacity="1"


			}

			function nesica(){
				document.getElementById("uvod").innerHTML=nesicainfo;
				document.getElementById("razrada").innerHTML="Nešica, retko ko se moze pohvaliti ovolikim smislom za žoharenje, služi se tehnikom \"Žohari bližnjeg svog\". Mnoge generacije se služe njegovim stilom, čiji je najbitniji element nevini izgled. <br />Code name: Bogomoljka";
				 smooth();

			}

			function dzoni(){
				document.getElementById("uvod").innerHTML="Džoni, žohari od frenda.";
				document.getElementById("razrada").innerHTML="Džoni pripada klasičnom tipu uličnog žohara, najbolji je u prikrivanju žoharenja, koristi se drevnom tehnikom \"Je l' mai štone za brata?\" naravno posle čega sledi \"A brat ne zna da \". Poznat je po lakom prihvatanju uličnog slenga pa u njegovom prisustvu možete čuti \"A de ga je brat\" i izraze tipa \"lagano\",\"slabije\", \"stopeza\"... <br />Code name: Ledji";

				 smooth();
			}

			function este(){
				document.getElementById("uvod").innerHTML="Esteban, Sremska Kamenica.";
				document.getElementById("razrada").innerHTML="Žohar sa druge strane zakona. Glavna odlika su mu veliki bicepsi, kojima privlači nevine žrtve obično ženskog pola. Nije poznata metoda žoharenja jer koristi tajne tehnike Ministarstva Unutrašnjih Poslova. Poznat po svom alter egu \"Estebanos\", brkatom Meksikancu koji pleni slabiji pol i isti poziva na blud. <br />Code name: 1312 ";

				smooth();
			}
			function manu(){
				document.getElementById("uvod").innerHTML="Manu, večiti romantik.";
				document.getElementById("razrada").innerHTML="Nagruvani vajar bicepsa, mašina za teg i prženje kalorija, pametnom odlukom da ne bude žohar prema svom telu dobija velike poene kod neukih seljančica iz Markovca i Velike Plane, koje nemilosrdno iskorišćava da bi povećao listu istih. Većina ga posmatra kao takvog, ali svaka koja je uspela da prodre u njegovu dušu osetila je koliko emocionalan div može biti. <br /> Metoda žoharenja: \"Klasična žoharica\".<br /> Code name: Zuba ";

				smooth();
			}
			function joca(){
				document.getElementById("uvod").innerHTML="Joca, žohar iz spoljašnjosti.";
				document.getElementById("razrada").innerHTML="Koristeći svoje gipko telo ovaj žohar starog kova uspeva da se ušunja u samu srž žoharenja, i time osigura svoje mesto kao lider ovog pokreta. Prošao je sve ulice i pročitao sve knjige, i stekao dovoljno iskustva da mu žoharanje postane rutina. Noću dobija +20 shadow skill i tad je nezaustavljiv.<br/ >Metoda žoharenja: \"Ivanova majka\".<br /> Code name: Žoha.";

				smooth();
			}
			function adam(){
				document.getElementById("uvod").innerHTML="Adam, DMT šaman.";
				document.getElementById("razrada").innerHTML="Ovo je žohar višeg reda, posvetio svoj život izučavanju mozga u interakciji sa prirodom. Često ispušta čudne krike kojima privlači pažnju u sezoni parenja. Odrekao se konformizma i otišao na brdo da živi sa biljkama.<br /> Metoda žoharenja: \"Stepski vuk\".<br /> Code name: \"Jelenko\" ";

				smooth();
			}
			function vasilie(){
				document.getElementById("uvod").innerHTML="Vasilie, stara garda.";
				document.getElementById("razrada").innerHTML="Iskrivljena figura je prvo što se primeti na njemu. Njega mrzi da jede, da spava, da postoji. Obično se oglašava rečenicom \"Majmune, koja šema?\", iako flegmatičan poseduje izuzetan njuh za žoharenje.<br /> Metoda žoharenja: \"Klasična žoharica\".<br /> Code name: Gara ";

				smooth();
			}

		</script>
<div id="dialogoverlay"></div>
	<div id="dialogbox">
	<p id="suncanica">Pazi sta radiš, žoharice!</p>
	<input type='submit' value="Ok" onClick="gasi()">
	</div>
<div id="content">
	<div id="nav"><ul>
		<li><a href="index.php"><b>HOME</b></a></li>
		<li><a href="kako.php"><b>ISTORIJA ŽOHARICE</b></a></li>
		<li><a href="glasanje.php"><b>GLASANJE</b></a></li>
		<li><a href="oblaci.html"><b>ABOUT</b></a></li>
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
		<div id="banner">Glasanje</div>
		<div id="glasanje">
			<p class='nglasanja' onMouseOver="nista()">Ko je najveci žohar?</p>
			<ul>
				<form action="glasanje.php" method="POST" value="Glasaj" name="glasanje" >
					<li class="imena">
						<label for="1" onMouseOver="nesica()" onClick="selektor('Nešica')">Nešica		</label>
						<input id="1" type="radio" name="glasanje" value="nesica" onClick="selektor('Nešica')">
					</li>

					<li class="imena">
						<label for="2" onMouseOver="este()" onClick="selektor('Esteban')">Esteban		</label>
						<input id="2" type="radio" name="glasanje" value="esteban" onClick="selektor('Esteban')">
					</li>

					<li class="imena">
						<label for="3" onMouseOver="manu()" onClick="selektor('Manu')">Manu			</label>
						<input id="3" type="radio" name="glasanje" value="manu" onClick="selektor('Manu')">
					</li>

					<li class="imena">
						<label for="4" onMouseOver="dzoni()" onclick=" selektor('Džoni')">Džoni			</label>
						<input id="4" type="radio" name="glasanje" value="dzoni" onClick="selektor('Džoni')">
					</li>

					<li class="imena">
						<label for="5"onMouseOver="adam()" onClick="selektor('Adam')">Adam			</label>
						<input id="5" type="radio" name="glasanje" value="adam" onClick="selektor('Adam')">
					</li>

					<li class="imena">
						<label for="6" onMouseOver="vasilie()" onClick=" pali(), selektor('Vasilie')  ">Vasilie		</label>
						<input id="6" type="radio" name="glasanje" value="vasilie" onClick="selektor('Vasilie')">
					</li>

					<li class="imena" onMouseOver="joca()" >
						<label for="7" onClick="selektor('Joca Žohar')">Joca Žohar		</label>
						<input id="7" type="radio" name="glasanje" value="joca" onClick="selektor('Joca Žohar')">
					</li>
			</ul>
					<input value="Glasaj" class="zoha" type="submit" >
				</form>





		</div>


		<div id="zezanje";>
			<div id="status">
			<?php
			$pozdrav="<p style='welcome'>A ovde su rezultati</p>";

		//-------------- Konekcija SQL, uzima informacije iz zohari, i ubacuje u  promenljive--------------------		$servername = "localhost";
		$username = "root";
		$password = "winstonblue";

		// Create connection
		$db = new mysqli($servername, $username, $password);

		// Check connection
		if ($db->connect_error) {
		    die("Connection failed: " . $db->connect_error);
		}
		echo "Connected successfully";


					// $db = mysql_connect('localhost' , 'zoharica', 'winstonblue' , "zoharica");

					 mysqli_select_db( $db,'zoharica');

					$sql = "SELECT * FROM zohari";
					$result = mysqli_query($db, $sql);
					//var_dump($result);


			while ($row = mysqli_fetch_array($result)) {


					if ($row['ime']=="Nesica")	{
							$nesica=$row['poeni'];
							;

					}


					elseif ($row['ime']=="Dzoni") {
						$dzoni=$row['poeni'];
					}

					elseif ($row['ime']=="Vasilie") {
						$vasilie=$row['poeni'];
					}

					elseif ($row['ime']=="Manu") {
						$manu=$row['poeni'];
					}

					elseif ($row['ime']=="Adam") {
						$adam=$row['poeni'];
					}

					elseif ($row['ime']=="Joca") {
						$joca=$row['poeni'];
					}

					elseif ($row['ime']=="Esteban") {
						$esteban=$row['poeni'];
					}
			}
		//-------------------------------- Do ovde--------------------------------------------------------------------
		//------------------------------------------------------------------------------------------------------------


		// Ako ip adresa postoji u fajlu 'adresa.txt' $glasanje je false
				$txt="kara.html";
				$br=0;
				$glasanje=true;
				$zezanje=file_get_contents('kara.html');

				$adresa=$_SERVER['REMOTE_ADDR'];
				$lines = explode("\n", $zezanje);
				$adresa1 = (string) $adresa;
				foreach ($lines as $line) {

					if ($line==$adresa1){

						$glasanje=false;

					}

				}










				/*$search=$_SERVER['REMOTE_ADDR'];
	           // echo $search;
	            $lines=file('ip.txt');

				foreach ($lines as $line) {echo $line;
					if (strpos($line,$search)==TRUE)
						{$glasanje=false;
							echo $line;}
				}

				*/


				mysqli_select_db( $db,'zoharica');
if (isset($_POST{"glasanje"})) {	$zohari=$_POST{"glasanje"};
}
				if (isset($zohari)) {
					# code...
					echo "

							<style>
								.welcome {

								display: none;


								}


							</style>
						";

					if ($glasanje==true) {





						switch ($zohari)
							{
								case "nesica":

											$nesica++;
									  		mysqli_query($db,"UPDATE zohari SET poeni='$nesica' WHERE id='1'");
									  		$lik="Nešicu";
									break;




								case "dzoni":

									  		$dzoni++;
									  		mysqli_query($db,"UPDATE zohari SET poeni='$dzoni' WHERE id='2'");
									  		$lik="Džonija";
									break;


								case "vasilie":

									  		$vasilie++;
									  		mysqli_query($db,"UPDATE zohari SET poeni='$vasilie' WHERE id='3'");
									  		$lik="Vasilia";
									break;

			  					case "joca":

									  		$joca++;
									  		mysqli_query($db,"UPDATE zohari SET poeni='$joca' WHERE id='6'");
									  		$lik="Jocu";
									break;


								case "manu":

								  			$manu++;
								  			mysqli_query($db,"UPDATE zohari SET poeni='$manu' WHERE id='4'");
								  			$lik="Manua";
								break;

								case "esteban":

								  			$esteban++;
								  			mysqli_query($db,"UPDATE zohari SET poeni='$esteban' WHERE id='7'");
								  			$lik="Estebana";
								break;

								case "adam":

								  			$adam++;
								  			mysqli_query($db,"UPDATE zohari SET poeni='$adam' WHERE id='5'");
								  			$lik="Adama";
								break;




							}
							$pozdrav = "Glasali ste za " . $lik;
							$txt="kara.txt";
							$adresa=$_SERVER['REMOTE_ADDR'];
							file_put_contents('kara.html', $adresa . PHP_EOL, FILE_APPEND);

							$vremeglasanja=time();
							$vr = "$vremeglasanja";
							if (isset($_COOKIE['username'])){								$poslednji=$_COOKIE['username'];
								mysqli_query($db,"UPDATE vremeg SET vreme='$vr' WHERE id='1'");
								mysqli_query($db,"UPDATE glasao SET ime='$poslednji' WHERE id='1'");
							}

					} else {
					$pozdrav = "Mozes glasati jednom dnevno";
					}



				}


				echo $pozdrav;
				$vreme=date('H');
				$result1 = mysqli_query($db, "SELECT * FROM vreme WHERE id=1 LIMIT 1");
				// var_dump($result1);
				$row = mysqli_fetch_assoc($result1);
				$vremesad = time();
				$vzreset = $row['vreme']; // Vreme zadnjeg resetovanja

				if ($vremesad > $vzreset + 24 * 60 * 60){
					$brisi = true;
					;
				} else {

					$brisi=false;
					//echo "brisi = false";
				}

				if($brisi==true ){

					unlink($txt);
					// ovde kod za pravljenje novog fajla
					$ourFileName = $txt;
					$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
					fclose($ourFileHandle);
					$vreset = time(); // vreme resetovanja
					mysqli_query($db,"UPDATE vreme SET vreme='$vreset' WHERE id=1");

				}


				$ukupno = $nesica + $adam + $manu + $dzoni + $esteban + $joca + $vasilie;





	 			?>


			</div>

			<div id="rezultati">
				<div id="rezl">
				<?php
					$pn=100*$nesica/$ukupno;
					$pe=100*$esteban/$ukupno;
					$pm=100*$manu/$ukupno;
					$pd=100*$dzoni/$ukupno;
					$pv=100*$vasilie/$ukupno;
					$pj=100*$joca/$ukupno;
					$pa=100*$adam/$ukupno;

					echo "
						<ul>
							<li>Nešica: </li>
							<li>Esteban: </li>
							<li>Manu: </li>
							<li>Džoni: </li>
							<li>Adam: </li>
							<li>Vasilie: </li>
							<li>Joca Žohar: </li>
						</ul>

					";
				?>
				</div>
				<div id="rezs">

				<?php
					echo "
						<ul>
							<li>$nesica  </li>
							<li>$esteban  </li>
							<li>$manu  </li>
							<li>$dzoni  </li>
							<li>$adam  </li>
							<li>$vasilie  </li>
							<li>$joca  </li>
						</ul>

					";
				?>
				</div>
				<div id="rezd">
				<?php
					echo "
						<ul>
							<li>Votes</li>
							<li>Votes</li>
							<li>Votes</li>
							<li>Votes</li>
							<li>Votes</li>
							<li>Votes</li>
							<li>Votes</li>
						</ul>
					"
				?>
				</div>
				<?php
					echo "<p class='ukup'>Ukupno glasova: $ukupno <span class='vote'>Votes</span></p>"
				?>
			</div>
			<div id="selektor">
				<p id="krpelj">
				</p>
			</div>
			<div id="vreme">
				<div id="vlevo">
					<p id="vreml">Vreme: </p>
					<p id="datuml">Datum: </p>
				</div>

				<div id="vdesno">
					<p id="vrem"></p>
					<p id="datum"></p>
				</div>

			</div>
		</div>
		<div id="info">
			<div class="zeka">
			<p class="nglasanja1">Dobrodosli na svecano krunisanje</p>
			<p class="nakaza">Konačno imamo priliku da izaberemo predstavnika Balkanske škole žoharenja.</p>
			</div>
				<p class="nglasanja3" id="uvod"></p>
				<p id="razrada" class="pinfo"></p>

		</div>
		<div id="glasao">
			<p style="margin-bottom:4px;">Poslednji je glasao:<span class="boja">
				<?php

					$result2 = mysqli_query($db,"SELECT * FROM glasao WHERE id=1 LIMIT 1");					$row2 = mysqli_fetch_assoc($result2);
					$SQLposlednji = $row2['ime'];
					$result3 = mysqli_query($db,"SELECT * FROM vremeg WHERE id=1 LIMIT 1");
					$row3 = mysqli_fetch_assoc($result3);
					$vremeg = $row3['vreme'];
					mysqli_close($db);
					echo $SQLposlednji;

				?>
				</span>
			</p>
			<p>Vreme glasanja: <?php echo $vremeg;//napravi tabelu sa imenom vremeg, id i vreme su kolone ?></p>
		</div>






	</div>
	<div id="footer">copyright &copy; 2014 Vasilije Milenković</div>
	</div>

</div>

</body>
</html>