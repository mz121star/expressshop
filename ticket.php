<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content=" " />
<meta name="description" content=" " />
<title>餐厅详情</title>
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
    <h1 class="g_tit">餐厅详情</h1>
    <a href="#" class="ico_love"></a>
</div>


<div class="warp pt17">

<!--//////////////////////////////
///列表开始
-->
    <div class="cate_main ">
               <dl class="item proShow cf">
            <dt> <img src="http://www.juooo.com/uploads/show/20140219095900692.jpg"></dt>
            <dd><h2>阳光雨露</h2></dd>
                        <dd><i class="ico ico_cost">人均：</i><span class="cost">59元</span></dd>
                        <dd><i class="ico ico_cost">评分：</i> <span class="star star-<?php echo $shop['obj']['star']*10;?>"></span>       </dd>
            <dd id="status"><!--span class="ico_tag sell">座</span-->
                                         <span class="ico_tag">推荐</span>
            

                  
            </dd>
                          
            
                   </dl>
              <dl class="item proLoca cf">
            <div class="s_title">商家信息：</div>
            <ul>
                                <li class="sbon" ><div class="txt"><span class="date"> 沙河口区天兴罗斯福购物广场3楼</span></div></li>

                             <!--  <li><div class="txt"><span class="date">2013.12.13 20:00</span><span class="week">周五</span>星海音乐厅交响乐演奏厅</div></li>
                <li><div class="txt"><span class="date">2013.12.13 20:00</span><span class="week">周五</span>星海音乐厅交响乐演奏厅</div></li> -->
            </ul>
       </dl>
       <div class="proContent">
            <div class="s_title">商家详情：</div>
         　　<span style="font-size:16px;"><strong>阳光雨露</strong></span><br /><br />详细信息　　 </div>
       
<div class="pbtn">
                         
          <a href="tel:1234568" class="btn_yu" id="yd">立即预定</a>
                    <a href="#" class="btn_zai">导航到此</a>
          
          
        
     </div>
              </div>

<!---
//公共底部begin
-->
  <div class="foot-menu">
<div id="SOHUCS"></div>
<script>
  (function(){
    var appid = 'cyreFdmoA',
    conf = 'prod_ea9f8bec9bba47c5efff3d0b46728331';
    var doc = document,
    s = doc.createElement('script'),
    h = doc.getElementsByTagName('head')[0] || doc.head || doc.documentElement;
    s.type = 'text/javascript';
    s.charset = 'utf-8';
    s.src =  'http://assets.changyan.sohu.com/upload/changyan.js?conf='+ conf +'&appid=' + appid;
    h.insertBefore(s,h.firstChild);
  })()
</script>
       	 <!-- <a href="User/login" class="myjuo"><i class="sp"></i>我的聚橙</a>
        <a href="Index/follow" class="atte"><i class="sp"></i>关注聚橙</a>  -->
  </div>
  <div class="tel"><a href="tel_3A4001858666"><i class="fontIcon fa-phone"></i>联系客服:400-185-8666</a></div>    
  
<!---
//公共底部end
-->

</div>
<script>
/**
 * 选择场次
 * ?type {[type]}
 */
var sid = 12894;
var city_id = 1;
var ROOT = "";
$(function(){
  $(".item  ul  li").click(function(){
      if(!$(this).hasClass('sbon')){
          var id=$(this).attr('data-id');
          var onlineseat=$(this).attr("data-onlineseat");
          var sessionid=$(this).attr("data-sessionid");
          var projectid=$(this).attr("data-projectid");
          var showid=$(this).attr('data-showid');
          $(this).addClass('sbon').siblings("li").removeClass('sbon');
          var url = ROOT+"/index.php/Ticket/cart?id="+id+"&sid="+sid+"&city_id="+city_id;
          var onlineseat_url= ROOT+"/index.php/OnlineseatPortal/index?id="+id+'&sid='+showid+'&city_id='+city_id+"&projectId="+projectid+"&sessionId="+sessionid+"";
          //var onlineseat_url="javascript:void(0)";
          $("#yd").attr('href',url);
            if(onlineseat==1){
              $("#xz").attr("href",onlineseat_url);
            }
          $.ajax({
              type:'post',
              url:ROOT+"/index.php/Ticket/sellstatus",
              data:"id="+id,
              dataType:'json',
              success:function(msg){
                  var html;
                  var cxhtml;
                  var ehtml
                  
                  if(msg['sell_status'] == 1){
                      html='<span class="ico_tag">售票中</span>';
                  } else if(msg['sell_status'] == 2){
                      html='<span class="ico_tag">预售</span>';
                  } else {
                      html='<span class="ico_tag yu">预定</span>';
                  }
                  if(msg.cx==1){
                      cxhtml='<div class="wx_nut"><span class="ico_tag yu">促销信息</span>限时优惠<b class="c1">'+msg.per_discount+'</b>折!</div>';
                  }
                  if(msg.e_ticket==1){
                      ehtml='<span class="ico_tag sell">电</span>';
                  } else {
                      ehtml="";
                  }
                  //alert(onlineseat)
                      if(onlineseat==1){
                              zhtml='<span class="ico_tag yu">选座</span>';
                              $(".btn_zai").css("display","");
                          } else {
                              zhtml="";
                              $(".btn_zai").css("display","none");
                        }
                  if(msg.class_type==1){
                      //alert(1)
                        $("#yd").css("display","none");
                        $("#no").css("display","");
                        $(".btn_zai").css("display","none");
                  } else {
                        //alert(2)
                        $("#yd").css("display","");
                        $("#no").css("display","none");
                          //$(".btn_yu").css("display","none");
                      
                  }



                  

                  $("#status").html("").html(html+ehtml+zhtml);
                  $('#cx').html("").html(cxhtml);

                  //alert(html);
                  //<div class="wx_nut"><span class="ico_tag yu">促销信息</span>限时优惠<b class="c1">0</b>折!</div>
                  
              }
          })


      }
  })

  $('.check').click(function(){
      if($(this).attr('href')=="javascript:void(0)"){
        //alert("请选择场次");
         notice_box("请选择场次",1);
      }
  })

})
</script>


</body>
</html>
