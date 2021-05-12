<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
          echo date("d-m-y")."<br>";
          echo date("D-Y-d-m---a-A")."<br>";
          echo date("lF")."<br";
          var_dump(checkdate(2,10,2020))."<br>";
          $d = date_create("15-08-2020");
          date_format($d , "Y/m/d");
          echo "<br><br>".time();
          var_dump($d.["date"]);
      ?>
  </body>
</html>
