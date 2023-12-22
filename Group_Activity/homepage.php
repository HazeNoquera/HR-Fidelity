<?php 
 if(!isset($_COOKIE['username'])){
    header("Location: /Group_Activity/Login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>Home Page</title>
</head>
<body>
    <center><h1>Home Page</h1></center>
    <header>
    <nav>
        <div width="200px"></div>
        <div>
            <ul>
                <li><a href="/Group_Activity/homepage.php">Home Page</a></li>
                <li><a href="/Group_Activity/contact.php">Contact Page</a></li>
                <li><a href="/Group_Activity/about.php">About Page</a></li>
                <li><a href="/Group_Activity/projects.php">Projects Page</a></li>
                <li><a href="/Group_Activity/login.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    </header>
</body>
</html>