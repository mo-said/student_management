<?php
include("check_session.php");
  
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  h2 {
  	text-align: center;
  }
  </style>
</head>
<body>

<div class="container">
	    <div class="col-sm-offset-2 col-sm-10">
  <h2><u>Edit your Information</u></h2>
  		</div>
  <form class="form-horizontal" method="post" action="/quiz/update_student.php">
        <?php
        $id=$_GET['id'];
      $sql="SELECT * FROM student WHERE id='$id' ";
    
    if($rel=mysql_query($sql,$conn)){
        if($res=mysql_fetch_array($rel)){
        ?>    

   <!-- da input hidden for ID -->
      <div class="form-group">
                <input type="hidden" name="id" class="form-control" value=<?php echo $_GET['id']; ?>>
      </div>
	    <div class="form-group">
      			<label class="col-sm-2 control-label" for="name">Name:</label>
      			<div class="col-sm-10">
      				<input type="text" name="name" class="form-control"  placeholder="Enter your name" value = <?php echo $res['name']; ?> >
      			</div>
    	</div>
    	<div class="form-group">
     		<label class="col-sm-2 control-label" for="email">Email:</label>
     		<div class="col-sm-10">
      			<input type="email" class="form-control" name="email"  value =<?php echo $res['email']; ?> >
      		</div>
      	</div>

      	
      	<div class="form-group">
      		<label class="col-sm-2 control-label" for="num">Number:</label>
      		<div class="col-sm-10">
      			<input type="text" class="form-control" name="num" placeholder="Enter your Number" value = <?php echo $res['num']; ?> >
 			</div>   	
    	</div>
    	    <div class="col-sm-offset-6 col-sm-10">
    			<button type="submit" class="btn " >Update</button>
  			</div>
              <?php
        } 
}
?>
  </form>
  </div>

<div class="container">
  <form class="form-horizontal" method="post" action="/quiz/delete_student.php">    
      
      <!-- da input hidden for ID -->
                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?> >
          <div class="col-sm-offset-6 col-sm-10">
          <button type="submit" class="btn btn-danger" >Delete</button>
        </div>
  </form>
</div>



</body>
</html>
<?php
mysql_close($conn);
?>