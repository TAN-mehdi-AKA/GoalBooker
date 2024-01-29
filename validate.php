<?php
include("element/connect.php");
$query="update reservation set etat=1 where id='".$_GET['id']."'";
mysqli_query($connect,$query);
header("location:reservations.php");