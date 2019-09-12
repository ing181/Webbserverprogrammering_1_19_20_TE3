<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8" />
      <title>PHP</title>
   </head>
   <body>
	   <form action="fartocel.php" method="get">
		   <input type="text" name="invarde">

       <select name="val">
            <option value="tocelsius">To Celsius</option>
            <option value="tofahrenheit">To Fahrenheit</option>
       </select>

		   <input type="submit">

	   </form>
       <?php
         if($_GET['val']=="tofahrenheit")
         {
           $invarde=$_GET['invarde']; // Tomt innan formuläret skickats
           $fahrenheit = $invarde*9/5+32;
           $fahrenheit = number_format($fahrenheit, 2,",","");
           echo $invarde." Celsius = ".$fahrenheit." Fahrenheit";
         }
         else{
           $invarde=$_GET['invarde']; // Tomt innan formuläret skickats
           $celsius = ($invarde-32)*5/9;
           $celsius = number_format($celsius, 2,",","");
           echo $invarde." Fahrenheit = ".$celsius." Celsius";
         }
       ?>


   </body>
</html>
