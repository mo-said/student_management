<?php
            
include("config.php");
session_start();
   if (isset($_SESSION["user"])) {
header("location: index.php");
}
$done="";
//$_server 3lshan lw 3ayz a3ml post F nafs el page ..sabta keda 
if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form 

      $myusername = mysql_real_escape_string($_POST['username']);
      $mypassword = mysql_real_escape_string($_POST['passw']);
      
      $sql = "SELECT id FROM student WHERE name = '$myusername' and num = '$mypassword' ";
      $sql_admin = "SELECT id FROM student WHERE name = '$myusername' and num = '$mypassword' AND admin=1";

      $rel = mysql_query($sql,$conn);
      $rel_admin = mysql_query($sql_admin,$conn);
   
      if (mysql_num_rows($rel) > 0) {
        
         $_SESSION['user'] = $myusername;
        if (mysql_num_rows($rel_admin) > 0) {
         $_SESSION['admin']= 1;
         
          header("location: home_admin.php");
         }else{

         header("location: index.php");
        }
    }else{
  
         $done=  "Can't login"; 
   
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  h2 {text-align: center}</style>
</head>
<body>

    <div class="container">

      <form class="form-signin" method="post" action="" >
        <h2 class="form-signin-heading alert-success"><b>Please log in</b></h2>
        <label for="username" >user name</label>
        <input type="text" name="username" class="form-control" placeholder="Email address" required/>
        <label for="passw" >Password</label>
        <input type="password" name="passw" class="form-control" placeholder="Password" required/>
        
        <div class="checkbox"><label>
            <input type="checkbox" value=" "> Remember me</label>
        </div>
        
        <button class="btn" type="submit">Sign in</button>
        <a class="btn" href="/quiz/new_student.php">sign up</a>
      </form>
                   
    </div> <!-- /container -->
            <div > <?php  echo $done;  ?></div>

</body>
</html>
<?php

mysql_close($conn);


?>