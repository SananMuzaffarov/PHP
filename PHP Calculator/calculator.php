<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment - Calculator Program</title>
</head>
<body>

<form action="site.php" method="GET">
     First Number: <input type="number" name="num1"><br>
     Operator: <input type="text" name="op"><br>
     Second Number: <input type="number" name="num2"><br>
     <input type="submit">
</form>

<?php
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     $op = $_GET["op"];

     if($op == "+"){
        echo $num1 + $num2;
     } 
     elseif($op == "-"){
        echo $num1 - $num2;
     } 
     elseif($op == "/"){
        echo $num1 / $num2;
     } 
     elseif($op == "*"){
        echo $num1 * $num2;
     } 
     else{
        echo "Invalid Operator";
     }
?>

</body>
</html>