<?php
include("element/header.php");
include("element/connect.php");
$query="select * from reservation where etat='0'";
$result=mysqli_query($connect,$query);
if (mysqli_num_rows($result)!=0){
?>
    <hr>
    <table cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time</th>
            <th colspan="2">Action</th>
        </tr>
            <?php
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo"<td>{$row['id']}</td>";
                    echo"<td>{$row['dateR']}</td>";
                    echo"<td>{$row['heure']}</td>";
                    echo"<td><a class='action' href='validate.php?id=".$row['id']."'>validate</a></td>";
                    echo"<td><a class='action' href='cancel.php?id=".$row['id']."'>Cancel</a></td>";
                    echo "</tr>";
                }
            ?>
    </table>
    <?php
    }else{
    ?>
    <p class="result">no results</p>
    <?php
    }
    ?>
</body>
</html>
