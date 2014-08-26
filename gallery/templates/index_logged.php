    <div id="wrapper" class="wrapper">
        <?php
        $cat = '';
        $user_id = '';
        $id = 1;
        if(isset($_GET['showPrivate'])){
            foreach($pics as $v){
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
            <?php }
        }

        if(isset($_GET['showPublic'])){
            foreach($pics as $v){
                if($cat != $v['name'] || $user_id != $v['user_id']): ?>
                    <div class="catalogue"><h2><?php echo $v['name']; ?></h2></div>
                <?php endif;
                $cat = $v['name'];
                $user_id = $v['user_id'];
                ?>
                <div class="picture">
                    <div>
                        <a id="<?php echo $id?>" href="browse.php?pic_id=<?php echo $v['pic_id']; ?>&browsePublic"><img src="get_pic.php?pic_id=<?php echo $v['pic_id']; ?>&full_size=0&getPublic"></a>
                    </div>
                    <div id="comment<?php echo $id; $id++; ?>" class="comment"><?php echo $v['comment'] ?></div>
                </div>
            <?php }
        }
        ?>
    </div>

    <script src="scripts/showHideComment.js"></script>
