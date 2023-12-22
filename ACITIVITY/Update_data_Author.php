<?php 
		
    $username = "root";
    $servername = "localhost";
    $password = "";
    $dbname = "books";

    $conn = mysqli_connect($servername,$username,$password,$dbname,3307);

    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    $Update_Author = $_POST['Update_Author'];


    $sql = "UPDATE tbl_author SET author = '$Update_Author' ";

    if(mysqli_query($conn,$sql)){
        echo "updated successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>"  . mysqli_error($conn);
    }




    mysqli_close($conn);


    

?>