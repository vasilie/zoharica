
<html>
<head>
	<title>TEST - VREME/DATUM</title>
	<script type="text/javascript">
	function sperma(){
		var e = new Date();
		var r = e.getMonth()+1;
		document.getElementById('veverica').innerHTML=r;
	}
</script>
</head>
<body onload="sperma()">
	<div >ovde ispod stoji veverica mala
		<p id="veverica"></p>
	</div>
</body>
</html>