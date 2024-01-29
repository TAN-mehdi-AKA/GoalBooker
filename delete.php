<?php
include("element/header.php");
include("element/connect.php");
$query="delete from reservation where id='".$_GET['id']."'";
$query2="delete from participation where id_reservation='".$_GET['id']."'";
mysqli_query($connect,$query2);
mysqli_query($connect,$query);
header('location:validatedReservations.php');