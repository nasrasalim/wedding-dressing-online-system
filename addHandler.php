<?php 
session_start();
include 'connection.php';
if(isset($_POST['save']))
$name=$_POST['namedress'];
$tp=$_POST['type'];
$sze=$_POST['size'];
$clr=$_POST['color1'];
$tdr=$_POST['tdresng'];
$sql="INSERT INTO dressing(dressID,dName,dType,dSize,dColor,totalDressing)
 VALUES (NULL,:name,:typ,:siz,:clor,:ttdr)"; 
 $stmt=$conn->prepare($sql);
 $stmt->execute(array(':name'=>$name,':typ'=>$tp,':siz'=>$sze,':clor'=>$clr,':ttdr'=>$tdr));
 header("location:admin.php");
 ?>