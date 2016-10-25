<?php

include("config.php");


$sql = "ALTER TABLE student ADD department_id INT ,
		ADD CONSTRAINT FOREIGN KEY (department_id) REFERENCES departments(id);";


 


$rel=mysql_query($sql , $conn);
if (!$rel) {
	echo " Not Done !! ..";
} else {
	echo "done !!";
}



mysql_close($conn);

?>