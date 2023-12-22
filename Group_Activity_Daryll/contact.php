<?php 
  if(!isset($_SESSION))
  {
      session_start();
  }


    if(!isset($_COOKIE["email"]))
    {
        header("Location: /Group_Activity_Daryll/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>Contact</title>
</head>
<body>
    <center><h1>Contact</h1></center>
    <header>
    <nav>
        <div width="200px"></div>
        <div>
            <ul>
                <li><a href="/Group_Activity_Daryll/homepage.php">Home Page</a></li>
                <li><a href="/Group_Activity_Daryll/contact.php">Contact Page</a></li>
                <li><a href="/Group_Activity_Daryll/about.php">About Page</a></li>
                <li><a href="/Group_Activity_Daryll/projects.php">Projects Page</a></li>
                <li><a href="/Group_Activity_Daryll/login.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    </header>
</body>
</html>