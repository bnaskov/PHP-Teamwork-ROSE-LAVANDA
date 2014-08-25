    <form method="post" class="form">
        <div>
            <label for="new_folder_name">Name: </label>
            <input type="text" id="new_folder_name" name="new_folder_name" placeholder="Enter folder name"/>
            <?php
            if(isset($error)){
                if(count($error)>0){
                    foreach($error as $v): ?>
                        <div class="error-message"> <?php echo $v; ?></div>
                    <?php endforeach;
                }
            }
            ?>
            <input type="submit" value="Add folder"/>
            <input type="hidden" name="fs" value="1"/>
        </div>
    </form>

    <div class="catalogues-header">
        <p>
            My catalogues
        </p>
    </div>
    <div class="catalogues">
    <?php
    foreach($folders as $v): ?>
         <div><a href="browse.php?pic_id=1"><?php echo $v['name']; ?></a></div>
    <?php endforeach;
    ?>
    </div>
