<?php

if(!isset($_COOKIE['username'])){

    header("Location: /ACTIVITYcookies/Login.php");
  }else
  {
    header("Refresh:3600");
  }

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>HELLO CONTACTS</h1>
    
</body>
</html>