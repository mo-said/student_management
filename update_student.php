
<?php
  
include("config.php");

$id=$_POST["id"];
$name = $_POST["name"];
$email =$_POST["email"];
$number = $_POST["num"];

$sql = " UPDATE student SET name='$name' , email='$email' , num='$number' WHERE id='$id'";

echo $sql;
/*$sql="CREATE TABLE student (
	name VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	num INT NOT NULL
	);";*/


$rel=mysql_query($sql ,$conn);
if (!$rel) {
	echo "not done";
}else{
	header( 'Location: /student_management/students.php' );
}

mysql_close($conn);

?>
