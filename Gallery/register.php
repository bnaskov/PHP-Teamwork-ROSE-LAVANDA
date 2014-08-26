 <?php
include 'common.php';
     if(isset($_POST["username"]) && isset($_POST["passReg"]) && isset($_POST["user-mail"])) {
        $username =  mysql_real_escape_string(addslashes(trim($_POST['username'])));
        $email = $_POST['user-mail'];
        $password =  mysql_real_escape_string(md5($_POST['pass']));
        $query = "INSERT INTO `users` (login, pass, reg_mail) VALUES ('$username', '$password', '$email')";
        $result = mysql_query($query);
        if($result){
            $msg = "User Created Successfully.";
        }
    }
header('Location: index.php');
exit;
//TODO register form still needs to be fixed
//It does not send data to the database