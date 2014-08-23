<div>
    <?php
    $cat = '';
    foreach($pics as $v)
    {
        if($cat != $v['name'])
        {
            echo '<div><h2>'.$v['name'].'</h2></div>';
        }
        $cat = $v['name'];

        echo '<div style="width:100px; margin-top:10px;">
            <div><a href="browse.php?pic_id='.$v['pic_id'].'"><img src="get_pic.php?pic_id='.$v['pic_id'].'"></a></div>
            <div>'.$v['comment'].'</div>
            </div>';
    }
    ?>
</div>