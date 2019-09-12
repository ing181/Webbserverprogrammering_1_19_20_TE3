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
          $_SESSION['inloggad'] = "sant";
      ?>
   <form action="till.php" method="get">
     <input type="hidden" name="test" value="hej">
     <input type="text" name="gradtal" class="gradtal">
     <select name="val">
       <option value="to_celsius">Från Fahrenheit till Celsius</option>
       <option value="to_fahrenheit">Från Celsius till Fahrenheit</option>
    </select>
    <input type="submit" value="Skicka">
   </form>

   </body>
</html>
