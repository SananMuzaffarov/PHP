<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Mad Libs Game</title>
</head>
<body>

    <h1>Mad Libs Game</h1>
    <form action="site.php" method="GET">
    Your Name : <input type="text" name="text1"><br><br>
    Your Age : <input type="number" name="num1"><br><br>
    Your Nationality : <input type="text" name="text2"><br><br>
    <input type="submit"><br>
    </form>

    <?php 
     $text1 = $_GET["text1"];
     $num1 = $_GET["num1"];
     $text2 = $_GET["text2"];
     echo "My Name is {$text1} <br>";
     echo "I am {$num1} years old <br>";
     echo "I am from {$text2} <br>";
    ?>

</body>
</html>