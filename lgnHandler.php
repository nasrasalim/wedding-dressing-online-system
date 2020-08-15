<?php 
session_start();
include 'connection.php';

if(isset($_POST['login'])){
    $users=$_POST['usern'];
    $passw=$_POST['pswd'];
    $sql="SELECT * FROM login WHERE (usrename=:usr AND password=:psw)";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array('usr'=>$users,'psw'=>$passw));
    if($stmt->rowCount()==1){
        session_start();
        $res=$stmt->fetch();
        $_SESSION["user"]=$res["usrename"];
         $_SESSION["role"]=$res["role"];
   //sessions
         if ($_SESSION["role"]=="manager") {
             header("location:Admin.php");
         }else if($_SESSION["role"]=="customer"){
            header("location:index.php");
        }
    }else{
        header("location:login.php");
    }
}else{
    header("location:login.php");
}
?>
