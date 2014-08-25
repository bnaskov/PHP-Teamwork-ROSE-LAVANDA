 <?php
include 'common.php';
     if(isset($_POST["reg-username"]) && isset($_POST["reg-pass"]) && isset($_POST["reg-mail"])) {
         include 'common.php';
         include 'templates/header.php';
             mysql_close($con);
     }
header('Location: index.php');
exit;
