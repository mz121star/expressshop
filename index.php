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
    	     	       <dl class="item cf" onclick="window.location.href='ticket.html?sid=13054&city_id=4&venue_id=190'">
        	<h2>尖沙嘴茶餐厅</h2>
            <dt><a href="ticket.html?sid=13054&city_id=4&venue_id=190">
            	<img src="public/uploads/2.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">推<br>荐</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                              <span class="star star-45"></span>                            </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">上海音乐厅</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">120元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    	
           </dd>
                           <dd class="distance">
                               280m
                           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=12877&city_id=52&venue_id=606'">
        	<h2>千手予健康烤肉</h2>
            <dt><a href="ticket.html?sid=12877&city_id=52&venue_id=606">
            	<img src="public/uploads/3.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                               <span class="star star-45"></span>                              </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">昆明剧院</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">120-380元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    		
    		<span class="ico_tag yu">预订</span>
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=13251&city_id=1&venue_id=104'">
        	<h2>[深圳]知名女演员童蕾领衔主演时尚爱情话剧《香水》</h2>
            <dt><a href="ticket.html?sid=13251&city_id=1&venue_id=104">
            	<img src="http://www.juooo.com/uploads/show/20140514180301131.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                             <span class="star star-45"></span>                          </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">深圳少年宫</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">280-480元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    		
    		<span class="ico_tag yu">预订</span>
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=12801&city_id=1&venue_id=891'">
        	<h2>[深圳]首届城市戏剧节——舒巷城小说改编话剧《鲤鱼门的雾》</h2>
            <dt><a href="ticket.html?sid=12801&city_id=1&venue_id=891">
            	<img src="http://www.juooo.com/uploads/show/20140121142052720.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	        
                   <span class="star star-45"></span>                      </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">龙华文化艺术中心</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">50-200元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    		
    		<span class="ico_tag yu">预订</span>
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=13394&city_id=26&venue_id=583'">
        	<h2>[南昌]唯美欢乐海底探险儿童剧《潜艇总动员》</h2>
            <dt><a href="ticket.html?sid=13394&city_id=26&venue_id=583">
            	<img src="http://www.juooo.com/uploads/show/20131227170928781.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                              <span class="star star-45"></span>                          </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">江西艺术中心大剧院</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">80-500元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    		
    		<span class="ico_tag yu">预订</span>
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=12894&city_id=1&venue_id=115'">
        	<h2>[深圳]费玉清2014深圳演唱会</h2>
            <dt><a href="ticket.html?sid=12894&city_id=1&venue_id=115">
            	<img src="http://www.juooo.com/uploads/show/20140219095900692.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                             <span class="star star-45"></span>                      </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">华润深圳湾体育中心＂春茧＂体育馆</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">140-1680元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    		
    		<span class="ico_tag yu">预订</span>
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=13239&city_id=3&venue_id=122'">
        	<h2>[广州]《大马戏秀·暗黑诱惑》太阳马戏原班团队2014全球</h2>
            <dt><a href="ticket.html?sid=13239&city_id=3&venue_id=122">
            	<img src="http://www.juooo.com/uploads/show/20140318144047521.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	        
                     <span class="star star-45"></span>                       </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">广州天河体育馆</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">280-880元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=13214&city_id=1&venue_id=115'">
        	<h2>[深圳]《大马戏秀·暗黑诱惑》太阳马戏原班团队2014全球</h2>
            <dt><a href="ticket.html?sid=13214&city_id=1&venue_id=115">
            	<img src="http://www.juooo.com/uploads/show/2014031819472553.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	        
                 <span class="star star-45"></span>                      </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">华润深圳湾体育中心＂春茧＂体育馆</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">280-880元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    		
    		<span class="ico_tag yu">预订</span>
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=13434&city_id=60&venue_id=1036'">
        	<h2>[太原]大型励志童话人偶剧《洋葱头历险记》</h2>
            <dt><a href="ticket.html?sid=13434&city_id=60&venue_id=1036">
            	<img src="http://www.juooo.com/uploads/show/20130530112510871.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                             <span class="star star-45"></span>                        </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">太原工人文化宫</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">60-350元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=13726&city_id=1&venue_id=109'">
        	<h2>[深圳]现场水墨动画剧——《中国故事》</h2>
            <dt><a href="ticket.html?sid=13726&city_id=1&venue_id=109">
            	<img src="http://www.juooo.com/uploads/show/20140508171829127.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                            <span class="star star-45"></span>                </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">深圳音乐厅小剧场</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">80-150元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=12741&city_id=1&venue_id=104'">
        	<h2>[深圳]大型雪景体验式儿童剧《雪孩子》</h2>
            <dt><a href="ticket.html?sid=12741&city_id=1&venue_id=104">
            	<img src="http://www.juooo.com/uploads/show/20130528105449404.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                           <span class="star star-45"></span>                        </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">深圳少年宫</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">120-500元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    		
    		<span class="ico_tag yu">预订</span>
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=13433&city_id=60&venue_id=1036'">
        	<h2>[太原]格林童话人偶大剧《睡美人》</h2>
            <dt><a href="ticket.html?sid=13433&city_id=60&venue_id=1036">
            	<img src="http://www.juooo.com/uploads/show/20131123170224421.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                           <span class="star star-45"></span>                     </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">太原工人文化宫</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">60-350元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=12745&city_id=1&venue_id=891'">
        	<h2>[深圳]魔幻音乐秀——仙乐飘飘面包屋</h2>
            <dt><a href="ticket.html?sid=12745&city_id=1&venue_id=891">
            	<img src="http://www.juooo.com/uploads/show/20140331181214349.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                          <span class="star star-45"></span>                      </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">龙华文化艺术中心</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">60-160元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    		
    		<span class="ico_tag yu">预订</span>
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=12040&city_id=6&venue_id=174'">
        	<h2>[成都]韩国火爆儿童音乐剧——YooHoo带你环游世界</h2>
            <dt><a href="ticket.html?sid=12040&city_id=6&venue_id=174">
            	<img src="http://www.juooo.com/uploads/show/2014040118292886.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                          <span class="star star-45"></span>             </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">成都娇子音乐厅</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">50-400元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    		
    		<span class="ico_tag yu">预订</span>
    	
           </dd>
       </dl>
             <dl class="item cf" onclick="window.location.href='ticket.html?sid=12059&city_id=17&venue_id=164'">
        	<h2>[武汉]至呆至萌早教亲子剧《Hello，宝宝豆》</h2>
            <dt><a href="ticket.html?sid=12059&city_id=17&venue_id=164">
            	<img src="http://www.juooo.com/uploads/show/20131226114604484.jpg">
            </a>
            	            	<div class="ico_zhu">
                	<div class="ui-iconfont ico_caidai">&#61472;</div>
                   	<span class="txt">主<br>办</span>
                	</div>
                	            </dt>
            <dd><i class="ico ico_time">星级：</i><span class="time">
         	                           <span class="star star-45"></span>                             </span></dd>
        	  <dd><i class="ico ico_cost">位置：</i>
            	<span class="time">湖北剧院</span></dd>
            <dd><i class="ico ico_cost">人均消费：</i>
            	<span class="cost">60-200元</span></dd>

         
            <dd>	
                        	<span class="ico_tag">团购</span>
                	
    	
           </dd>
       </dl>
                      
          
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
