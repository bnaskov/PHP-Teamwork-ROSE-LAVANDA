    <div class="wrapper">
        <?php
        if(isset($_GET['getPublic'])){
            if($prev_pic > 0): ?>
                <button class="button" onclick='location.href="browse.php?pic_id=<?php echo $prev_pic; ?>&getPublic=1"'>Previous</button>
            <?php endif;
            if($next_pic > 0): ?>
                <button class="button" onclick='location.href="browse.php?pic_id=<?php echo $next_pic; ?>&getPublic=1"'>Next</button>
                <div>
                    <!--                TODO incrementLikes.php - makes UPDATE query to increment likes for the picture -->
                    <!--                It will be added in the main directory -->
                    <form action="incrementLikes.php">
                        <button type="submit" class="button-like">Like</button>
                    </form>
                    <img src="get_pic.php?pic_id=<?php echo $pic_id; ?>&full_size=1">
                </div>
            <?php endif;
        } else {
            if($prev_pic > 0): ?>
                <button class="button" onclick='location.href="browse.php?pic_id=<?php echo $prev_pic; ?>"'>Previous</button>
            <?php endif;
            if($next_pic > 0): ?>
                <button class="button" onclick='location.href="browse.php?pic_id=<?php echo $next_pic; ?> ?>"'>Next</button>
                <div><img src="get_pic.php?pic_id=<?php echo $pic_id; ?>&full_size=1"></div>
            <?php endif;
        }
    ?>
    </div>