<?php 
session_start();
include 'connection.php';
if(isset($_POST['Save']))
$usname=$_POST['usrn'];
$pss=$_POST['psswd'];
$rle=$_POST['rol'];

$sql="INSERT INTO login(loginID,usrename,password,role) VALUES (NULL,:name,:pswd,:rl)";
    $stmt=$conn->prepare($sql);
   	$stmt->execute(array(':name'=>$usname,':pswd'=>$pss,':rl'=>$rle));	
 	header("location:login.php");
 ?>