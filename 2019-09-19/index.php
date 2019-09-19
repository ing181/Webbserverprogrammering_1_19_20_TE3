<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8" />
      <title>PHP</title>
   </head>
   <body>
<?php

// Associative Arrays
// jämför $_SESSION['nyckel'] = värde
// Skrivs så här
/*
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
// eller så här
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// Indexed Arrays
$cars = array("Volvo", "BMW", "Toyota"); // Volvo index 0, o.s.v
// eller
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
*/
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
echo $arrlength."<br>";

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>Associative Arrays<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo $x_value;
    echo "<br>";
}
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


if (true)
{
   echo "<br>SANT";
 }

?>



   </body>
</html>
