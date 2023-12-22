<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>BOOKS_PRACTICE</title>
</head>

<?php 
		
    $username = "root";
    $servername = "localhost";
    $password = "";
    $dbname = "books";

    $conn = mysqli_connect($servername,$username,$password,$dbname,3307);

    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    $sql = "SELECT author FROM tbl_author WHERE id = '".$_GET['id'] . "'";
    $result = mysqli_query($conn,$sql);


    if(mysqli_num_rows($result)>0){
        if($row = mysqli_fetch_assoc($result)){
            $author = $row["author"];
        }
    } 
    ?>


<body>
  <form method = "POST" id = "Form">
    <H2>UPDATE AUTHOR</H2>
    <input type = "Text" name = "Update_Author" id="Update_Author" value = "<?php echo $author?> "> 
      <input type = "submit">
  </form>   

  <br>
  <br>
  

  <div id="postData"></div>




    <script>
    $(document).ready(function(){
        $('#Form').submit(function(e){
            e.preventDefault();

           var Update_Author  = $("#Update_Author").val();
          alert(Update_Author);

            $.ajax({
                url: "Update_data_Author.php",
                type: "POST",
                data: {Update_Author: Update_Author},
                success: function(response){
                    $("#postData").html(response);
                },
            });
        });
    });
    </script>

       
</body>

</html>