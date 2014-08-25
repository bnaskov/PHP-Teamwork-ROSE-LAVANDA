    <div class="wrapper">
        <?php
        if(isset($_GET['getPublic'])){
            if($prev_pic > 0): ?>
                <button class="button" onclick='location.href="browse.php?pic_id=<?php echo $prev_pic; ?>&getPublic=1"'>Previous</button>
            <?php endif;
            if($next_pic > 0): ?>
                <button class="button" onclick='location.href="browse.php?pic_id=<?php echo $next_pic; ?>&getPublic=1"'>Next</button>

            <?php endif; ?>
            <div>
                        <?php $_SESSION['pic_id'] = $pic_id; ?>

            <!--This way of receive pic_id - needed for incrementing likes, prevent -->
            <!--the user from changing the pic_id manually with the browser inspector -->
            <!--TODO incrementLikes.php - makes UPDATE query to increment likes for the picture -->
            <!--It will be added in the main directory -->

            <button type="submit" class="button-like" onclick="window.location.href='incrementLikes.php'">Like</button>
            <img src="get_pic.php?pic_id=<?php echo $pic_id; ?>&full_size=1">
            </div> <?php
        } else {
            if($prev_pic > 0): ?>
                <button class="button" onclick='location.href="browse.php?pic_id=<?php echo $prev_pic; ?>"'>Previous</button>
            <?php endif;
            if($next_pic > 0): ?>
                <button class="button" onclick='location.href="browse.php?pic_id=<?php echo $next_pic; ?> ?>"'>Next</button>
            <?php endif; ?>
            <div><img src="get_pic.php?pic_id=<?php echo $pic_id; ?>&full_size=1"></div> <?php
        }
    ?>
    </div>