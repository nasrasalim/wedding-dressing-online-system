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
  <script type="text/javascript" src="script.js"></script>
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
<br><div class="row">

   <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

  <form action="updateHandler.php">
   <table class="table table-striped">
      <h2 style="text-align: center;font-style: italic;font-family: time new romans">UPDATE DRESSING</h2>
      <thead >
        <tr style="background: lightblue;">
         <th>Name of Dressing</th>
          <th>Size</th>
           <th>Type</th>
            <th>Color</th>
             <th>Total Dressing</th>
             <th>Edit</th>
             <th>Delete</th>
        </tr>
      </thead>
      <tbody><?php
include("connection.php");
?>
<?php
    $sql="SELECT * FROM dressing";
    $stmt=$conn->query($sql);

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
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
    echo("</td><td>");
    echo('<a href="updateDressing.php?dress='.$row['dressID'].'" name="edit" style="margin-left:0px;"> <b> Edit </b> </a>');
    echo("</td><td>");
    echo('<a onclick="return confirmDelete();" href="deleteHandler.php?dress='.$row['dressID'].'" name="delete" style="margin-left:0px;"> <b> Delete </b></a>');
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



