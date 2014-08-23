<?php
include 'common.php';
if($_SESSION['is_logged']===true)
{
    $pics = fetch_all(run_q('SELECT uc.name, p.pic_id,p.comment FROM user_catalogs as uc,pictures as p WHERE
    uc.user_id='.$_SESSION['user_id'].' AND p.catalogie_id=uc.catalogue_id ORDER_BY uc.catalogue_id'));

    include 'templates/header.php';
    include 'templates/index_logged.php';
    include 'templates/footer.php';
}
else
{
    header('Location: index.php');
    exit;
}
