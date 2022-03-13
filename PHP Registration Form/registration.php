<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Registration Form</title>
</head>
<body>

    <!-- HTML Form --> 
    <form action="registration.php" method="post">
    Name : <input type="text" name="name"><br><br>
    Email : <input type="email" name="email"><br><br>
    Address : <input type="text" name="address"><br><br>
    Password : <input type="password" name="password"><br><br>
    Confirm Password : <input type="password" name="conpassword"><br><br>
    <input type="submit" value="Submit"><br><br>
    </form>

    <!-- PHP Section -->
    <?php 
    if($_POST["name"]){
        if($_POST["email"]){
            if($_POST["address"]){
                if($_POST["password"]){
                    if($_POST["conpassword"]){
                        if($_POST["password"] == $_POST["conpassword"]){
                            echo "You have successfully register!";
                        }
                        else{
                            echo "Your Password doesn't match";
                        }
                    }
                    else{
                        echo "You have to confirm password";
                    }
                }
                else{
                    echo "You have to write password";
                }
            }
            else{
                echo "You have to write your address";
            }
        }
        else{
            echo "You have to write your email";
        }
    }
    else{
        echo "You have to write your name";
    }
    ?>

</body>
</html>