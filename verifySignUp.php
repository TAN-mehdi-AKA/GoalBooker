<?php
include("element/connect.php");
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$query="insert into membre(nom,prenom,email,pwd,isadmin) values('$fname','$lname','$email','$pwd','0')";
$query2="select * from membre where email='$email'";
$result=mysqli_query($connect,$query2);
if(mysqli_query($connect,$query)){
    $_SESSION['isadmin']="0";
    $_SESSION['connect']="ok";
    $_SESSION['id']=mysqli_insert_id($connect);
    header("location:reserve.php");
}
