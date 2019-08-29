<?php

// En rad
/*
Flera
rader */
// automatiskt skapas en variabel
// $_GET['fname']
$f = $_GET['fname'];
if ($f!="Karin")
{
   echo "<h2>Du heter inte Karin</h2>";
}
else {
  echo "<h2>Välkommen Karin!</h2>";
}

?>
