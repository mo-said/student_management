
<?php
  
include("config.php");

$id=$_POST["id"];
$sql = " DELETE FROM student WHERE id='$id' ";


/*$sql="CREATE TABLE student (
	name VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	num INT NOT NULL
	);";*/


mysql_select_db('instacular');
$rel=mysql_query($sql ,$conn);
$arr = "";
if (!$rel) {
	$arr = array('status'=>'bad');
	echo json_encode($arr);
}else{
	$arr = array('status'=>'good');
	echo json_encode($arr);	
}


mysql_close($conn);


?>