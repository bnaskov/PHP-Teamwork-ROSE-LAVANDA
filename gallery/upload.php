<?php
include 'common.php';
if($_SESSION['is_logged']===true){
    $folders=fetch_all(run_q('SELECT * FROM user_catalogs WHERE user_id='.$_SESSION['user_id']));
    include 'templates/header.php';
    include 'templates/upload.php';
    include 'templates/footer.php';
} else {
    header('Location: index.php');
    exit;
}