<?php
if(count($error)>0){
    foreach($error as $v){
        echo '<div>'. $v . '</div>';
    }
}
?>
<form method="post">
    Име:<input type="text" name="new_folder_name"/>
    <input type="submit" value="Добави"/>
    <input type="hidden" name="fs" value="1"/>
</form>
<hr>
<?php
 foreach($folders as $v){
     echo '<div>'. $v['name'] . '</div>';
 }
