<?php
    session_start();
    if($_SESSION['is_logged'] === true){
        header('Location: index_logged.php');
        exit;
    }
?>

<!DOCTYPE html>

<html>

<head>
    <title>Home</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="styles/index.css"/>
</head>

<body>
    <header class="header">
        <audio autoplay="autoplay" id="sound">
            <source src="sounds/ChilloutMusic.mp3" type="audio/mp3">
        </audio>
        <div class="buttons">
            <img src="images/Play.png" alt="play" id="play"/>
            <img src="images/Stop.png" alt="stop" id="stop"/>
        </div>
        <p>Share the moment</p>
    </header>
    <main>
    <form action="login.php" method="post" class="form">
        <label for="login">Name: </label> <input type="text" id="login" name="login" placeholder="Your username"/>
        <label for="pass">Password</label> <input type="password" id="pass" name="pass" placeholder="Your password"/>
        <input type="submit" value="Login"/>
        <input type="hidden" name="log_post" value="1"/>
    </form>
    </main>
    <footer>
        <p>Your moments - share them, keep them, remember them every day </p>
    </footer>

    <!--Scripts-->
    <script src="scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        window.onload = function(){
            var stop = document.getElementById('stop');
            var play = document.getElementById('play');
            var sound = document.getElementById('sound');
            stop.addEventListener('click', function() {
                sound.pause();}, false);
            play.addEventListener('click', function(){
                sound.play();}, false)
        };
    </script>
</body>

</html>