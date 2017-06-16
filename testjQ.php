<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<title>Test - jQuerry</title>
	<style>

		#majmunica, #majmunica1, #majmunica2, #majmunica3 #majmunica4 , #majmunica5, #majmunica6	{
		position: relative;
		height: 10px;
		width: 2px;
		background-color: #414141;
		float: left;
		margin-left: 10px;

		

		}
		#drzac {
			width: 500px;
			height: 600px;
			overflow: hidden;
			float: left;
			border-bottom: 20px solid green;
			margin-bottom: 200px;
		}


	</style>
	<script>
	$(document).ready(function(){
 	 	$("button").click(
 	 		function(){
 	 			setInterval(function(){
		    		$("#majmunica").animate({top:'1300px',left:"50"},1000);
	 				$("#majmunica").animate({top:'0px'},1000);
	 				$("#majmunica1").animate({top:'3200px',left:"23"},1000);
	 				$("#majmunica1").animate({top:'0px'},1000);
	 				$("#majmunica2").animate({top:'3100px',left:"42"},1000);
	 				$("#majmunica2").animate({top:'0px'},1000);
	 				$("#majmunica3").animate({top:'800px',left:"22"},1000);
	 				$("#majmunica3").animate({top:'0px'},1000);
	 				$("#majmunica4").animate({top:'2100px'},1000);
	 				$("#majmunica4").animate({top:'0px'},1000);
	 				$("#majmunica5").animate({top:'2300px'},1000);
	 				$("#majmunica5").animate({top:'0px'},1000);
	 				$("#majmunica6").animate({top:'1500px'},1000);
	 				$("#majmunica6").animate({top:'0px'},1000);
	 				},2000);
	 		 		});
								});
	
	




	</script>
</head>
<body>
	<div id="drzac">
		<div id="majmunica"></div>
		<div id="majmunica1"></div>
		<div id="majmunica2"></div>
		<div id="majmunica3"></div>
		<div id="majmunica4"></div>
		<div id="majmunica5"></div>
		<div id="majmunica6"></div>
		
	</div>

	<button>Spermica</button>

</body>
</html>