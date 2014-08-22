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
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
    <title>Index</title>
</head>

<body>
    <form action="login.php" method="post">
        Name: <input type="text" name="login"/>
        Pass: <input type="text" name="pass"/>
        <input type="submit" value="Login"/>
        <input type="hidden" name="log_post" value="1"/>
    </form>
</body>

</html>