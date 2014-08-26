 <?php
include 'common.php';
     if(isset($_POST["username"]) && isset($_POST["pass"]) && isset($_POST["user-mail"])) {
        $username =  mysql_real_escape_string(addslashes(trim($_POST['username'])));
        $email = $_POST['user-mail'];
        $password =  mysql_real_escape_string(md5($_POST['pass']));
        $date_reg = time();
        $query = "INSERT INTO users (login, pass, email, date_reg) VALUES ('$username', '$password', '$email', '$date_reg')";
        $result = run_q($query);
        if($result){
            $msg = "User Created Successfully.";
        }
    }
header('Location: index.php');
exit;
//TODO register form still needs to be fixed
//It does not send data to the database