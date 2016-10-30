<?php
  
include("config.php");
include("check_session.php");

?>


<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/student_management/background.css">

  <style type="text/css"></style>
  <style>
   body {
    height: 100%;
    color: white;
  }
  .table{
    background-color: grey;
  }
  </style>
</head>
<body>
<div class="pull-right">
 <form method="post" action="/student_management/logout.php">
          <button class="btn btn-danger"type="submit">log out</button>

    </form>
    </div>

    <div class="pull-left">
 <form method="post" action="/student_management/index.php">
          <button class="btn btn-primary"type="submit">Home</button>

    </form>
    </div>
<div class='container'>

  		<h2>Result</h2>
		<table class='table table-bordered'>
		<thead>
		<tr>
        <th>ID</th>
        <th>Name</th>
        <th>EMAIL</th>
        <th>Number</th>
        <th>Department</th>
        <th> </th>
        <th> </th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql="SELECT student.* , departments.name AS 'department_name' FROM student INNER JOIN departments ON student.department_id = departments.id ;";
		  
        if($rel=mysql_query($sql,$conn)){
        while($res=mysql_fetch_array($rel)){
        ?>	  
        <tr>
        <td><?php echo $res['id'] ?></td>
        <td><?php echo $res['name'] ?></td>
        <td><?php echo $res['email'] ?></td>
        <td><?php echo $res['num'] ?></td>
        <td><?php echo $res['department_name'] ?></td>
        <td><a  class="btn btn-warning" href=<?php echo "/student_management/edit_student.php?id=".$res['id']?> >Edit</a></td>
        <td>
          <form class="delete form-horizontal" method="post" action="/student_management/delete_student.php" >    
             <!-- da input hidden for ID -->
            <input type="hidden" name="id" value=<?php echo $res['id']; ?> >
            <div class="col-sm-offset-6 col-sm-10">
              <button type="submit" class="btn btn-danger" >Delete</button>
            </div>
          </form>
        </td>

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
    <a href="/student_management/new_student.php" class="st btn btn-success col-md-offset-5 ">Create New Student</a>
  </div>
</div>

</body>
</html>
<?php
mysql_close($conn);
?>

<script type="text/javascript">
$(document).ready(function(){
  $(".delete").submit(function(event){
    event.preventDefault();
    var delt=confirm('Are you sure you want to delete this item?');
    var those=this;
    if (delt) {
      $.ajax ({
                type:"post",
                url:"/student_management/delete_student.php",
                data: {id: $(this).children("input").val() },
                success:  function(response){
                    response = JSON.parse(response);
                    if(response["status"] == "good"){
                      $(those).parents("tr").remove();
                    }else{
                      alert("Something went wrong");  
                    }

                    
                    }
                

            });
    }
  });

  $(".check_admin").change(function(){
    $(this).parent("form").submit()
  })
});

</script>