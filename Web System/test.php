<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Converter</title>
</head>

<body>
  <form method = "GET">
    <input type = "text" name = "Inches" placeholder="enter a number"> 
      <input type = "submit">
  </form>

   
        
      
        <?php 
		
		if(isset($_GET["Inches"])){

		
		$inches = $_GET["Inches"];
		$cm = $inches * 2.54;
      
      echo($cm . "CM");

      }
?>


  <script src="script.js"></script>
</body>

</html>