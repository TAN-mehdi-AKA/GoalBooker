<?php
include("element/header.php");
?>
    <hr>
    <br>
    <div class="wrapper">
        <div class="form-box log in">
            <h2>Sign UP</h2>
            <form action="verifySignUp.php" method="post" autocomplete="off" >
                <div class="input-box">
                    <input type="text" name="fname" required>
                    <label>First name</label>
                </div>
                <div class="input-box">
                    <input type="text" name="lname" required>
                    <label>Last name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="pwd" id="pwd" minlength="8" required>
                    <label>password</label>
                </div>
                <button type="submit" class="btn">Sign up</button>
                <div class='login-register'>
                    <p>You already have an account !<a href="index.php" class="register-link">Log in</a></p>
                </div>
            </form>
        </div>
    </div>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
