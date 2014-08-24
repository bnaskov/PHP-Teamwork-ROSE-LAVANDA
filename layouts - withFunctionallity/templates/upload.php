<?php
if($success)
{
    echo 'The picture was uploaded successfully!';
}
if(count($err) > 0)
{
    foreach($err as $v)
    {
        echo '<div>'.$v.'</div>';
    }
}
?>
<form method="post" enctype="multipart/form-data">
    Група:<select name="folder">
        <?php
            foreach($folders as $v){
                echo '<option value='.$v['catalogue_id'].'>'.$v['name'].'</option>';
            }
        ?>
    </select><br>
    Файл:<input type="file" name="user_pic"><br>
    Описание:<textarea name="user_desc"></textarea><br>
    Публична:<input type="checkbox" name="is_public" value="1"/><br>
    <input type="submit" value="Качи">
</form>