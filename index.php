<?php

include_once('init.php');



$shop_array = array();
if (isset($_GET['longitude']) && isset($_GET['latitude'])) {
    setcookie("longitude",$_GET['longitude']);
    setcookie("latitude",$_GET['latitude']);
    $trans_url = 'http://api.map.baidu.com/geoconv/v1/?coords='.$_GET['longitude'].','.$_GET['latitude'].'&from=3&to=5&ak=lcO3zSdb4cgCduHNBT3AoAR9';
    $trans_content = file_get_contents($trans_url);
    $trans = json_decode($trans_content);
    $longitude = $trans->{'result'}[0]->{'x'};
    $latitude = $trans->{'result'}[0]->{'y'};
    //指定 spherical为true,结果中的dis需要乘以6371换算为km
    $collection->ensureIndex(array('location'=>'2d'));
    $where = array('geoNear'=>'e_shops', 'near'=>array(floatval($longitude), floatval($latitude)), 'num'=>20,  'spherical'=>true, 'maxDistance'=>1/6371);
    $shops = $db->command($where);
    $shop_array = $shops['results'];

    
//    $where = array('$geoNear'=>array('near'=>array($_GET['longitude'], $_GET['latitude']), 'distanceField'=>'price', 'limit'=>50, 'spherical'=>true, 'distanceMultiplier'=>3959, 'includeLocs'=>'location', 'maxDistance'=>0.08), 'skip'=>0, 'limit'=>5);
//    $shops = $collection->aggregate($where);
    
//    $where = array('location'=>array('$near'=>array('$geometry'=>array('type'=>'Point', 'coordinates'=>array(floatval($longitude), floatval($latitude))), '$maxDistance'=>1000)));
//    $shops = $collection->find($where);
    $top_shops = $collection->find(array('top'=>"1"));
    $top_shop_array = array();
    while ($top_shops->hasNext()) {
        $top_shop_array[] = $top_shops->getNext();
    }
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="大连快餐速递" />
<meta name="description" content=" 大连快餐速递" />
<title>大连快餐速递</title>


<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-app-status-bar-style" content="white" />
<meta name="format-detection" content="telephone=no" />
<meta name="copyright" content="Copyright (c) 2007-2014 juooo" />
<link rel="stylesheet" type="text/css" href="public/css/style-min.css?v1.2.32">
<link rel="stylesheet" type="text/css" href="public/css/alert.css?v1.6">
<script src="public/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=lcO3zSdb4cgCduHNBT3AoAR9"></script>
    <script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/convertor.js"></script>

        <?php
  if (!isset($_GET['longitude']) && !isset($_GET['latitude'])) { ?>



        <script type="text/javascript">



        if (window.navigator.geolocation) {
            var options = {
                enableHighAccuracy: true
            };
            window.navigator.geolocation.getCurrentPosition(handleSuccess, handleError, options);
        } else {
            alert("浏览器不支持html5来获取地理位置信息");
        }

        function handleSuccess(position){
            // 获取到当前位置经纬度  本例中是chrome浏览器取到的是google地图中的经纬度
            var lng = position.coords.longitude;
            var lat = position.coords.latitude;

            // 百度地图API功能
//谷歌坐标
            var x = lng;
            var y = lat;
            var ggPoint = new BMap.Point(x,y);



//坐标转换完之后的回调函数
            translateCallback = function (point){
                window.location.href="index.php?longitude="+point.lng+"&latitude="+point.lat+"&id=<?php if (isset($_GET['id'])) {echo $_GET['id'];} ?>";
            }

            setTimeout(function(){
                BMap.Convertor.translate(ggPoint,2,translateCallback);     //GCJ-02坐标转成百度坐标
            },10);



        }

        function handleError(error){

        }
    </script>
    <?php
exit;
      }
    ?>

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
</script><script src="public/js/jquery.tipswindow-2.2.js"></script>

</head>

<body ontouchmove="check_move()">
<script>
function check_move(){
if($(".juMenu").hasClass('juMenuPay'))
    {
      $(".juMenu").removeClass('juMenuPay');
  }
}
</script>
<div id="loadingBj"></div>
<div class="ajaxLoad">
 <span class="loading"><em class="loading-em"></em></span>
 <span class="loading-color">努力加载中...</span>
</div>
<div class="g-hd">
	<!--div class="l"><a href="javascript:void(0)" id="popupDialog">全国<i class="sp select"></i></a></div-->
 
   <!-- <div class="l"><div class="br1"><a href="index.php/index/city" id="popupDialog">大连<i class="select">ˇ</i></a></div></div>-->
    <h1 class="sp logo">大连快餐导航触屏版</h1>
</div>

<!--div class="search_bar">
 
    <div class="search_key">
    	
	      <span class="c">
	      	<input onfocus="if(value=='请输入演出、艺人、场馆名称') {value=''}" onblur="if (value=='') {value='请输入演出、艺人、场馆名称'}" value="请输入演出、艺人、场馆名称" type="text" class="text" name="word">
	      </span>
	    </div>
	    <a href="javascript:;" class="search_btn"><i class="icon_txt gs-btn"></i></a>
	
  
</div-->
<script>

</script>
<div class="g-mn">
	<div id="slideBox" class="m-slide">
	 <div class="bd">
	 	<ul>
            <?php
            foreach ($top_shop_array as $shop) {
            ?>
	 			 			<li>
	 				<a href="ticket.php?shopid=<?php echo $shop['_id'];?>&id=<?php echo $_GET['id'] ?> ">
	 				<img  style="vertical-align:middle;"  src="<?php if ($shop['image']) {echo  $shop['image'];} else {echo 'public/uploads/2.jpg';}?>" alt="蟹将军 " />
	 				</a>
	 			</li>
            <?php
            }
            ?>
	 			 	
	 	</ul>
	 </div>
	 <div class="hd">
	 	<ul></ul>
	 </div>
	</div>
	<script type="text/javascript">
		TouchSlide({ 
			slideCell:"#slideBox",
			titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell:".bd ul", 
			effect:"leftLoop", 
			autoPage:true,//自动分页
			autoPlay:true //自动播放
		});
	</script>
</div>

<nav class="g-nav cf">


  
</nav>

<div class="warp">


<!--//////////////////////////////
///列表开始
-->
    <div class="cate_main ">
            <?php
            foreach ($shop_array as $shop) {
            ?>
    	     	       <dl class="item cf" onclick="window.location.href='ticket.php?shopid=<?php echo $shop['obj']['_id'];?>&id=<?php echo $_GET['id'] ?>&longitude=<?php echo $_GET['longitude'] ?>&latitude=<?php echo $_GET['latitude'] ?>'">
        	<h2><?php echo $shop['obj']['name'];?></h2>
            <dt><a href="ticket.php?shopid=<?php echo $shop['obj']['_id'];?>&id=<?php echo $_GET['id'] ?>&longitude=<?php echo $_GET['longitude'] ?>&latitude=<?php echo $_GET['latitude'] ?>">
            	<img src="<?php if ($shop['obj']['image']) {echo  $shop['obj']['image'];} else {echo 'public/uploads/2.jpg';}?>">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">推<br>荐</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                              <span class="star star-<?php echo $shop['obj']['star']*10;?>"></span>                            </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time"><?php echo $shop['obj']['address'];?></span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost"><?php echo $shop['obj']['price'];?>元</span></dd>

         
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

    <div class="loadMore1"  data_id="1"><!--i></i-->没有更多了..</div>
<!--div  id="city" style="display:none"-->
<!--div data-role="popup" id="popupDialog-screen" style="display:none;">
<div class="pop-list"  >
	<div class="title">
    	<h2>选择分类</h2>
    	 <a href="javascript:;" id="c2" class="close">关闭</a>
    </div>
    <div class="content">
    	<ul class="panel_sb">
        	        	<li class="sbon" onclick="setcity(0)">
        	        		<div class="txt">全部城市</div></li>
            
            
        </ul>
    </div>
</div>
</div-->
<!--/div-->
  <div class="foot-menu">
       	  <a href="mystar.php?id=<?php echo $_GET['id'] ?>&longitude=<?php echo $_GET['longitude'] ?>&latitude=<?php echo $_GET['latitude'] ?>" class="myjuo"><i class="sp"></i>我的收藏</a>
        <a href="http://mp.weixin.qq.com/s?__biz=MzA5NzMzMTMwMA==&mid=200930116&idx=1&sn=b4f4075d44a9172aee9ee5056cd99003#rd" class="atte"><i class="sp"></i>关注我们</a>
  </div>
  <div class="tel"><a href="tel:3A4001858666"><i class="fontIcon fa-phone"></i>联系客服:400-185-8666</a></div>
    
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
        	<li class="nav01"><a href="mystar.php?id=<?php echo $_GET['id'] ?>&longitude=<?php echo $_GET['longitude'] ?>&latitude=<?php echo $_GET['latitude'] ?>"><i class="AppFonts">&#xf00e9;</i>我的收藏</a></li>
            <li class="nav02"><a href="http://mp.weixin.qq.com/s?__biz=MzA5NzMzMTMwMA==&mid=200930116&idx=1&sn=b4f4075d44a9172aee9ee5056cd99003#rd"><i class="ui-iconfont">&#508;</i>关注我们</a>
                    
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

</div>


<script>	
$(function(){
	$(".loadMore").bind("click",function(){
		check_more(this);
	})
})

/**
 * 加载更多
 * ?param  {[type]} obj [description]
 * ?return {[type]}     [description]
 */
 	var page=2;
	function check_more(obj){
		//var city_id=0;
		var flag = $(obj).attr('data_id');
		//alert(flag)
		if(flag==1){
			$.ajax({
				type:'post',
				url:""+"/index.php/Ajax/indexticket",
				//url:'http://www.juooo.com/weixin/searchdetail/ajax?page=3&city=1&type=0&show_name=&star=',
				data:"page="+page,
				//data:'page=3&city=1&type=0&show_name=&stat=',
				dataType:'html',
				error:function(){
					alert("请稍微在试");
				},
				beforeSend:function(){
					$(obj).html("<i></i>点击加载更多");
					$(obj).unbind("click");
				},

				success:function(html){
					//alert(html)
					if(html!=""){
						$(".cate_main").append(html);
						 $("img.c").lazyload({ 
							placeholder : "public/image/bank.png",
							effect : "fadeIn"
						});
						page++;
					} else {
						$(obj).attr("data_id",0);
						$(obj).html("已加载全部");

					}
				},
				complete:function(){
					$(".loadMore").bind("click",function(){
						check_more(this);
					});

					if($(obj).attr("data_id")==1){
						$(obj).html("点击加载更多");
					}
					
				}

			});
		}
	}


</script>

</body>
</html>
