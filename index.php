<!DOCTYPE HTML>
  <head>
    <title>Harjutus 8</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Funktsioon "continue"</h2>
  <?php
  
    for ($number = 1; $number <= 10; $number++) {
    if ($number == 5) {
        continue; // Kui $nr == 5, siis jääb alljärgnev vahele ning tsükkel käivitub uuesti.
    }

    echo $number . ", ";
}
?>
 <br>

<?php
    $count = 1;

    while ($count <= 10) {
	if ($number == 5) {
        continue; // Kui $nr == 5, siis jääb alljärgnev vahele ning tsükkel käivitub uuesti.
		// Infinite loop
    }
        echo $count . ", " ;
        $count ++;
    }
?>
  
 <h2>Funktsioon "break" </h2>
 
<?php
  
    for ($number = 1; $number <= 10; $number++) {
    if ($number == 6) {
        break; 
    }

    echo $number . ", ";
}
?>
  
  
  </body>
</html>
  