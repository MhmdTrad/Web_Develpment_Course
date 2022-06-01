<?php
session_start();

    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $user_email = $_POST['user_email'];

        if(!empty($user_name) && !empty($password) && !empty($user_email) && !is_numeric($user_name))
        {
            // save to database
            $user_id = random_num(20);
            $query= "insert into users (user_id,user_name,password,user_email) values ('$user_id','$user_name','$password','$user_email')";

            mysqli_query($con,$query);

            header("Location:login.php");
            die;
        }
        else
        {
            echo "<h1>please enter some valid information!</h1>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body class="body">
    <link rel="stylesheet" href="loginstyle.css">
    <div id="box">
        <form method="post">
            <div class="Log">Signup</div>
            <label>Name:</label>
            <input id="text" type="text" name="user_name"><br><br>
            <label>Password:</label>
            <input id="text" type="password" name="password"><br><br>
            <label>Email:</label>
            <input id="text" type="email" name="user_email"><br><br>
            <input id="button" type="submit" value="Signup"><br><br>

            <p class="per">Already have an account?</p><a class="per" href="login.php">Login</a><br><br>
        </form>
    </div>
</body>
</html>