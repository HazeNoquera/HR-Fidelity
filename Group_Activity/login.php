<?php
  
  if(isset($_COOKIE['username'])){
    setcookie("username", "", time()-10, "/", "",  0 );
  }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <marquee><h1>ACTIVITY BY GROUP (?)</h1></marquee>
    <div class="formContainer">
        <form method="POST">
            <input class="textbox" type="text" name="email" placeholder="Enter Email"></br>
            <input class="textbox" type="password" name="pwd" placeholder="Enter Password"><br>
            <input type="submit" value="Login">
        </form>
    </div>

    <?php
     
        if(isset($_POST['email']) ){
            if($_POST['email'] === "admin" && $_POST['pwd'] === "admin123"){
                //Creating cookies
                setcookie("username", $_POST['email'],time()+10, "/", "",  0);
               header("Location: /Group_Activity/homepage.php");
            }
        }
    ?>
</body>
</html>