<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="js/jquery-1.10.1.2.js" type = "text/javascript"></script>
  <title>Converter</title>
</head>
<body>

<script>
type="text/javascript">
$(document).ready(function(){
    $('#Form').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: "get_data.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(data){
                $("#postData").html(data);
            },
            error: function(){
                alert("Form submission failed!");
            }
        });
    });
});
  

  </script>

  <?php
  
  ?>

  <form method = "POST" id = "Form">
    <input type = "text" name = "Value" placeholder="Enter a number"> 
    <select name = "CONVERT_TO" id = "CONVERT_TO">
        <option value="default">Select Unit</option>
        <option value = "CM">Inches to CM</option> 
        <option value = "Foot">Foot to Inches</option> 
        <option value = "Meter">Kilometer to Meter</option> 
    </select>
      <input type = "submit">
  </form>   
        <?php 
		if(isset($_POST["Value"])){
            $Value = $_POST["Value"];
            $Select = $_POST["CONVERT_TO"];
            
            if ($Select == "CM"){
                Converter($Value,2.54,"Centimeters");
            }
            else if ($Select == "Foot"){
                Converter($Value,12,"Feet");
            }
            else if ($Select == "Meter"){
                Converter($Value,1000,"Meters");
            }
            else if ($Select == "0"){
              echo"Select Unit";
              }
                else
                {
                    echo"Invalid"; 
                }
        }
      function Converter($Value,$unit,$UnitName){
        $total = $Value * $unit;
        echo $total ." ". $UnitName ;
      }
?>
  <script src="script.js"></script>
</body>

</html>