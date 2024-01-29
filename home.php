<?php
include("element/header.php");
include("element/connect.php");
$query="SELECT r.id,dateR,heure,nbrP FROM reservation as r left join participation as p on r.id=p.id_reservation where r.id_membre <> '".$_SESSION['id']."' and r.etat='1' and (p.id_membre <> '".$_SESSION['id']."' OR p.id_membre IS NULL)";
$result=mysqli_query($connect,$query);
if (mysqli_num_rows($result)!=0){
?>
    <hr>
    <table cellspacing="0">
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Places</th>
            <th colspan="2">Action</th>
        </tr>
            <?php
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo"<td>{$row['dateR']}</td>";
                    echo"<td>{$row['heure']}</td>";
                    echo"<td>{$row['nbrP']}</td>";
                    echo"<td><a class='action' href='participate.php?id=".$row['id']."'>Participate</a></td>";
                    echo "</tr>";
                }
            ?>
    </table>
    <?php
    }else{
    ?>
    <p class="result">No matches found</p>
    <?php
    }
    ?>
</body>
</html>
