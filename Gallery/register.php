 <?php
include 'common.php';
     if(isset($_POST["username"]) && isset($_POST["pass"]) && isset($_POST["user-mail"])) {
        $username =  mysql_real_escape_string(addslashes(trim($_POST['username'])));
        $email = $_POST['user-mail'];
        $password =  mysql_real_escape_string(md5($_POST['pass']));
        $query = "INSERT INTO users (login, pass, email) VALUES ('$username', 'md5($pass)', '$email')";
        $result = run_q($query);
        if($result){
            $msg = "User Created Successfully.";
        }
    }
header('Location: index.php');
exit;
//TODO register form still needs to be fixed
//It does not send data to the database