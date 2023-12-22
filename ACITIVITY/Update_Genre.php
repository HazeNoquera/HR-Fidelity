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
  <form method = "POST" id = "Form">
    <H2>UPDATE AUTHOR</H2>
    <input type = "Text" name = "Update_Genre" id="Update_Genre" placeholder="Enter Genre"> 
      <input type = "submit">
  </form>   

  <br>
  <br>
  

  <div id="postData"></div>




    <script>
    $(document).ready(function(){
        $('#Form').submit(function(e){
            e.preventDefault();

           var Update_Genre  = $("#Update_Genre").val();
           alert(Update_Genre);

            $.ajax({
                url: "Update_data_Genre.php",
                type: "POST",
                data: {Update_Genre: Update_Genre},
                success: function(response){
                    $("#postData").html(response);
                },
            });
        });
    });
    </script>

       
</body>

</html>