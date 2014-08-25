<?php
include 'common.php';

if($_SESSION['is_logged'] !== true){
    if($_POST['log_post'] == 1){
        $name = addslashes(trim($_POST['login']));
        $pass = trim($_POST['pass']);
        if(strlen($name) > 3 && strlen($pass) > 3){
            $rs = run_q('SELECT * FROM users WHERE login="' .$name.'" AND pass="' . md5($pass).'"');
            if(mysql_numrows($rs)==1){
                $row = mysql_fetch_assoc($rs);
                $_SESSION['is_logged'] = true;
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['login'] = $row['login'];
                header('Location: index_logged.php');
                exit;
            }
        }
    }
}
header('Location: index.php');
exit;