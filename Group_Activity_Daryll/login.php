<?php

    if(isset ($_COOKIE["email"])){
        setcookie("email", "",time()-10, "/","",0);
        header("Refresh:0");
        
    }
    


?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Login Page</title>
</head>
<body  >

    <div class="formContainer">
        <form method="POST" >
            <input class="textbox" type="text" name="email" placeholder="Enter Email"></br>
            <input class="textbox" type="password" name="pwd" placeholder="Enter Password"><br>
            <input type="submit" value="Login">
        </form>
    </div>

    <?php
     

        if(isset($_POST['email']) ){
            if($_POST['email'] === "admin" && $_POST['pwd'] === "admin123"){
                setcookie("email", $_POST['email'],time()+10, "/","",0);
                header("Location: /Group_Activity_Daryll/homepage.php");
            }
        }

    ?>

</body>
</html>