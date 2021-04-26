<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
          $str = "yash is is a very Cool Dude";
          echo "Original string :".$str;
          echo "<br>length of string is :".strlen($str);
          echo "<br> number of words :".str_word_count($str);
          echo "<br> string in reverse :".strrev($str);
          echo "<br> string to lower :".strtolower($str);
          echo "<br> string to upper :".strtoupper($str);
          echo "<br> nuber of times \"is\" occurs :".substr_count($str , "is");
          echo "<br> making first character upper :".ucfirst($str);
          echo "<br> making first character for all words upper :".ucwords($str);
          echo "<br> making first character lower :".lcfirst($str);




      ?>
  </body>
</html>
