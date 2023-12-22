 <?php

    if(isset($_POST['Username']) && isset($_POST['Password'])){
       $username = $_POST['Username'];
       $Password = $_POST['Password'];

        if($username === "" || $Password === ""){
            echo "Enter Your Username and Password";
        }

        else{

            if($username === "Admin" && $Password === "admin")
            {
                echo "Welcome Admin";
            }
            else
            {
                echo "Incorrect Credentials";
            }


        }

    }
    ?>