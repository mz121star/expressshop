<?php
session_start();
if(!$_SESSION["uname"]){
    header("Location: login.php");
    exit;
}
include_once('init.php');
if (count($_POST)) {
    if ($_FILES['image']['name']) {
        $file_type = file_type($_FILES['image']['tmp_name']);
    } else {
        $file_type = 'pass';
    }
    $allow_type = array('jpg', 'png');
    if ($file_type == 'pass' || in_array($file_type, $allow_type)) {
        $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/public/uploads/' ;
        $uploadname = md5($_FILES['image']['name'].time());
        $uploadfile = $uploaddir.$uploadname.'.'.$file_type;
        $imagename = '';
        if (move_uploaded_file($_FILES ['image']['tmp_name'], $uploadfile)) {
            $imagename = 'http://'.$_SERVER['SERVER_NAME'].'/public/uploads/'.$uploadname.'.'.$file_type;
        }
        $geo = explode(',', $_POST['geo']);
        $top = (isset($_POST['top'])) ? $_POST['top'] : '0';
        $add = array('name'=>$_POST['name'], 'star'=>$_POST['star'], 'address'=>$_POST['address'], 'phone'=>$_POST['phone'], 'location'=>array('longitude'=>floatval($geo[0]), 'latitude'=>floatval($geo[1])), 'price'=>$_POST['price'], 'type'=>$_POST['type'], 'description'=>$_POST['description'], 'top'=>$top);
        if (isset($_POST['shopid'])) {
            $add['_id'] = new MongoId($_POST['shopid']);
        }
        if (isset($_POST['oldimage']) ) {
            if ($imagename) {
                $add['image'] = $imagename;
            } else {
                $add['image'] = $_POST['oldimage'];
            }
        } elseif (!isset($_POST['oldimage']) && $imagename) {
            $add['image'] = $imagename;
        }
        $collection->save($add);
        header('Location: /addshop.php');
    } else {
        echo '<script>alert("只能上传jpg与png格式的图片");location.href = "/addshop.php";</script>';
    }
}

if (isset($_GET['type']) && $_GET['type'] == 'del') {
    $collection2 = $db->selectCollection('e_favorite');
    if (isset($_GET['shopid'])) {
        $collection->remove (array('_id' => new MongoId($_GET['shopid'])), array( "justOne"  =>  true ));
        $collection2->remove (array('shopid' => new MongoId($_GET['shopid'])));
        header('Location: /addshop.php');
    }
}

$shopinfo = array('name'=>'', 'star'=>'', 'address'=>'', 'phone'=>'',  'location'=>array('longitude'=>'','latitude'=>''), 'price'=>'', 'type'=>'', 'description'=>'', 'top'=>'', 'image'=>'', 'imgname'=>''); 
if (isset($_GET['shopid'])) {
    $shopinfo = $collection->findOne(array('_id' => new MongoId($_GET['shopid'])));
}

