<?php 

// save other page/form data in vars 
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

// connect Datebase
include 'include/config.php';


// Save Querry 
$sql = "INSERT INTO `student`(`sname`, `saddress`, `sclass`, `sphone`) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";


$result = mysqli_query($con,$sql) or die("Query Unsuccessful.");

header("location: http://localhost/crud_html/index.php");

$con->close();

?>