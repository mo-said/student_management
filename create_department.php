<?php

include("config.php");

$name = $_POST["name"];
$description =$_POST["description"];

$sql = " INSERT INTO departments ( name , description) VALUES ('$name', '$description') ";

/*$sql="CREATE TABLE departments (
	  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  	  name VARCHAR(255) NOT NULL,
      description VARCHAR(255)	
      ); ";
*/
$rel=mysql_query($sql , $conn);
if (!$rel) {
	echo " Not Done !! ..";
} else {
	header( 'Location: /quiz/departments.php' );
}

mysql_close($conn);

?>