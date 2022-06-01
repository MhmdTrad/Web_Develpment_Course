<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Assistant</title>
    
</head>

<body>
  
    <link rel="stylesheet" href="main.css">
    
    <header>
        <div class="content">
          <hgroup>
            <h1>Student Assistant</h1>
            <i>For DS Department</i><br/>
            <i>Learn Smart</i>
          </hgroup>
        </div>
      </header>

        <p class="s" style=" font-size: medium;">Hello there.
          We are a Student Assistant website, 
          we arehere to help you with all data science topics Since you have decided to be with us,
          we will do our best to help you to make you really know what the data science is.Best Wishes❤️</p>

        <section class="site">
            <nav>
              <a href="roadmap.html">Our Roadmap</a>
              <a href="topics.html">Topics We Offer</a>
              <a href="logout.php">Logout</a>
              <p class="s">Hello There, <?php echo $user_data['user_name']; ?> ✨✨</p>

            </nav>
        </section>
</body>
</html>