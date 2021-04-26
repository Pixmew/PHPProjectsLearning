<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $numbers = array(1,2,3,4,67,2,5,5,7,3,2);
      $number = array(1,2,3,4);
      $names = array("Jack" , "Mark" , "Wade" , "Bob");
      $diffnames = array("jack" => 40 , "yash" => 30 , "Mark"=>56 , "wade"=>550);
      foreach ($names as $key => $value) {
          echo $value."<br>";
      }
      $planters = array("yash" => 33 , "jack" => 420 , "Mark" => 40 , "wade" => 50);
      foreach ($planters as $key => $value) {
        echo $key." planted ".$value." trees<br>";
      }

      echo "<br><br>CountingArrays<br>";
      echo "number of elements in names ".count($names)."<br>";
      echo "number of elements in planters ".sizeof($planters)."<br>";

      echo "<br>Checking if is Array ";
      if(is_array($names)){
        echo "<br>this is a list of names";
      }
      $dearray = array(1=>array("cool"=>1 , "dude"=>2 , "me"=>3) , 3=>array("cool"=>5 , "fe"=>6 , "me"=>6));
      print_r(array_column($dearray , "dude"));
      $new = array_combine($number , $names);
      print_r($new);
      print_r(array_diff($planters,$diffnames));
      echo "<br>";
      $n = array_merge($numbers , $names);
      print_r($n);
      print_r("<br>".array_sum($numbers));


      echo "<br><br><br>Sorting array<br>";
      print_r(sort($numbers));
      print_r($numbers);
      print_r(rsort($numbers));
      print_r($numbers);

      echo "<br>";
      print_r(asort($planters));
      print_r($planters);

     ?>
  </body>
</html>
