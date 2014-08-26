<?php
include 'common.php';
if($_SESSION['is_logged'] === true)
{
    $query = '';
    if(isset($_GET['showPrivate'])){
        $query = 'SELECT uc.name, p.pic_id, p.comment FROM user_catalogues as uc, pictures as p
                 WHERE uc.user_id='.$_SESSION['user_id'].' AND p.catalogue_id=uc.catalogue_id ORDER BY uc.catalogue_id';
    }
    if(isset($_GET['showPublic'])){
        $query = 'SELECT uc.name, uc.user_id, p.pic_id, p.comment FROM user_catalogues as uc, pictures as p
                 WHERE p.is_public=1 AND uc.user_id!='.$_SESSION['user_id'].' ORDER BY uc.catalogue_id';
    }
    $pics = fetch_all(run_q($query));

    $cssFile = 'index_logged.css';
    $pageTitle = 'Home';
    include 'templates/header.php';
    include 'templates/index_logged.php';
    include 'templates/footer.php';
}
else
{
    header('Location: index.php');
    exit;
}
