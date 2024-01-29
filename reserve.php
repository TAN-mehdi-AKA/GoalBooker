<?php
include("element/header.php");
?>
    <hr>
    <br>
    <div class="wrapper">
        <div class="form-box log in">
            <h2>Book</h2>
            <form action="verifyReservation.php" method="post" autocomplete="off">
                <div class="input-box">
                    <input type="date" name="date" required>
                    <label>Date</label>
                </div>
                <div class="input-box">
                    <input type="time" name="time" minlength="8" required>
                    <label>Time</label>
                </div>
                <button type="submit" class="btn">Book</button>
            </form>
        </div>
    </div>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
