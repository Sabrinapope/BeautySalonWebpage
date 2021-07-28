<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fname`, `lname`,`email`, `phone` ) VALUES ('0', '$fname', `$lname`, '$email', '$phone')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>