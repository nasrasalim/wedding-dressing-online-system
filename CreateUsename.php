<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">


  <style type="text/css">

  	.container{
  		border: 1px solid;
  		width: 25%;
  		margin-top: 40px;
  		background-color: cyan;
  		border-radius: 2px ;
  	}
  	label{
  		margin-top: 20px;
  	}
  	input{
  			margin-top: 20px;

  	}


  </style>

</head>
<body>
	<div class="container">
  <h2 style="text-align: center;font-family: time new romans;font-style: italic;margin-top: 10px;">USERNAME AND PASSWORD FORM</h2>
  <form action="userlogin.php" method="POST">
    <div class="form-group">
      <label for="email">User Name:</label>
      <input type="text" class="form-control" id="User" placeholder="Enter User Name" name="usrn" required="">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="psswd" required="">
    </div>
    <div class="form-group">
      <label for="role">Role:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Role" name="rol" required="">
    </div>


    <button type="submit" class="btn btn-primary" name="Save">SEND</button><br>
    
  </form>
</div>


</body>
</html>