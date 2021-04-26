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
        Addition -<input type="checkbox" name="addition"><br>
        Substraction -<input type="checkbox" name="substraction"><br>
        Multiplication -<input type="checkbox" name="multiplication"><br>
        Division -<input type="checkbox" name="division"><br>
        <br>
        <input type="submit" name="submit" >
    </form>
    <br>
        <?php
            error_reporting(0);
            if(isset($_POST["number"])){
              $numbers = $_POST["number"];
              if($_POST["addition"]){

                  echo "Addition is -> ".($numbers[0] + $numbers[1]);
              }
              if($_POST["substraction"]){
                  echo "Substration is -> ".($numbers[0] - $numbers[1]);
              }
              if($_POST["multiplication"]){
                  echo "Multiplication is -> ".($numbers[0] * $numbers[1]);
              }
              if($_POST["division"]){
                echo "Division is -> ".($numbers[0] / $numbers[1]);
              }
            }

        ?>
  </body>
</html>
