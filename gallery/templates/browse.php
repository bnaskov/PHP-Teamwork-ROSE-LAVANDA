<?php
    echo '<div>';
    if($prev_pic > 0)
    {
        echo '<a href="browse.php?pic_id='.$prev_pic.'">Previous</a> | ';
    }
    if($next_pic > 0)
    {
        echo '<a href="browse.php?pic_id='.$next_pic.'">Next</a>';
    }

    echo '<div><img src="get_pic.php?pic_id='.$pic_id.'&full_size=1"></div>
            </div>';