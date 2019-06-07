<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 <br>
 <br>
<div class="container">
<div class="row">
<div class="col-sm-12">

<div class="panel panel-danger">
      <div class="panel-heading">Online Quiz</div>
      <div class="panel-body">Quiz in php</div>
    </div>
	</div>
	</div>
	</div>
	
 
<div class="container">
<div class="row">
<br>
<br>
<div class="col-sm-4">
  <div class="panel panel-info">
  <div class="panel-heading">Login Form</div>
  <div class="panel-body">
  <?php
  if(isset($_GET['run']) && $_GET['run']=="failed")
  {
	  echo "Your email or password is incorrect";
  }
  ?>
  <form role ="form" action="signin_sub.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="e" id="email" placeholder="Enter email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  </div>
  </div>
  
  
  
  <div class="col-sm-4">
  <div class="panel panel-info">
  <div class="panel-heading">Signup Form</div>
  <div class="panel-body">
  <?php
  if(isset($_GET['run']) && $_GET['run']=="success") 
  {
	  echo "<mark>Successfully Registered</mark>";
	  } 
?>
  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="n" id="name" placeholder="Enter name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="e" id="email" placeholder="Enter email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required>
    </div>
	<div class="form-group">
      <label for="pwd">Upload your image:</label>
      <input type="file" class="form-control" name="img">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
</div>
</div>
</div>
</body>
</html>
