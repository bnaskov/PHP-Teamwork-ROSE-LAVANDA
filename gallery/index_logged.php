<?php
include 'common.php';
if($_SESSION['is_logged']===true){
    include 'templates/header.php';

    include 'templates/footer.php';
} else {
    header('Location: index.php');
    exit;
}
