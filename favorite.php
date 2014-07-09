<?php

include_once('init.php');
$flag=$_GET["flag"];
$collection = $db->selectCollection('e_favorite');
$add = array('shopid' => new MongoId($_GET['shopid']), 'id' => $_GET['id']);
if($flag=="add"){
    $collection->insert($add);
}
if($flag=="remove"){
    $collection->remove($add);
}
echo "1"
?>

