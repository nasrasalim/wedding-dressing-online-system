<?php 
session_start();
include 'connection.php';
if(isset($_POST['Save']))
$name=$_POST['ordername'];
$cid=$_POST['cid'];
$mnt=$_POST['amnt'];
$dt=$_POST['dat'];
$drid=$_POST['drssid'];
$sql="INSERT INTO order(orderID,ordeName,cID,amount,orderDate,dresinID) 
	VALUES (:ordnam,:cid,:amt,:dte,:drsid)";
$stmt=$conn->prepare($sql);
$stmt->execute(array(':ordnam'=>$name,':cid'=>$cid,:'amt'=>$mnt,':dte'=>$dt,':drsid'=>$drid));
 header("location:v.php");
 
 ?>
