<?php
include("connection.php");

if(isset($_GET['dress'])){
  $id=$_GET['dress'];
  
    $sql = "DELETE FROM dressing WHERE dressID=:id";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute(array(':id'=>$id));
    	header("location:dressUpdate.php");
  }
 ?>