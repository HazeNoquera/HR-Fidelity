<?php
$name = "Justine";
$Age = 21;

   setcookie("name", $name, time()+3600, "/","", 0);
   setcookie("age", $Age, time()+3600, "/", "",  0);
?>
 
 <html>
   
   <head>
      <title>COOKIES</title>
   </head>
   
   <body>
      
      <?php
         if( isset($_COOKIE["name"]))
            echo "Welcome " . $_COOKIE["name"] . ", You are " .$_COOKIE["age"] . " years old";
         
         else
            echo "Sorry... Not recognized" . "<br />";
      ?>
      
   </body>
</html>