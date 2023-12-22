<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
 

<form method = "POST" id = "Form">
    <input type = "text" name = "Username" id = "Username" placeholder="Enter a Username"> 
    <input type = "Password" name = "Password" id = "Password" placeholder="Enter Your password"> 
      <input type = "submit">
  </form>   
  <div id = "Data"> </div>


 <script>
        $(document).ready(function(){
            $('#Form').submit(function(e){
                e.preventDefault();

                var Username = $("#Username").val();
                var Password = $("#Password").val();


                $.ajax({
                    url: "Login_Ajax.php",
                    type: "POST",
                    data:{Username: Username , Password: Password},
                    success:function(response){
                        $('#Data').html(response);
                    },
                });

            });
        });
  </script>



   
</body>
</html>