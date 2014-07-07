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
请输入:<br /><input type="text" id="suggestId" size="20" value="百度" style="width:150px;" />
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
   function G(id) {
       return document.getElementById(id);
   }

    // 百度地图API功能
    var map = new BMap.Map("allmap");            // 创建Map实例
    map.centerAndZoom("大连",12);                   // 初始化地图,设置城市和地图级别。
    map.enableScrollWheelZoom(true);

   var ac = new BMap.Autocomplete(    //建立一个自动完成的对象
       {"input" : "suggestId"
       ,"location" : map
   });
     ac.addEventListener("onhighlight", function(e) {  //鼠标放在下拉列表上的事件
     var str = "";
         var _value = e.fromitem.value;
         var value = "";
         if (e.fromitem.index > -1) {
             value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
         }
         str = "FromItem<br />index = " + e.fromitem.index + "<br />value = " + value;

         value = "";
         if (e.toitem.index > -1) {
             _value = e.toitem.value;
             value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
         }
         str += "<br />ToItem<br />index = " + e.toitem.index + "<br />value = " + value;
         G("searchResultPanel").innerHTML = str;
     });

     var myValue;
     ac.addEventListener("onconfirm", function(e) {    //鼠标点击下拉列表后的事件
     var _value = e.item.value;
         myValue = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
         G("searchResultPanel").innerHTML ="onconfirm<br />index = " + e.item.index + "<br />myValue = " + myValue;

         setPlace();
     });

     function setPlace(){
         map.clearOverlays();    //清除地图上所有覆盖物
         function myFun(){
             var pp = local.getResults().getPoi(0).point;    //获取第一个智能搜索的结果
             map.centerAndZoom(pp, 18);
             map.addOverlay(new BMap.Marker(pp));    //添加标注
         }
         var local = new BMap.LocalSearch(map, { //智能搜索
           onSearchComplete: myFun
         });
         local.search(myValue);
     }

    map.addEventListener("click",function(e){
         map.clearOverlays();
        var marker1 = new BMap.Marker(new BMap.Point(e.point.lng,e.point.lat));  // 创建标注
        map.addOverlay(marker1);              // 将标注添加到地图中
        document.getElementById("geo").value = e.point.lng + "," + e.point.lat;
    });
</script>