$shops = $collection->find();
$shop_array = array();
while ($shops->hasNext()) {
    $shop_array[] = $shops->getNext();
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
                #allmap{width:400px;height:400px;}
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" name="baidu-tc-cerfication" src="http://apps.bdimg.com/cloudaapi/lightapp.js#8994ab4df9d6a5a169421089618fc5c3"></script><script type="text/javascript">window.bd && bd._qdc && bd._qdc.init({app_id: '2960154a5bbf7ef967f95eff'});</script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=lcO3zSdb4cgCduHNBT3AoAR9"></script>

    <script src="js/vendor/jquery-1.10.2.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/style-min.css?v1.2.32">
    <title>获取商家坐标</title>
    <style>
        input{border-bottom: 1px solid #c0c0c0}
    </style>
</head>
<body>
<div class="container">
    <!-- Nav tabs -->
 <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#home" role="tab" data-toggle="tab">添加餐馆</a></li>
        <li><a href="#list" role="tab" data-toggle="tab">餐馆列表</a></li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <div class="row">
               <div class="col-md-6" >
                   <form method="post" action="addshop.php" enctype="multipart/form-data">
                       <?php if (isset($shopinfo['_id'])) {?><input type="hidden" name="shopid" value="<?php echo $shopinfo['_id']?>"><input type="hidden" name="oldimage" value="<?php echo $shopinfo['image']?>"><?php }?>
                       <table>
                           <tr><td>餐厅名称</td><td><input class="form-control" name="name" type="text" value="<?php echo $shopinfo['name']?>"></td></tr>
                           <tr><td>星级</td><td><input class="form-control" name="star" type="text" value="<?php echo $shopinfo['star']?>"></td></tr>
                           <tr><td>地址</td><td><input class="form-control" name="address" type="text" value="<?php echo $shopinfo['address']?>"></td></tr>
                           <tr><td>电话</td><td><input  class="form-control" name="phone" type="text" value="<?php echo $shopinfo['phone']?>"></td></tr>
                           <tr><td>坐标</td><td><input  class="form-control"  name="geo" id="geo" type="text" value="<?php if ($shopinfo['location']['longitude']) {echo $shopinfo['location']['longitude'].','.$shopinfo['location']['latitude'];}?>"></td></tr>
                           <tr><td>平均价格</td><td><input  class="form-control"  name="price" type="text" value="<?php echo $shopinfo['price']?>"></td></tr>
                           <tr class="hidden"><td>餐厅类型</td><td><select  name="type"   class="form-control "  >
                                       <option value="zhongcan" <?php if ($shopinfo['type'] == 'zhongcan') {echo 'selected';}?>>中餐</option>
                                       <option value="xican" <?php if ($shopinfo['type'] == 'xican') {echo 'selected';}?>>西餐</option>
                                       <option value="hancan" <?php if ($shopinfo['type'] == 'hancan') {echo 'selected';}?>>韩餐</option>
                                       <option value="riliao" <?php if ($shopinfo['type'] == 'riliao') {echo 'selected';}?>>日料</option>
                                   </select></td></tr>
                           <tr><td>置顶</td><td><input   class="form-control"  type="checkbox" name="top" value="1" <?php if ($shopinfo['top'] == '1') {echo 'checked';}?>></td></tr>
                           <tr><td>图片</td><td><input  class="form-control"   name="image" type="file"><?php if (isset($shopinfo['image']) && $shopinfo['image']) {?><img src="<?php echo $shopinfo['image']?>"><?php }?></td></tr>
                           <tr><td>餐厅介绍</td><td><script  name="description"  id="description"><?php echo $shopinfo['description']?></script></td></tr>
                           <tr><td colspan="2"><input   class="btn btn-primary"  type="submit" value="add"></td></tr>
                       </table>

                   </form>
                   <br>
               </div>
                <div class="col-md-6" >
                    <div id="r-result">
                       <br />查询地址:<input class="form-control" type="text" id="suggestId" size="20" value="" style="width:150px;" />
                    </div>
                    <div id="allmap"></div></div>
            </div>



        </div>
        <div class="tab-pane" id="list">
            <table class="table table-hover table-bordered table-condensed">
                <thead>
                <th>餐厅名称</th>
                <th>星级</th>
                <th>地址</th>
                <th>价格</th>
                <th>图片</th>
                <th>操作</th>
                </thead>
                <tbody>
                <?php
                foreach ($shop_array as $value) { ?>
                    <tr>
                        <td><?php echo $value['name']?></td>
                        <td><span class="star star-<?php echo $value['star']*10;?>"></span></td>
                        <td><?php echo $value['address']?></td>
                        <td><?php echo $value['price']?>￥</td>
                        <td><img src="<?php echo $value['image']?>" width="100" /></td>
                        <td><a href="/addshop.php?shopid=<?php echo $value['_id']?>">修改</a>&nbsp;&nbsp;<a id="delete_<?php echo $value['_id']?>" href="javascript:;">删除</a></td>
                    </tr>
                <?php }
                ?>
                </tbody>
            </table>

        </div>

    </div>


</div>
</body>
</html>
<script type="text/javascript " src="ueditor/ueditor.config.js "></script>
	<script type="text/javascript " src="ueditor/ueditor.all.js "></script>
<script type="text/javascript">
$(function (){
    $("a[id^='delete_']").click(function () {
        var shopid = this.id.substr(7);
        if (confirm("你确认要删除吗？")) {
            location.href = "/addshop.php?shopid="+shopid+"&type=del";
        }
    });
});

var editor = UE.getEditor('description', {
    toolbars: [
        ['fullscreen', 'source', 'undo', 'redo', 'bold','simpleupload', 'insertimage']
    ],
    autoHeightEnabled: true,
    autoFloatEnabled: true,
    initialFrameHeight:300,
    initialFrameWidth:400
});

    // 百度地图API功能
    var map = new BMap.Map("allmap");            // 创建Map实例
    map.centerAndZoom("大连",12);                   // 初始化地图,设置城市和地图级别。
    map.enableScrollWheelZoom(true);


     var local = new BMap.LocalSearch(map, {
       renderOptions:{map: map}
     });

       document.getElementById("suggestId").addEventListener("change",function(e){
                     map.clearOverlays();
                    local.search(document.getElementById("suggestId").value);
      })
    map.addEventListener("click",function(e){
         map.clearOverlays();
        var marker1 = new BMap.Marker(new BMap.Point(e.point.lng,e.point.lat));  // 创建标注
        map.addOverlay(marker1);              // 将标注添加到地图中
        document.getElementById("geo").value = e.point.lng + "," + e.point.lat;
    });
</script>
