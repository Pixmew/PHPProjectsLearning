<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
      $number = 0;
      echo "Using while loop:<br>";
      while ($number <= 10) {
        echo $number." ";
        $number++;
      }
      echo "<br><br>Using do while loop<br>";
      $number = 10;
      do{
        echo $number." ";
        $number--;
      }while($number >= 0);
      echo "<br><br>Using for loop<br>";
      $number = 0;
      for($i = 0 ; $i <= 10 ; $i++){
        echo $number." ";
        $number++;
      }
       ?>
  </body>
</html>
