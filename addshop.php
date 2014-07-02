<?php

include_once('init.php');
if (count($_POST)) {
    
    $uploaddir  =  $_SERVER['DOCUMENT_ROOT'].'/public/uploads/' ;
    $uploadfile  =  $uploaddir  .  basename ( $_FILES [ 'image' ][ 'name' ]);
    $imagename = '';
    if ( move_uploaded_file ( $_FILES [ 'image' ][ 'tmp_name' ],  $uploadfile )) {
        $imagename = $_SERVER['SERVER_NAME'].'/public/uploads/'.$_FILES [ 'image' ][ 'name' ] ;
    }
    $add = array('name'=>$_POST['name'], 'star'=>$_POST['star'], 'location'=>$_POST['location'], 'price'=>$_POST['price'], 'image'=>$imagename);

    $collection->insert($add);
}
$shops = $collection->find();
?>
<form method="post" action="addshop.php" enctype="multipart/form-data">
    <table>
        
        <tr><td>餐厅名称</td><td><input name="name" type="text"></td></tr>
        <tr><td>星级</td><td><input name="star" type="text"></td></tr>
        <tr><td>位置</td><td><input name="location" type="text"></td></tr>
        <tr><td>平均价格</td><td><input name="price" type="text"></td></tr>
        <tr><td>图片</td><td><input name="image" type="file"></td></tr>
        <tr><td colspan="2"><input type="submit" value="add"></td></tr>
    </table>
    
</form>

 <?php
    if (count($shops)) { ?>
<table>
    <tr>
        <td>餐厅名称</td>
        <td>星级</td>
        <td>位置</td>
        <td>平均价格</td>
        <td>图片</td>
    </tr>
    <?php
    foreach ($shops as $shop) { ?>
    <tr>
        <td><?php echo $shop['name'];?></td>
        <td><?php echo $shop['star'];?></td>
        <td><?php echo $shop['location'];?></td>
        <td><?php echo $shop['price'];?></td>
        <td><?php echo $shop['image'];?></td>
    </tr>
    <?php } }
    ?>
</table>