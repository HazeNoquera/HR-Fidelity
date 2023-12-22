<?php

require('connection.php');

$student_no = $_GET['student_no'];

$sql = "DELETE FROM tbl_students where student_no = '$student_no'";

if ($conn->query($sql) === TRUE) {
  echo "deleted Sucessfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
