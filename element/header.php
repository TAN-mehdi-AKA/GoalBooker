<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css2.css">
    <link rel="icon" href="css/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous">
</head>
<body>
    <header>
    <div class='logo'>Logo</div>
        <div>
        <nav class='navigation'>
            <?php
                if(!isset($_SESSION['connect'])){
            ?>
                <a class="header-links" href='signup.php'>Sign UP</a>
                <a class="header-links" id="signin" href='index.php'>Log in</a>
            <?php
                }
                if(isset($_SESSION['connect']) && $_SESSION['isadmin']=="0"){
            ?>
                <a class="header-links" href='home.php'>participate</a>
                <a class="header-links" href='reserve.php'>Book</a>
                <a class="header-links" href='validatedReservations.php'>My Reservations</a>
                <a class="header-links" href='myparticipations.php'>My Participations</a>
                <a class="header-links" id="signout" href='signout.php'>SignOut</a>
            <?php
                }
                if(isset($_SESSION['connect']) && $_SESSION['isadmin']=="1"){
            ?>
                <a class="header-links" href='reservations.php'>Reservations</a>
                <a class="header-links" href='participations.php'>Participations</a>
                <a class="header-links" id="signout" href='signout.php'>SignOut</a>
            <?php
                }
            ?>
        </nav >
        </div>
        <a id="FF_icon"><i class="fa-solid fa-bars fa-xl" id="F_icon"></i></a>
    </header>
    <script>
        const toggleButton = document.getElementById('FF_icon');
        const navbarLinks = document.getElementsByClassName('navigation')[0];
    
        toggleButton.addEventListener('click', () => {
        navbarLinks.classList.toggle('navigation');
        navbarLinks.classList.toggle('navigation2');
        });
    </script>
</body>