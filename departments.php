<?php
include("check_session.php");
  
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>departments</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css"></style>
</head>
<body>
<div class="pull-right">
 <form method="post" action="/quiz/logout.php">
          <button class="btn btn-danger"type="submit">log out</button>

    </form>
    </div>

    <div class="pull-left">
 <form method="post" action="/quiz/index.php">
          <button class="btn"type="submit">Home</button>

    </form>
    </div>
<div class='container'>
  		<h2><b>departments</b></h2>
		<table class='table table-bordered'>
		<thead>
		<tr>
        <th>ID</th>
        <th>Name</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql="SELECT * FROM departments ";
		
    if($rel=mysql_query($sql,$conn)){
        while($res=mysql_fetch_array($rel)){
        ?>	  
        <tr>
        <td><?php echo $res['id'] ?></td>
        <td><?php echo $res['name'] ?></td>
        <td><?php echo $res['description'] ?></td>
      	</tr>
        <?php
        } 
}
?>
    </tbody>
  </table>
</div>
<div class="container">
  <div class="row">

    <a href="/quiz/new_department.php" class="dep btn btn-warning col-md-offset-5">Create New Department</a>
  </div>
</div>
</body>
</html>

<?php
mysql_close($conn);
?>