<?php
    session_start();
    if(isset($_SESSION['is_logged'])){
        if($_SESSION['is_logged'] === true){
            header('Location: index_logged.php?showPrivate=1');
            exit;
        }
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
        <p id="share-moments">Share the moment</p>
    </header>
    <main>
        <section class="popular_pics">
            <?php
            // TODO getMostPopularPics.php
            // It will return array of the most popular public pictures that
            // contains pic_id, comment
            // NOTICE: The name of the array should be topPictures
//            include 'getMostPopularPics.php';
//            $id = 1;
//            foreach($topPictures as $pic): ?>
<!--                <div class="picture">-->
<!--                    <div>-->
<!--                        <a id="--><?php //echo $id?><!--" href="browse.php?pic_id=--><?php //echo $pic['pic_id']; ?><!--"><img src="get_pic.php?pic_id=--><?php //echo $v['pic_id']; ?><!--&full_size=0"></a>-->
<!--                    </div>-->
<!--                    <div id="comment--><?php //echo $id; $id++; ?><!--" class="comment">--><?php //echo $pic['comment'] ?><!--</div>-->
<!--                </div>-->
<!--            --><?php //endforeach;
//            ?>
        </section>
        <section class="authentication">
            <form action="login.php" method="post" class="form">
                <label for="login">Name: </label> <input type="text" id="login" name="login" placeholder="Your username"/>
                <label for="pass">Password</label> <input type="password" id="pass" name="pass" placeholder="Your password"/>
                <input type="submit" value="Login"/>
                <input type="hidden" name="log_post" value="1"/>
            </form>
            <form action="register.php" method="post" class="form">
                <div>
                    <label for="username">Username:</label><input type="text" id="username" name="username">
                    <label for="passReg">Password:</label><input type="password" id="passReg" name="pass">
                </div>
                <div>
                    <label for="user-mail">E-Mail:</label><input type="email" id="user-mail" name="user-mail">
                </div>
                <?php if(isset($_SESSION['msg'])): ?>
                    <div><p><?php echo $_SESSION['msg']; session_destroy(); ?></p></div>
                <?php endif; ?>
                <input type="submit" value="Register" name="regform"/>
            </form>
        </section>


    </main>
    <footer>
        <p>Your moments - share them, keep them, remember them every day </p>
    </footer>

    <!--Scripts-->
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