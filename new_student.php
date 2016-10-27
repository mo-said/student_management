<?php
include("config.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/student_management/background.css">

  <style type="text/css">
    body {
    height: 100%;
    color: white;
  }
  h2 {
  	text-align: center;
    background-color: grey;
     }
  </style>
</head>
<body>
<?php
 session_start();

  if(isset($_SESSION["user"])) {
?>
<div class="pull-right">
  <form method="post" action="/student_management/logout.php">
    <button class="btn btn-danger"type="submit">log out</button>
  </form>
</div>
<?php } ?>

<div class="pull-left">
 <form method="post" action="/student_management/index.php">
    <button class="btn"type="submit">Home</button>
 </form>
</div>

<div class="container">
	<div class="col-sm-offset-2 col-sm-10">
    <h2><u><b>Enter Student Information</b></u></h2>
  </div>
  <form class="form-horizontal" method="post" action="/student_management/create_student.php">
	   
    <div class="form-group">
        <label class="col-sm-2 control-label" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" name="name" class="form-control"  placeholder="Enter your name">
      </div>
    </div>
    	<div class="form-group">
     		<label class="col-sm-2 control-label" for="email">Email:</label>
     		<div class="col-sm-10">
      			<input type="email" class="form-control" name="email" placeholder="Enter your email">
      		</div>
      	</div>

      	
      	<div class="form-group">
      		<label class="col-sm-2 control-label" for="num">Number:</label>
      		<div class="col-sm-10">
      			<input type="text" class="form-control" name="num" placeholder="Enter your Number">
 			    </div>   	
    	</div>
      <div class=" form-group">
            <label class="col-sm-2 control-label" for="department_id">Department:</label>
            <div class="col-sm-10">
            <select class="form-control " name="department_id">
              <?php
              $sql="SELECT * FROM departments ";
              if($rel=mysql_query($sql,$conn)){
              while($res=mysql_fetch_array($rel)){
              ?>
            <option value=<?php echo $res['id']; ?>><?php echo $res['name']; ?></option>
            <?php
              }
            }
            ?>
            </select>
            </div>
         
        </div>


    	    <div class="col-sm-offset-2 col-sm-10">
    			<button type="submit" class="btn btn-success" >Create</button>
  			</div>
  </form>
  
</div>

</body>
</html>

<?php
mysql_close($conn);
?>
