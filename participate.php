<?php
include("element/header.php");
include("element/connect.php");
$query2="update reservation set nbrP=nbrP+1 where id='".$_GET['id']."'";
mysqli_query($connect,$query2);
$query="insert into participation(dateP,id_reservation,id_membre) values(sysdate(),".$_GET['id'].",".$_SESSION['id'].") ";
$result=mysqli_query($connect,$query);
header('location:home.php');

