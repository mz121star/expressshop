<?php

include_once('init.php');
if (count($_POST)) {
    
    $uploaddir  =  $_SERVER['DOCUMENT_ROOT'].'/public/uploads/' ;
    $uploadfile  =  $uploaddir  .  basename ( $_FILES [ 'image' ][ 'name' ]);
    $imagename = '';
    if ( move_uploaded_file ( $_FILES [ 'image' ][ 'tmp_name' ],  $uploadfile )) {
        $imagename = $_SERVER['SERVER_NAME'].'/public/uploads/'.$_FILES [ 'image' ][ 'name' ] ;
    }
    $geo = explode(',', $_POST['geo']);
    $add = array('name'=>$_POST['name'], 'star'=>$_POST['star'], 'address'=>$_POST['address'], 'location'=>array('longitude'=>floatval($geo[0]), 'latitude'=>floatval($geo[1])), 'price'=>$_POST['price'], 'image'=>$imagename);

    $collection->insert($add);
}
$shops = $collection->find();
$shop_array = array();
    while ($data = $shops->next()) {
        $shop_array[] = $data;
    }
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
                #allmap{width:400px;height:400px;}
    </style>
    <script type="text/javascript" name="baidu-tc-cerfication" src="http://apps.bdimg.com/cloudaapi/lightapp.js#8994ab4df9d6a5a169421089618fc5c3"></script><script type="text/javascript">window.bd && bd._qdc && bd._qdc.init({app_id: '2960154a5bbf7ef967f95eff'});</script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=lcO3zSdb4cgCduHNBT3AoAR9"></script>
    <title>获取商家坐标</title>
</head>
<body>
<div id="allmap"></div>
<form method="post" action="addshop.php" enctype="multipart/form-data">
    <table>

        <tr><td>餐厅名称</td><td><input name="name" type="text"></td></tr>
        <tr><td>星级</td><td><input name="star" type="text"></td></tr>
        <tr><td>地址</td><td><input name="address" type="text"></td></tr>
        <tr><td>坐标</td><td><input name="geo" id="geo" type="text"></td></tr>
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
    foreach ($shop_array as $shop) { ?>
    <tr>
        <td><?php echo $shop['name'];?></td>
        <td><?php echo $shop['star'];?></td>
        <td><?php echo $shop['address'];?></td>
        <td><?php echo $shop['price'];?></td>
        <td><img src="<?php echo $shop['image'];?>" style="border:none;"></td>
    </tr>
    <?php } }
    ?>
</table>

</body>
</html>
<script type="text/javascript">

    // 百度地图API功能
    var map = new BMap.Map("allmap");            // 创建Map实例
    map.centerAndZoom("大连",12);                   // 初始化地图,设置城市和地图级别。

    map.addEventListener("click",function(e){
        var marker1 = new BMap.Marker(new BMap.Point(e.point.lng,e.point.lat));  // 创建标注
        map.addOverlay(marker1);              // 将标注添加到地图中
        document.getElementById("geo").value = e.point.lng + "," + e.point.lat;
    });
</script>
