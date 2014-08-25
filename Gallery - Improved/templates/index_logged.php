    <div id="wrapper" class="wrapper">
        <?php
        $cat = '';
        $id = 1;
        foreach($pics as $v)
        {
            if($cat != $v['name']): ?>
                <div class="catalogue"><h2><?php echo $v['name']; ?></h2></div>
            <?php endif;
            $cat = $v['name']; ?>
                <div class="picture">
                    <div>
                        <a id="<?php echo $id?>" href="browse.php?pic_id=<?php echo $v['pic_id']; ?>"><img src="get_pic.php?pic_id=<?php echo $v['pic_id']; ?>&full_size=0"></a>
                    </div>
                    <div id="comment<?php echo $id; $id++; ?>" class="comment"><?php echo $v['comment'] ?></div>
                </div>
        <?php
        }
        ?>
    </div>

    <script src="scripts/showHideComment.js"></script>
