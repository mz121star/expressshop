<?php
/**
 * Created by PhpStorm.
 * User: 1129877
 * Date: 14-7-8
 * Time: 上午11:19
 */
  $originPic=$_GET["picurl"];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="大连快餐速递" />
<meta name="description" content=" 大连快餐速递" />
<title>头像加V </title>


<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-app-status-bar-style" content="white" />
<meta name="format-detection" content="telephone=no" />
<meta name="copyright" content="Copyright (c) 2007-2014 juooo" />
<link rel="stylesheet" type="text/css" href="public/css/style-min.css?v1.2.32">
<link rel="stylesheet" type="text/css" href="public/css/alert.css?v1.6">
<script src="public/js/jquery-1.7.1.min.js"></script>
<style>
    .btn_yu{
        width: 300px;
        clear: both;
        line-height: 50px;
        display: block;
        height: 50px;
        background-color: green;
        color: white;
        font-size: 2rem;
        border: 1px;
    }
    .originimage{
        width: 100%;
        max-width: 300px;
    }
</style>
</head>
<body>

  <img src="<?php echo $originPic ?>"   class="originimage" />
  <input type="button" class="btn_yu" value="生成头像">
</body>
</html>