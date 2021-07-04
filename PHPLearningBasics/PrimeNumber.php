<html lang="en">
<head>
    <title>PrimeNumberTest</title>
</head>
<body>
    <form action="PrimeNumber.php" method="post">
        <input type="number" name="number" value="">
        <input type="submit" name="CheckPrime">
    </form>
    <?php
    
        if(isset($_POST["number"])){
            $num = $_POST["number"];
            $isNotPrime = false;
            if($num > 1){
                for ($i = 2 ; $i < $num ; $i++){
                    if(($num % $i) == 0){
                        $isNotPrime = true;
                        break;
                    }   
                }
            }

            if($isNotPrime){
                echo $num." Is Not a Prime Number";
            }
            else{
                echo $num." Is a Prime Number";
            }
        }
    ?>
</body>
</html>