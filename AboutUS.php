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
      color: white;
    }

    .container-fluid{
    
      width: 70%;
      min-height: 300px;
      margin-top: 10px;
      margin: auto;
      margin-left: 205px;
      background-color:cyan ;

    }
    #nav{
      background-color:black ;
      height: 297px;
      width: 55%;
    }
    
  </style>

</head>
<body style="background-color: lightgray">
  <div class="row">
   <div class="col-sm-12 col-md-12 col-lg-12 mycontent">
  <header><h3>WEDDING DRESING ONLINE SYSTEM</h3></header>
</div>


<div class="col-sm-12 col-md-12 col-lg-12 mycontent">
<nav class="navbar navbar-expand-md bg-dark navbar-dark" style="
  margin: auto; margin-top: 10px;height: 100px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
   
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUS.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Contact.php">CONTACT</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="Service.php">SERVICE</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="New.php">NEWS</a>
      </li>
    </ul>
  </div>  
</nav>
<br>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mycontent">
      <div class="body">

        <h3>WELCOME TO NASSAD COMPANY</h3>
        <h5>Habar Yako!</h5>
        <p>Karibu katika kampuni yetu inayoshuhulika na uuzaji wa nguo tofaut za kike za harusi</p>
        <p>Tuna uza nguo za aina tofaut nzuri na zinazovutia kama vile:</p><p>
        <ul>
          <li>Ballgown</li>
          <li>A-line</li>
          <li>Modified A-Line</li>
          <li>Trumpet</li>
          <li> Mermaid</li>
          <li>Sheath</li>
          <li>Tea-Lengh</li>
          <li> Mini</li>
          </ul>
        </p>
        <p>Tunauza kwa jumla na reja reja ,tunatoa punguzo %5 kwa kila mteja wetu wa kudumu</p><p>NASSAD company wanakufikishia mzigo wako popote ulipo pia wana toa huduma zao masaa ishirini na nne</p>
        <p>Nyote mnakaribishwa</p>
  </div>
    
    


</div>
</div>
</div>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-12 mycontent">
  <div  style="text-align: center; 
  margin-top: 10px;height: 40px;background-color: gray;">
  <i style="color: white">Copy@right by @nassad@</i>
</div>
</div>


</body>
</html>