<?php

include_once('init.php');

if (isset($_GET['longitude']) && isset($_GET['latitude'])) {
    $where = array('geoNear'=>'places', 'near'=>array($_GET['longitude'], $_GET['latitude']), 'num'=>1000);
    $shops = $collection->find($where);
} else {
    $shops = $collection->find();
}

//{
//  "_id" : ObjectId("53a631025e327b170c694bb5"),
//  "name" : "尖沙嘴茶餐厅",
//  "star" : 4,
//  "location" : "上海",
//  "price" : 120,
//  "image" : "http://www.baidu.com",
//  "longitude" :100,
//  "latitude":100
//}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="大连快餐速递" />
<meta name="description" content=" 大连快餐速递" />
<title>大连快餐速递</title>
<script type="text/javascript" name="baidu-tc-cerfication" src="../apps.bdimg.com/cloudaapi/lightapp.js#966e3f849a0d64459e97eeb81059f5da"></script> <script type="text/javascript">window.bd && bd._qdc && bd._qdc.init({app_id: '0254b5748d6049bce60ed9fa'});</script>
<script type="text/javascript">window.bd && bd._qdc && bd._qdc.init({app_id: '7c8da0082524433bf1c2e057'});</script>
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-app-status-bar-style" content="white" />
<meta name="format-detection" content="telephone=no" />
<meta name="copyright" content="Copyright (c) 2007-2014 juooo" />
<link rel="stylesheet" type="text/css" href="public/css/style-min.css?v1.2.32">
<link rel="stylesheet" type="text/css" href="public/css/alert.css?v1.6">
<script src="public/js/jquery-1.7.1.min.js"></script> 
<script src="public/js/TouchSlide.1.1.js"></script>
<script src="public/js/jquery.lazyload.mini.js"></script> 
<script src="public/js/base.js?v1.2"></script>
<script src="public/js/juooostatistics.js"></script>  
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
$(function(){
	$(".search_btn").click(function(){
		var word = $('input[name="word"]').val();
		if(word=="请输入演出、艺人、场馆名称" || word==""){
			alert("请输入演出、艺人、场馆名称");
			return false;
		}

		window.location.href=""+"/index.php/search/search?word="+escape(word);

	
	})
})
</script>
<div class="g-mn">
	<div id="slideBox" class="m-slide">
	 <div class="bd">
	 	<ul>
	 			 			<li>
	 				<a href="ticket.html.html">
	 				<img  style="vertical-align:middle;"  src="public/uploads/xjj.jpg" alt="蟹将军 " />
	 				</a>
	 			</li>
	 			 			<li>
	 				<a href="ticket.html?sid=13633&city_id=1&venue_id=100">
	 				<img  style="vertical-align:middle;"  src="public/uploads/yz.jpg" alt="银座日本料理 "  />
	 				</a>
	 			</li>
	 			 			<li>
	 				<a href="javascript:void(0)">
	 				<img  style="vertical-align:middle;"   src="public/uploads/xjj.jpg" alt="蟹将军 " />
	 				</a>
	 			</li>
	 			 			<li>
	 				<a href="ticket.html?sid=13214&city_id=1&venue_id=115">
	 				<img  style="vertical-align:middle;" src="public/uploads/xjj.jpg" alt="蟹将军 "  />
	 				</a>
	 			</li>
	 			 			<li>
	 				<a href="javascript:void(0)">
	 				<img  style="vertical-align:middle;"   src="public/uploads/xjj.jpg" alt="蟹将军 "  />
	 				</a>
	 			</li>
	 			 			<li>
	 				<a href="javascript:void(0)">
	 				<img  style="vertical-align:middle;"   src="public/uploads/xjj.jpg" alt="蟹将军 " />
	 				</a>
	 			</li>
	 			 	
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
		<ul>
         <li class="nav01"><a href="  index.php/List.html"><div class="AppFonts"><IMG SRC="1.PNG"></div>川菜</a></li>
         <li class="nav02"><a href="  index.php/List.html"><div class="AppFonts"><IMG SRC="2.PNG"></div>西餐</a></li>
         <li class="nav03"><a href="  index.php/List.html"><div class="AppFonts"><IMG SRC="3.PNG"></div>快餐</a></li>
         <li class="nav04"><a href="  index.php/List.html"><div class="AppFonts"><IMG SRC="4.PNG"></div>家常菜</a></li>
        </ul>

  
</nav>

<div class="warp">


<!--//////////////////////////////
///列表开始
-->
    <div class="cate_main ">
            <?php
            foreach ($shops as $shop) {
            ?>
    	     	       <dl class="item cf" onclick="window.location.href='ticket.html?sid=13054&city_id=4&venue_id=190'">
        	<h2><?php echo $shop['name'];?></h2>
            <dt><a href="ticket.html?sid=13054&city_id=4&venue_id=190">
            	<img src="public/uploads/2.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">推<br>荐</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                              <span class="star star-<?php echo $shop['star'];?>"></span>                            </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time"><?php echo $shop['location'];?></span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost"><?php echo $shop['price'];?>元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    	
           </dd>
                           <dd class="distance">
                               280m
                           </dd>
       </dl>
            <?php
            }
            ?>
    </div>

    <div class="loadMore"  data_id="1"><!--i></i-->点击加载更多</div>
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
       	  <a href="index.php/User/login" class="myjuo"><i class="sp"></i>我的收藏</a>
        <a href="index.php/Index/follow" class="atte"><i class="sp"></i>关注我们</a>
  </div>
  <div class="tel"><a href="tel_3A4001858666"><i class="fontIcon fa-phone"></i>联系客服:400-185-8666</a></div>  
    
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
        	<li class="nav01"><a href="ticket.html/history"><i class="AppFonts">&#xf00e9;</i>最近浏览</a></li>
                         <li class="nav02"><a href="index.php/user/login?flag=_2Findex.php_2Fmember_2Fmyorder"><i class="ui-iconfont">&#508;</i>我的订单</a>
                    
        </ul>
        <ul>
        	<li class="nav03"><a href="index.php/index/index"><i class="ui-iconfont">&#336;</i><span class="txt">首页</span></a></li>
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
