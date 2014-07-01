<?php
header('Content-Type: text/html; charset=UTF-8');

error_reporting(E_ALL|E_STRICT);
ini_set("display_errors","on");

// 数据库前缀,表名
define("MONGODB", "kahana.mongohq.com");
define("MONGOPORT", 10050);
define("MONGOUSER", "shop");
define("MONGOPW", '1qaz2wsx');

// 连接Mongo
$server = "mongodb://".MONGOUSER.":".MONGOPW."@".MONGODB.":".MONGOPORT;
$conn = new MongoClient();
if($conn === false)
{
    print "Mongo() fail\n";
    exit(-1);
}

$dbname = "shop";
$tbname = "shops";
$db = $conn->selectDB($dbname);
$collection = $db->selectCollection($tbname);