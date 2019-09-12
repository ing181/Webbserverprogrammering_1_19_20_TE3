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
   if ($_SESSION['inloggad'] != "sant")
   {
      echo "Du är inte behörig";
      exit;

   }

   echo $_GET['test']."<br>";
   $val = $_GET['val'];
   $gradtal = $_GET['gradtal'];
   if ($val == "to_celsius")
   {
        $celsius = ($gradtal-32) * 5 / 9;
        echo $gradtal." Fahrenheit motsvaras av ".number_format($celsius,2,",","")." Celsius";

   }
   else if ($val == "to_fahrenheit")
   {
     $fahrenheit = $gradtal * 9 / 5 + 32;
     echo $gradtal." Celsius motsvaras av ".$fahrenheit." Fahrenheit";

   }



  ?>
   </body>
</html>
