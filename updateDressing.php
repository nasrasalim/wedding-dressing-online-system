<?php
session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>registration form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">


  <style type="text/css">

    .container{
      border: 1px solid;
      height: 450px;
      width: 30%;
      margin-top: 20px;
      background-color: cyan;
      border-radius: 2px ;
    }



  </style>
<?php 
if(isset($_GET['dress'])){
  $id=$_GET['dress'];
  include("connection.php");
    $sql="SELECT * FROM dressing WHERE dressID=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':id'=>$id));
    $fetch=$stmt->fetch(PDO::FETCH_ASSOC);
  }
 ?>
</head>
<body style="background-color: lightgray">
  <div class="container">
  <h4 style="font-style: italic;font-family: time new romans;text-align: center;">UPDATE DRESSING</h4>
  <form action="updateHandler.php" method="post">
    <div class="form-group">
      <label for="usern">Dressing Name:</label>
      <input type="text" class="form-control" id="drss" value="<?php echo $fetch['dName'] ?>" name="dressing">
      <input type="hidden" class="form-control" id="drss" value="<?php echo $fetch['dressID'] ?>" name="did">
    </div>
    <div class="form-group">
      <label for="address">Size:</label>
      <input type="number" class="form-control" id="siz" value="<?php echo $fetch['dSize'] ?>" name="size">
    </div>
    <div class="form-group">
      <label for="email">Type:</label>
      <input type="text" class="form-control" id="typ" name="type" value="<?php echo $fetch['dType'] ?>">
    </div>
    <div class="form-group">
      <label for="phone">Color:</label>
      <input type="text" class="form-control" id="clr"  name="color" value=" <?php echo $fetch['dColor'] ?>">
    </div>
     
    <button type="submit" class="btn btn-primary" name="update">Send</button>
    
  </form>
</div>
</body>
</html>