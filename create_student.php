<?php
  
include("config.php");


$name = $_POST["name"];
$email =$_POST["email"];
$number = $_POST["num"];
$department= $_POST["department_id"];

$sql = " INSERT INTO student ( name , email , num , department_id ) VALUES ('$name', '$email', '$number' , '$department' ) ";


/*$sql="CREATE TABLE student (
	id INT NOT NULL AOUT
	name VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	num INT NOT NULL
	);";*/


mysql_select_db('instacular');
$rel=mysql_query($sql ,$conn);
if (!$rel) {
	echo "not done";
}else{
	// TODO: Redirect to /student_management/students.php
	header( 'Location: /student_management/students.php' );
}

mysql_close($conn);

?>
