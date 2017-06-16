<?php

echo "Upravo ste glasali za " . $_POST{"glasanje"};
echo "<br>";


$zohari=$_POST{"glasanje"};
switch ($zohari)
{
case "nesica":
  $nesica++;
  break;
case "dzoni":
  $dzoni++;				
  break;	
case "vasilie":
  $vasilie++;
  break;
case "joca":
  $joca++;
  break;
case "esteban":
  $esteban++;
  break;
case "manu":
  $manu++;
  }


if ($_POST{"glasanje"}='nesica') { echo "radi";}

echo "Nesica" . $nesica;
echo "<br>"; 
echo "Dzoni" . $dzoni;
echo "<br>";
echo "Manu" . $manu;
echo "<br>";
echo "Joca Zohar" . $joca;
echo "<br>";
echo "Adam" . $adam;
echo "<br>";
echo "Esteban" . $esteban;
echo "<br>";
echo "Vasilie" . $vasilie;


































?>