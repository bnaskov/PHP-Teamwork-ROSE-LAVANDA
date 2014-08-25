    <div class="wrapper" xmlns="http://www.w3.org/1999/html">
        <?php
        if($prev_pic > 0): ?>
            <button class="button" onclick='location.href="browse.php?pic_id=<?php echo $prev_pic; ?>"'>Previous</button>
        <?php endif;
        if($next_pic > 0): ?>
            <button class="button" onclick='location.href="browse.php?pic_id=<?php echo $next_pic; ?> ?>"'>Next</button>
            <div><img src="get_pic.php?pic_id=<?php echo $pic_id; ?>&full_size=1"></div>
        <?php endif; ?>
    </div>