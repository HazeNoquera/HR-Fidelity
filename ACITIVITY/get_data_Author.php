<?php 
		
    $username = "root";
    $servername = "localhost";
    $password = "";
    $dbname = "books";

    $conn = mysqli_connect($servername,$username,$password,$dbname,3307);

    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
    $New_author = $_POST['New_Author'];


    $sql = "INSERT INTO tbl_author (author) VALUES ('$New_author')";

    if(mysqli_query($conn,$sql)){
        echo "New Record Created successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>"  . mysqli_error($conn);
    }

    mysqli_close($conn);


    

?>