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
            <a href="index.php?id=<?php echo $_GET['id'] ?> " class="btn_back">返回</a>
        </div>
    </div>
    <h1 class="g_tit">我的收藏</h1>

</div>


<div class="warp pt17">

    <div class="cate_main ">
        <?php
        foreach ($shop_array as $shop) {
            ?>
            <dl class="item cf" onclick="window.location.href='ticket.php?shopid=<?php echo $shop['_id'];?>&id=<?php echo $_GET['id'] ?> '">
                <h2><?php echo $shop['name'];?></h2>
                <dt><a href="ticket.php?shopid=<?php echo $shop['_id'];?>&id=<?php echo $_GET['id'] ?> ">
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
    <div class="juMenu">
        <div class="t">
            <div class="ju_logo" onclick="check_footer(this)"></div>
        </div>
        <!--div class="juSearch">
              <input class="text" onfocus="if(value=='请输入演出、艺人、场馆名称') {value=''}" onblur="if (value=='') {value='请输入演出、艺人、场馆名称'}" value="请输入演出、艺人、场馆名称" type="text">
              <a href="javascript:;" class="btn"><i class="icon_txt s_btnIco"></i></a>
        </div-->
        <div class="juMenu_list">

            <ul>
                <li class="nav01"><a href="mystar.php?&id=<?php echo $_GET['id'] ?> "><i class="AppFonts">&#xf00e9;</i>我的收藏</a></li>
                <li class="nav01"><a href="mystar.php?&id=<?php echo $_GET['id'] ?> "><i class="AppFonts">&#xf00e9;</i>我的收藏</a></li>
                <li class="nav02"><a href="javascript:;"><i class="ui-iconfont">&#508;</i>关注我们</a>

            </ul>
            <ul>
                <li class="nav03"><a href="index.php?id=<?php echo $_GET['id'] ?> "><i class="ui-iconfont">&#336;</i><span class="txt">首页</span></a></li>
                <li class="nav03"><a href="index.php?id=<?php echo $_GET['id'] ?> "><i class="ui-iconfont">&#336;</i><span class="txt">首页</span></a></li>
                <li class="nav04"><a href="#"><i class="ui-iconfont">&#430;</i>返回顶部</a></li>
            </ul>
        </div>
    </div>

    <script>
        /**
         * 底部
         * ?param  {[type]} obj [description]
         * ?return {[type]}     [description]
         */
        function check_footer(obj)
        {
            if($(".juMenu").hasClass('juMenuPay'))
            {
                $(".juMenu").removeClass('juMenuPay');
            } else {
                $(".juMenu").addClass('juMenuPay');
            }

        }
    </script>
    <!---
    //公共底部end
    -->

</div>



</body>
</html>