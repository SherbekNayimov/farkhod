<?php
$target_file = "upload/" .basename($_FILES["upload"]["name"]);
move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);

?>


<img class="uploaded_image" src="<?php echo $target_file?>">

<style>
    .uploaded_image{
        width: 400px;
        border: 1px solid black;
        background-color: #999999;
    }
</style>