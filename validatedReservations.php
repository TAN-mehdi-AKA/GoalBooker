<?php
include("element/header.php");
include("element/connect.php");
$query="select * from reservation where id_membre='".$_SESSION['id']."' ";
$result=mysqli_query($connect,$query);
 if (mysqli_num_rows($result)!=0){
?>
    <hr>
    <table cellspacing="0">
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
            <?php
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo"<td>{$row['dateR']}</td>";
                    echo"<td>{$row['heure']}</td>";
                    echo"<td>".($row['etat'] == 1 ? 'Active' : 'Inactive')."</td>";
                    echo"<td><a class='action' href='delete.php?id=".$row['id']."'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
    </table>
    <?php
    }else{
    ?>
    <p class="result">No reservations found</p>
    <?php
    }
    ?>
</body>
</html>