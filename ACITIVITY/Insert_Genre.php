<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>BOOKS_PRACTICE</title>
</head>



<body>
  <body>
  <form method = "POST" id = "Form">
    <H2>NEW GENRE</H2>
    <input type = "Text" name = "New_Genre" id="New_Genre" placeholder="Enter GENRE"> 
      <input type = "submit">
  </form>   

  <br>
  <br>

  

  <div id="postData"></div>




    <script>
    $(document).ready(function(){
        $('#Form').submit(function(e){
            e.preventDefault();

           var New_Genre  = $("#New_Genre").val();


            $.ajax({
                url: "get_data_Genre.php",
                type: "POST",
                data: {New_Genre:New_Genre },
                success: function(response){
                    $("#postData").html(response);
                },
            });
        });
    });
    </script>

       
</body>

</html>