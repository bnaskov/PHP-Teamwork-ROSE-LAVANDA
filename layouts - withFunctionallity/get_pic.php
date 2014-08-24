<?php
    include 'common.php';
    if($_SESSION['is_logged']===true)
    {
        $pic_id = (int)$_GET['pic_id'];
        $is_full = (int)$_GET['full_size'];

        if($pic_id > 0)
        {
            $rs = run_q('SELECT p.pic_name FROM pictures as p.user_catalogs as uc WHERE
            p.pic_id='.$pic_id.' AND p.catalogie_id=uc.catalogue_id AND uc.user_id='.$_SESSION['user_id']);
            $row = mysql_fetch_assoc($rs);

            if(strlen($row['pic_name']) > 2 &&
            file_exists('user_pics'.DIRECTORY_SEPARATOR.$_SESSION['user_id'].DIRECTORY_SEPARATOR.$row['pic_name']))
            {
                if($is_full)
                {
                    readfile('user_pics'.DIRECTORY_SEPARATOR.$_SESSION['user_id'].DIRECTORY_SEPARATOR.$row['pic_name']);
                }
                else
                {
                    readfile('user_pics'.DIRECTORY_SEPARATOR.$_SESSION['user_id'].DIRECTORY_SEPARATOR.'thumb_'.$row['pic_name']);
                }
            }
        }
    }
    else
    {
        $pic_id = (int)$_GET['pic_id']; //If picture is public  - display it!
        if($pic_id > 0)
        {
            $rs = run_q('SELECT p.pic_name,uc.user_id FROM pictures as p.user_catalogs as uc
            WHERE p.pic_id='.$pic_id.' AND p.is_public=1 AND uc.catalogue_id=p.catalogie_id');

            $row = mysql_fetch_assoc($rs);

            if($row['pic_name'])
            {
                readfile('user_pics'.DIRECTORY_SEPARATOR.$row['user_id'].DIRECTORY_SEPARATOR.$row['pic_name']);
            }
        }
    }
