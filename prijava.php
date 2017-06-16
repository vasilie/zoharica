<?php 
 
if ($_POST['username']!="") {
					
	setcookie("username", $_POST['username'], time()+3600);
	$welcome= "Uspesno ste se prijavili kao " . $_POST['username'] . " Bravo! Sacekaj koji sekund lagano se vraćamo na početnu.";
				}
	
	
else {
	$welcome= "Žoharice mala, moraš da upišeš neko ime. Ajde sad smisli nešto, dok se lagano vraćamo na početnu";
}

?>
<html>
<head>
	<title>Prijava</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body onload="setTimeout('delayer()', 4000), setInterval('timer()',1000)">


<script type="text/javascript">
	function delayer(){
    window.location = "index.php"
}
	var vreme=4;
	function timer(){
		
		document.getElementById('kountdaun').innerHTML=vreme;
		vreme--;
	}

</script>
<div style="margin-left:14px; border:2px solid #414141;" id="vracanje">
	<p style="font-size:20px;"><?php echo $welcome; ?><p>


</div>
<div style="margin-top:30px; font-size:50px; text-align:center;"><span id="kountdaun" style="boja">5</span>

</div>

</body>
</html>