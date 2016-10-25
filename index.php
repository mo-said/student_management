<?php
include("check_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="pull-right">
 <form method="post" action="/quiz/logout.php">
          <button class="btn btn-danger"type="submit">log out</button>

    </form>
    </div>
<div class="jumbotron text-center">
<div>
  
  Welcome <?php echo $_SESSION['user']; ?>

</div>
  <h1><b>welcome</b></h1>
  <p>  To create and edit your Information </p>

</div>
  
<div class="container">
  <div class="row">
    <a href="/quiz/students.php" class="btn btn-success col-md-6">Students</a>

    <a href="/quiz/departments.php" class="btn btn-warning col-md-6">departments</a>

   
  </div>

</div>

</body>
</html>

