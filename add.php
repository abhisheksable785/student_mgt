<?php
// Establish a connection to the database
$con = mysqli_connect("localhost", "root", "", "student_reg");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = mysqli_real_escape_string($con, $_POST['name']);
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$marks = mysqli_real_escape_string($con, $_POST['marks']);

// Insert data into the database
$query = "INSERT INTO `student_table`(`Sr.No`, `Name`, `Mobile_NO`, `City`, `Marks`) VALUES (NULL, '$name', '$mobile', '$city', '$marks')";


// Close the database connection
mysqli_close($con);
?>
