<?php

include_once('init.php');

$collection = $db->selectCollection('e_favorite');
$collection2 = $db->selectCollection('e_shops');
$mystar = array('id' => $_GET['id']);

$my_shop=$collection->find($mystar);
$shop_array = array();
while ($my_shop->hasNext()) {
    $_temp = $my_shop->getNext();
    $shop_array[]=  $collection2->findOne(array("_id"=>$_temp["shopid"]));

}

 ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content=" " />
    <meta name="description" content=" " />
    <title>我的收藏</title>
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-app-status-bar-style" content="white" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="copyright" content="Copyright (c) 2007-2014 juooo" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style-min.css?v1.2.32">
    <link rel="stylesheet" type="text/css" href="public/css/alert.css?v1.6">
    <script src="public/js/jquery-1.7.1.min.js"></script>
    <script src="public/js/TouchSlide.1.1.js"></script>
    <script src="public/js/jquery.lazyload.mini.js"></script>
    <script src="public/js/base.js?v1.2"></script>

    <script>
        $(window).load(function(){
            if($("#loadingBj") && $(".ajaxLoad")){
                $("#loadingBj").hide();
                $(".ajaxLoad").hide();
            }
        })
        $(function() {
            $(".cate_main img").lazyload({
                placeholder : "public/image/bank.png",
                //container : ".tg_coun",
                effect : "fadeIn"
            });
        });
    </script><script>

        $(function(){
            $('.proContent  img').attr('width',"100%");
            $('.proContent  img').attr('height',"100%");
        })
    </script>
</head>

<body>
<div class="g-hd">
    <div class="l">
        <div class="br1">
            <a href="index.php?id=<?php echo $_GET['id'] ?>&longitude=<?php echo $_GET['longitude'] ?>&latitude=<?php echo $_GET['latitude'] ?>" class="btn_back">返回</a>
        </div>
    </div>
    <h1 class="g_tit">我的收藏</h1>

</div>


<div class="warp pt17">

    <div class="cate_main ">
        <?php
        foreach ($shop_array as $shop) {
            ?>
            <dl class="item cf" onclick="window.location.href='ticket.php?shopid=<?php echo $shop['_id'];?>&id=<?php echo $_GET['id'] ?>&longitude=<?php echo $_GET['longitude'] ?>&latitude=<?php echo $_GET['latitude'] ?>'">
                <h2><?php echo $shop['name'];?></h2>
                <dt><a href="ticket.php?shopid=<?php echo $shop['_id'];?>&id=<?php echo $_GET['id'] ?>&longitude=<?php echo $_GET['longitude'] ?>&latitude=<?php echo $_GET['latitude'] ?>">
                        <img src="<?php if ($shop['image']) {echo  $shop['image'];} else {echo 'public/uploads/2.jpg';}?>">
                    </a>
                <div class="ico_zhu">
                    <div class="ui-iconfont ico_caidai">&#61472;</div>
                    <span class="txt">推<br>荐</span>
                </div>
                </dt>
                <dd><i class="ico ico_time">星级：</i><span class="time">
         	                              <span class="star star-<?php echo $shop['star']*10;?>"></span>                            </span></dd>
                <dd><i class="ico ico_cost">位置：</i>
                    <span class="time"><?php echo $shop['address'];?></span></dd>
                <dd><i class="ico ico_cost">人均消费：</i>
                    <span class="cost"><?php echo $shop['price'];?>元</span></dd>


                <dd>
                    <span class="ico_tag">团购</span>


                </dd>

                <dd class="distance">
                    <?php echo round($shop['dis']*6371*1000); ?>m
                </dd>
            </dl>
        <?php
        }
        ?>
    </div>


    <!---
    //公共底部begin
    -->
    <div class="foot-menu">

    </div>
    <div class="tel"><a href="tel_3A4001858666"><i class="fontIcon fa-phone"></i>400-185-8666</a></div>

    <!---
    //公共底部end
    -->

</div>



</body>
</html>