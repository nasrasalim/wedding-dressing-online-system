<?php 
session_start();
include 'connection.php';
if(isset($_POST['save']))
$name=$_POST['usern'];
$mail=$_POST['email'];
$addr=$_POST['address'];
$phn=$_POST['phone'];
$opt=$_POST['optradio'];
$sql="INSERT INTO customer(cID,cName,cEmail,cAddress,cPhone,cGender)
 VALUES (NULL,:nam,:eml,:adrs,:phon,:gndr)"; 
 $stmt=$conn->prepare($sql);
 $stmt->execute(array(':nam'=>$name,':eml'=>$mail,':adrs'=>$addr,':phon'=>$phn,':gndr'=>$opt));
 header("location:CreateUsename.php");
 ?>