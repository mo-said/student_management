
<?php
include("check_session.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/student_management/background.css">
<style>
  body {
    height: 100%;
    
  }
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid grey;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}

</style>
</head>
<body lang="en" onload="myFunction()" style="margin:0;">

<div id="loader" class='se-pre-con'>
</div>

<div style="display:none;" id="myDiv" class="animate-bottom">
  <div class="pull-right">
    <form method="post" action="/student_management/logout.php">
        
        <button class="btn btn-danger"type="submit">log out</button>

    </form>
  </div>
  <div class="jumbotron text-center">
<i class="glyphicon glyphicon-user"></i>
  <div><b> Welcome <?php echo $_SESSION['user']; ?></b></div>
    <h1><b>welcome</b></h1>
    <p>  To create and edit your Information </p>
    </div>
  <div class="container">
    <div class="row">
      <a href="/student_management/students.php" class="btn btn-success col-md-6">Students</a>
      <a href="/student_management/departments.php" class="btn btn-warning col-md-6">departments</a>

   
    </div>

</div>




</div>





<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

myFunction();

</script>



</body>
</html>

