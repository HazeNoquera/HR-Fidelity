<?php

require('connection.php');
$Name = $_GET['Name'];
$Username = $_GET['Username'];
$Password = $_GET['Password'];
$Name = $_GET['Name'];
$Gender = $_GET['Gender'];
$Age = $_GET['Age'];
$Contact_Number = $_GET['Contact_Number'];

$sql = "INSERT INTO tbl_users (Username,Password,Name,Gender,Age,Contact_Number,Name)";

if ($conn->query($sql) === TRUE) {
  echo "Update Sucessfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
