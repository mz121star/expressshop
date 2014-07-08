<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
 <script type="text/javascript" src="http://api.map.baidu.com/api?type=quick&ak=lcO3zSdb4cgCduHNBT3AoAR9&v=1.0"></script>
<title>导航</title>
<style type="text/css">
body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;} @media (max-device-width: 780px){#golist{display: block!important;}}#golist {display: none;}
</style>
</head>
<body>

<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">

// 百度地图API功能
var map = new BMap.Map("allmap");
var point = new BMap.Point(116.417854,39.923978);
map.centerAndZoom(point, 15);
map.addControl(new BMap.ZoomControl());          //添加地图缩放控件
var opts = {
  width : 200,     // 信息窗口宽度
  height: 70,     // 信息窗口高度
  title : "阳光雨露"  // 信息窗口标题
}
var infoWindow = new BMap.InfoWindow("点击开始导航", opts);  // 创建信息窗口对象
map.openInfoWindow(infoWindow,point); //开启信息窗口


var marker1 = new BMap.Marker(new BMap.Point(116.417854,39.921988));  // 创建标注
map.addOverlay(marker1);              // 将标注添加到地图中
marker1.addEventListener("click", function(){

/*start|end：（必选）
{name:string,latlng:Lnglat}
opts:
mode：导航模式，固定为
BMAP_MODE_TRANSIT、BMAP_MODE_DRIVING、
BMAP_MODE_WALKING、BMAP_MODE_NAVIGATION
分别表示公交、驾车、步行和导航，（必选）
region：城市名或县名  当给定region时，认为起点和终点都在同一城市，除非单独给定起点或终点的城市
origin_region/destination_region：同上
*/

	var start = {
	     name:"王府井"
	}
	var end = {
	    name:"西单"
	}
	var opts = {
	    mode:BMAP_MODE_DRIVING,
	    region:"北京"
	}
	var ss = new BMap.RouteSearch();
	ss.routeCall(start,end,opts);
});
</script>
