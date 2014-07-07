<?php

include_once('init.php');

$collection = $db->selectCollection('e_favorite');
$add = array('shopid' => new MongoId($_GET['shopid']), 'id' => $_GET['id']);
$collection->insert($add);

?>
收藏成功
<br><br>
<a href="/index.php?id=<?php echo $_GET['id']?>&longitude=<?php echo $_GET['longitude']?>&latitude=<?php echo $_GET['latitude']?>">返回首页</a>
