<?php
session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    form order
  </title>
  <script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

  <style type="text/css">
     a{
      margin-left: 90px;
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
      font-style: italic;
    }

  </style>
</head>
<body>
 <header><h3>WEDDING DRESING ONLINE SYSTEM</h3></header>

<nav class="navbar navbar-expand-md bg-dark navbar-dark" style=";
  margin-top: 10px;">
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
  </div>  
</nav>
<br><div class="row">

   <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

  <form>
   <table class="table table-striped">
      <h2 style="text-align: center;font-style: italic;font-family: time new romans">VIEW ORDER</h2>
      <thead >
        <tr style="background: lightblue;">
          <th>Full Name</th>
        <th>Email</th>
        <th>Address</th>
         <th>Name of Dressing</th>
          <th>Size</th>
           <th>Type</th>
            <th>Color</th>
             <th>Total Dressing</th>
        </tr>
      </thead>
      <tbody><?php
include("connection.php");
?>
<?php 
    $sql="SELECT cName,cEmail,cAddress,dName,dSize,dType,dColor,totalDressing,orderID FROM customer,`order`,dressing WHERE customer.cID=`order`.`cID` AND dressing.dressID=`order`.`dresinID";
    $stmt=$conn->query($sql);

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo(htmlentities($row['cName']));
    echo("</td><td>");
    echo (htmlentities($row['cEmail']));
    echo("</td><td>");
    echo (htmlentities($row['cAddress']));
    echo("</td><td>");
    echo (htmlentities($row['dName']));
    echo("</td><td>");
    echo (htmlentities($row['dSize']));
    echo("</td><td>");
    echo (htmlentities($row['dType']));
    echo("</td><td>");
    echo (htmlentities($row['dColor']));
    echo("</td><td>");
    echo (htmlentities($row['totalDressing']));
    echo("</td></tr>\n");
    }
 ?>
   
 </tbody>
         
</table>
</form>
</div>

<div  style="text-align: center; 
  margin-top: 10px;height: 40px;background-color: gray; color: white;">
  <i >Copy@right by @nassad@</i>
</div>

</body>
</html>



