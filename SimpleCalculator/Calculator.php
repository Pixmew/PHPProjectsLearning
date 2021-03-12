<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="CalculatorInput" action="Calculator.php" method="GET">
        Number 1 :<input type="number" name="number1">
        Number 2 :<input type="number" name="number2"><br>
        Addition :<input type="checkbox" name="addition">
        Substraction :<input type="checkbox" name="substraction">
        Multiplication :<input type="checkbox" name="multiplication">
        Division :<input type="checkbox" name="division">
        <br>
        <input type="submit" name="submit" >
    </form>
    <br>
        <?php

            if($_GET["addition"] and !$_GET["substraction"] and !$_GET["multiplication"] and !$_GET["division"]){
                echo ($_GET["number1"] + $_GET["number2"]);
            }
            else if(!$_GET["addition"] and $_GET["substraction"] and !$_GET["multiplication"] and !$_GET["division"]){
                echo ($_GET["number1"] - $_GET["number2"]);
            }
            else if(!$_GET["addition"] and !$_GET["substraction"] and $_GET["multiplication"] and !$_GET["division"]){
                echo ($_GET["number1"] * $_GET["number2"]);
            }
            else if(!$_GET["addition"] and !$_GET["substraction"] and !$_GET["multiplication"] and $_GET["division"]){
                echo ($_GET["number1"] / $_GET["number2"]);
            }
        ?>
  </body>
</html>
