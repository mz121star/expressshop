<?php

include_once('init.php');

$trans_url = 'http://api.map.baidu.com/geoconv/v1/?coords='.$_GET['longitude'].','.$_GET['latitude'].'&from=3&to=5&ak=lcO3zSdb4cgCduHNBT3AoAR9';
$trans_content = file_get_contents($trans_url);
$trans = json_decode($trans_content);
$longitude = $trans->{'result'}[0]->{'x'};
$latitude = $trans->{'result'}[0]->{'y'};

$shop = $collection->findOne(array('_id' => new MongoId($_GET['shopid'])));

$collection = $db->selectCollection('e_favorite');

$fav = $collection->findOne(
    array(
            'id'=>$_GET['id'],
            'shopid'=>new MongoId($_GET['shopid'])
         ));

?>
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
    <h1 class="g_tit">餐厅详情</h1>
    <div class="r">
        <div class="brr">
             <?php if(!$fav){?>
            <a id="addstar" href="javascript:;"  ><i   class="fa fa-star-o"></i> </a>
            <?php }else{ ?>
            <a id="removestar" style="display: none" href="javascript:;"  ><i   class="fa fa-star"></i> </a>
            <?php } ?>
        </div>
    </div>
</div>


<div class="warp pt17">

<!--//////////////////////////////
///列表开始
-->
    <div class="cate_main ">
               <dl class="item proShow cf">
            <dt> <img src="<?php if ($shop['image']) {echo $shop['image'];} else {echo 'public/uploads/2.jpg';}?>"></dt>
            <dd><h2><?php echo $shop['name'];?></h2></dd>
                        <dd><i class="ico ico_cost">人均：</i><span class="cost"><?php echo $shop['price'];?>元</span></dd>
                        <dd><i class="ico ico_cost">评分：</i> <span class="star star-<?php echo $shop['star']*10;?>"></span>       </dd>
            <dd id="status"><!--span class="ico_tag sell">座</span-->
                                         <span class="ico_tag">推荐</span>
            

                  
            </dd>
                          
            
                   </dl>
              <dl class="item proLoca cf">
            <div class="s_title">商家信息：</div>
            <ul>
                                <li class="sbon" ><div class="txt"><span class="date"> <?php echo $shop['address'];?></span></div></li>

                             <!--  <li><div class="txt"><span class="date">2013.12.13 20:00</span><span class="week">周五</span>星海音乐厅交响乐演奏厅</div></li>
                <li><div class="txt"><span class="date">2013.12.13 20:00</span><span class="week">周五</span>星海音乐厅交响乐演奏厅</div></li> -->
            </ul>
       </dl>
       <div class="proContent">
            <div class="s_title">商家详情：</div>
         　　<span style="font-size:16px;"><strong><?php echo $shop['name'];?></strong></span><br /><br /><?php echo $shop['description'];?></div>
       
<div class="pbtn">
                         
          <a href="tel:1234568" class="btn_yu" id="yd">立即预定</a>
                    <a href="#" class="btn_zai">导航到此</a>
          
          
        
     </div>
              </div>

<!---
//公共底部begin
-->
  <div class="foot-menu">
<!-- UY BEGIN -->
<div id="uyan_frame"></div>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1814370"></script>
<!-- UY END -->
       	 <!-- <a href="User/login" class="myjuo"><i class="sp"></i>我的聚橙</a>
        <a href="Index/follow" class="atte"><i class="sp"></i>关注聚橙</a>  -->
  </div>
  <div class="tel"><a href="tel_3A4001858666"><i class="fontIcon fa-phone"></i>400-185-8666</a></div>
  
<!---
//公共底部end
-->

</div>
<script>
    $("#addstar").on("click",function(){
        $.get("favorite.php",{"shopid":'<?php echo $_GET["shopid"] ?>',"id":'<?php echo $_GET["id"] ?>'}).success(function(d){

                $("#addstar").hide();
                $("#removestar").show();

        })
    })
</script>


</body>
</html>
