<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8" />
      <title>PHP</title>
   </head>
   <body>

<?php
     $bilar = array();
     $cars = array("Volvo", "BMW", "Toyota");
     //
     echo "<h1>Bilmärke: ".$cars[1]."</h1>";
     // Hur många element det finns i arrayen
     $arrlength = count($cars);
// En for-sats
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];// skriver ut innehållet på plats $x (0-2)
    echo "<br>";
}
  echo "<br>";
// Automatisk deklarering
// Ingen deklaration av datatyp
$v= "Hello world!"; // Textsträng
echo $v."<br>";
$temp = $v+3;
echo "v+3= ".$temp."<br>";
$v = 5;  // Heltal
echo $v."<br>";
$v = 10.5; // Flyttal
echo $v."<br>";
// Pröva operatorn +, när $v har olika innehåll.
// Vad händer?
$temp = $v+3;
echo "v+3= ".$temp."<br>";

// Assosiativ array
// index "Peter" värde "35"
$age = array("Peter"=>"35",
             "Ben"=>"37",
             "Joe"=>"43");
echo $age['Ben']."<br>";

?>

   </body>
</html>
