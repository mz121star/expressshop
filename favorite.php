<?php

include_once('init.php');

$collection = $db->selectCollection('e_favorite');
$add = array('shopid' => new MongoId($_GET['shopid']), 'id' => $_GET['id']);
$collection->insert($add);
echo "1"
?>

