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
    <H2>NEW AUTHOR</H2>
    <input type = "Text" name = "New_Author" id="New_Author" placeholder="Enter Author Name"> 
      <input type = "submit">
  </form>   
  <br>
  <br>

  

  <div id="postData"></div>




    <script>
    $(document).ready(function(){
        $('#Form').submit(function(e){
            e.preventDefault();

           var New_Author  = $("#New_Author").val();


            $.ajax({
                url: "get_data_Author.php",
                type: "POST",
                data: {New_Author: New_Author},
                success: function(response){
                    $("#postData").html(response);
                },
            });
        });
    });
    </script>

       
</body>

</html>