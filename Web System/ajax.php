<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Converter</title>
</head>


<body>
  <form method = "POST" id = "Form">
    <input type = "Number" name = "User_Value" id="User_Value" placeholder="Enter a number"> 
    <select name = "Convert_to"  id = "Convert_to">
        <option value="default">Select Unit</option>
        <option value = "CM">Inches to CM</option> 
        <option value = "Foot">Foot to Inches</option> 
        <option value = "Meter">Kilometer to Meter</option>   
    </select>
      <input type = "submit">
  </form>   

  <div id="postData"></div>
    
    <script>
    $(document).ready(function(){
        $('#Form').submit(function(e){
            e.preventDefault();

           var User_Value  = $("#User_Value").val();
           var Convert_to  = $("#Convert_to").val();


            $.ajax({
                url: "get_data.php",
                type: "POST",
                data: {Data_value: User_Value, Data_Convert_to:Convert_to },
                success: function(response){
                    $("#postData").html(response);
                },
            });
        });
    });
    </script>

       
</body>

</html>