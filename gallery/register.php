<?php
include 'common.php';
if(isset($_POST["username"]) && isset($_POST["pass"]) && isset($_POST["user-mail"])) {
    $username =  mysql_real_escape_string(addslashes(trim($_POST['username'])));
    $email = ($_POST["user-mail"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    $_POST['user-mail'];
    $password =  mysql_real_escape_string(md5($_POST['pass']));
    $date_reg = time();
    $sql=mysql_query("SELECT * FROM users WHERE login='$username'");
    if(mysql_num_rows($sql)>0)
    {
        echo "Name already exists";

    }
        $sql=mysql_query("SELECT * FROM users WHERE email='$email'");}
    if(mysql_num_rows($sql)>0)
    {
        echo "E-mail already exists";
    }
    $query = "INSERT INTO users (login, pass, email, date_reg) VALUES ('$username', '$password', '$email', '$date_reg')";
    $result = run_q($query);
    if($result){
        $msg = "User Created Successfully.";
        $_SESSION['msg'] = $msg;
    }
header('Location: index.php');