<?php
session_start();
include("element/connect.php");
$date=$_POST['date'];
$time=$_POST['time'];
$query="insert into reservation(dateR,heure,dateC,id_membre) values('$date','$time',sysdate(),'".$_SESSION['id']."')";
if($result=mysqli_query($connect,$query)){
    header("location:validatedReservations.php");
    $id=mysqli_insert_id($connect);
    $query2="insert into participation(dateP,id_reservation,id_membre) values(sysdate(),'$id','".$_SESSION['id']."')";
    mysqli_query($connect,$query2);
}
