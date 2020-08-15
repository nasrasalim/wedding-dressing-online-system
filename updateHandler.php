<?php
session_start();
include 'connection.php';
if (isset($_POST['update']))
    $dname=$_POST['dressing'];
    $did=$_POST['did'];
    $dsz=$_POST['size'];
   	$dty=$_POST['type'];
  	$dcl=$_POST['color'];
   	$sql="UPDATE dressing SET dName=:name,dType=:typ,dSize=:size,dColor=:clr WHERE dressID=:id"; 
   	$stmt=$conn->prepare($sql);
   	$stmt->execute(array(':name'=>$dname,':typ'=>$dty,':size'=>$dsz,':clr'=>$dcl,':id'=>$did));
   	 header("location:dressUpdate.php");
?>