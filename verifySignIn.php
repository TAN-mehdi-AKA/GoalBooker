<?php
session_start();
include("element/connect.php");
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$query="select isadmin,id from membre where email='$email' and pwd='$pwd'";  
$result=mysqli_query($connect,$query);
if($row=mysqli_fetch_assoc($result)){
    $_SESSION['connect']="ok";
    if($row['isadmin']=="1"){
        $_SESSION['isadmin']=$row['isadmin'];
        header("location:reservations.php");
    }
    if($row['isadmin']=="0"){
        $_SESSION['isadmin']=$row['isadmin'];
        $_SESSION['id']=$row['id'];
        header("location:reserve.php");
    }
}else{
    header("location:index.php");
}