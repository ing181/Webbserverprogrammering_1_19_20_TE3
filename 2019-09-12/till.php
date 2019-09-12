<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8" />
      <title>PHP</title>
   </head>
   <body>
   <?php
   $val = $_POST['val'];
   $gradtal = $_POST['gradtal'];
   if ($val == "to_celsius")
   {
        $celsius = ($gradtal-32) * 5 / 9;
        echo $gradtal." Fahrenheit motsvaras av ".$celsius." Celsius";

   }
   else if ($val == "to_fahrenheit")
   {
     $fahrenheit = $gradtal * 9 / 5 + 32;
     echo $gradtal." Celsius motsvaras av ".$fahrenheit." Fahrenheit";

   }



  ?>
   </body>
</html>
