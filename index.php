<?php
include("element/header.php");
?>
    <hr>
    <br>
    <div class="wrapper">
        <div class="form-box log in">
            <h2>Log In</h2>
            <form action="verifySignIn.php" method="post" autocomplete="off">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="pwd" minlength="8" required>
                    <label>password</label>
                </div>
                <button type="submit" class="btn">Log in</button>
                <div class='login-register'>
                    <p>Don't have an account?<a href="signup.php" class="register-link">SignUp</a></p>
                </div>
            </form>
        </div>
    </div>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>



