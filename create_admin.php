<?php
  
include("config.php");
if (is) {
	# code...
}
$admin =isset($_POST["admin"]) ? 1  : 0;
$id= $_POST["id"];

$sql = "UPDATE student SET admin='$admin' WHERE id ='$id' ";
echo $sql;

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

	
	header( 'Location: /student_management/home_admin.php' );

}
mysql_close($conn);

?>
