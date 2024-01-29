<?php
include("element/header.php");
include("element/connect.php");
$query2="update reservation left join participation on reservation.id=participation.id_reservation set nbrP=nbrP-1 where participation.id='".$_GET['id']."'";
mysqli_query($connect,$query2);
$query="delete from participation where id='".$_GET['id']."'";
mysqli_query($connect,$query);
header('location:myparticipations.php');