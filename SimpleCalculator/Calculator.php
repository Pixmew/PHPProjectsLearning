<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="CalculatorInput" action="Calculator.php" method="POST">
        Number 1 :<input type="number" name="number[]" value=0>
        Number 2 :<input type="number" name="number[]" value=0><br>
        Addition :<input type="checkbox" name="addition">
        Substraction :<input type="checkbox" name="substraction">
        Multiplication :<input type="checkbox" name="multiplication">
        Division :<input type="checkbox" name="division">
        <br>
        <input type="submit" name="submit" >
    </form>
    <br>
        <?php
            error_reporting(0);
            $numbers = $_POST["number"];
            if($_POST["addition"]){
                echo ($numbers[0] + $numbers[1]);
            }
            else if($_POST["substraction"]){
                echo ($numbers[0] - $numbers[1]);
            }
            else if($_POST["multiplication"]){
                echo ($numbers[0] * $numbers[1]);
            }
            else if($_POST["division"]){
                echo ($numbers[0] / $numbers[1]);
            }
        ?>
  </body>
</html>
