<?php
include("element/header.php");
include("element/connect.php");
$query="select participation.id,dateR,heure,nbrP from participation join reservation on reservation.id=participation.id_reservation where participation.id_membre='".$_SESSION['id']."' and reservation.id_membre<>'".$_SESSION['id']."' ";
$result=mysqli_query($connect,$query);
if (mysqli_num_rows($result)!=0){
?>
    <hr>
    <table cellspacing="0">
        <tr>
            <th>Match Date</th>
            <th>Match Time</th>
            <th>Places</th>
            <th>Statut</th>
        </tr>
            <?php
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo"<td>{$row['dateR']}</td>";
                    echo"<td>{$row['heure']}</td>";     
                    echo"<td>{$row['nbrP']}</td>";     
                    echo"<td><a class='action' href='leave.php?id=".$row['id']."'>leave</a></td>";
                    echo "</tr>";
                }
            ?>
    </table>
    <?php
    }else{
    ?>
    <p class="result">No participations</p>
    <?php
    }
    ?>
</body>
</html>