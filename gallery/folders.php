<?php
include 'common.php';
if($_SESSION['is_logged']===true){
    if($_POST['fs']==1){
        $new_name=addslashes(trim($_POST['new_folder_name']));
        if(strlen($new_name)>1){
            $rs=run_q('SELECT COUNT(*) as cnt FROM user_catalogs
            WHERE user_id='.$_SESSION['user_id'].' AND name="'.$new_name.'"');
            $row = mysql_fetch_assoc($rs);
            if($row['cnt']==0){
                run_q('INSERT INTO user_catalogs (user_id,name) VALUES ('.$_SESSION['user_id'].',"'.$new_name.'")');
            }else{
                $error[]='Името съществува';
            }
        } else {
            $error[]='Въведете име';
        }
    }

    $folders=fetch_all(run_q('SELECT * FROM user_catalogs WHERE user_id='.$_SESSION['user_id']));

    include 'templates/header.php';
    include 'templates/user_folders.php';
    include 'templates/footer.php';
} else {
    header('Location: index.php');
    exit;
}