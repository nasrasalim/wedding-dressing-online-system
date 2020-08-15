<?php
  $conn = new PDO("mysql:host=localhost;port=3306;dbname=wedding", 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
?> 
