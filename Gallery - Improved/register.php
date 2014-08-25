<?php
session_start();
if($_SESSION['is_logged'] !== true){
    if(isset($_POST["reg-username"]) && isset($_POST["reg-pass"]) && isset($_POST["reg-mail"])) {
        include 'common.php';
        include 'templates/header.php';
        include 'templates/footer.php';
        if($_POST['reg_post'] == 1){
            $login = addslashes(trim($_POST['reg-username']));
            $pass = trim($_POST['reg-pass']);
            $regmail = $_POST['reg-mail'];
            mysql_query("INSERT INTO member(regusername, regpass, regmail)VALUES('$login','$pass ','$regmail')");
            mysql_close($con);
        }
    }
    header('Location: index.php');
    exit;
}

