<?php

require('connection.php');

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Name = $_GET['Name'];
$Gender = $_GET['Gender'];
$Age = $_GET['Age'];
$Contact_Number = $_GET['Contact_Number'];

$sql =  
$st_check=$conn->prepare("SELECT * FROM tbl_Users where Username = ? and Password = ?" );
$st_check->bind_param("ss",$_GET["Username"],$_GET["Password"]);
$st_check->execute();
$rs=$st_check->get_result();
if ($rs->num_rows == 0) 
  echo "Login Successfully";
else 
  echo "Error: " . $sql . "<br>" . $conn->error;


$conn->close();
