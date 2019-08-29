<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8" />
      <title>PHP</title>
   </head>
   <body>
	   <form action="fartocel.php" method="get">
		   <input type="text" name="fahr">

		   <input type="submit">

	   </form>
       <?php
         if (isset($_GET['fahr'])) {
         $fahr=$_GET['fahr']; // Tomt innan formuläret skickats
         $cel = ($fahr-32)*5/9;
         echo $fahr." Fahrenheit = ".$cel." Celsius";
       }
       else {
         echo "HEJ";
       }
       ?>


   </body>
</html>
