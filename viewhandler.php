<?php 
	include'connection.php';
	session_start();
	$sql="SELECT*FROM orderdressing " INNER join("SELECT customer.cName,customer.cEmail,customer.cAddress");
	$stmt=$conn->query($sql);
	white($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		

	}

 ?>