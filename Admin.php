
<?php
session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>index form</title>
<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

  <style type="text/css">

    a{
      margin-left: 90px;
      color: white;
    }
    header{
      background-color: gray;
      height: 60px;
      margin-left: 90px;
      text-align: center;
      margin: auto;
      margin-top: 5px;
      font-family: time new romans;
      padding: 20px;
    }

    .container{
    
      width: 70%;
      min-height: 300px;
      margin-top: 10px;
      margin: auto;
      margin-left: 205px;
      background-color:cyan;

    }
    #nav{
      background-color:black ;
      height: 297px;
     
    }
    
  </style>

</head>
<body style="background-color: lightgray">
  <header><h3>WEDDING DRESING ONLINE SYSTEM</h3></header>

<nav class="navbar navbar-expand-md bg-dark navbar-dark" style=";
  margin: auto; margin-top:10px">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Admin.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ABOUT.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CONTACTS.php">CONTACT</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="SERVICES.php">SERVICE</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="NEWS.php">NEWS</a>
      </li>
    </ul>
  </div>  
</nav>
<br>

<div class="container">
<div class="row">
  <div class="col-sm-12 col-md-3 col-lg-3 ">
  <div id="nav">
    <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="Admin.php">Admin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="v.php">View Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="addDressing">Registor Dressing</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="dressUpdate.php">Update Dressing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Logout</a>
    </li>
  
  </ul>
  

</div>
</div>
<div class="col-sm-12 col-md-7 col-lg-7 mycontent">
<div class="body">

</div>
</div>
  </div>
</div>
  
  <div  style="text-align: center; 
  margin-top: 10px;height: 40px;background-color: gray;">
  <i>Copy@right by @nassad@</i>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $("#addDressing").click(function(){
      $(".mycontent").load("AddDressing.php");
    });
  });
</script>



</body>
</html>