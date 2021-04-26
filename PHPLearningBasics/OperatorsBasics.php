<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $firstNumber = 0;
      $secondNumber = 0;

      echo "Original First Number is :".$firstNumber;
      echo "Original Second Number is :".$secondNumber;
      echo "<br><br>";
      echo "First number Increment post:".++$firstNumber."<br>";
      echo "First number Decrement post:".--$firstNumber."<br>";
      echo "First number Increment post:".$firstNumber++."<br>";
      echo "First number Decrement post:".$firstNumber--."<br>";

      if($firstNumber == $secondNumber){
        echo "Equal Numbers";
      }
      else{
        echo "Not Equal Numbers";
      }

      if(!$firstNumber > $secondNumber && !$firstNumber < $secondNumber){
        echo "equal";
      }
      if(!($firstNumber > $secondNumber) and !($firstNumber < $secondNumber)){
        echo "equal";
      }
      if(!$firstNumber > $secondNumber || !$firstNumber < $secondNumber){
        echo "equal";
      }
      if(!$firstNumber > $secondNumber or !$firstNumber < $secondNumber){
        echo "equal";
      }

      $str = "yash <br>";
      $str .= "hi ";
      echo $str;
      $y = ($firstNumber > $secondNumber)?"first":"second";
      echo $y;
    ?>
  </body>
</html>
