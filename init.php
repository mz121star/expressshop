<?php
header('Content-Type: text/html; charset=UTF-8');

error_reporting(E_ALL|E_STRICT);
ini_set("display_errors","on");

// 数据库前缀,表名
define("MONGODB", "linus.mongohq.com");
define("MONGOPORT", 10062);
define("MONGOUSER", "njblog");
define("MONGOPW", 'njblog');
define("MONGODBNAME", 'NJBlog');

// 连接Mongo
$server = "mongodb://".MONGOUSER.":".MONGOPW."@".MONGODB.":".MONGOPORT.'/'.MONGODBNAME;
$conn = new MongoClient($server);
if($conn === false)
{
    print "Mongo() fail\n";
    exit(-1);
}

$tbname = "e_shops";
$db = $conn->selectDB(MONGODBNAME);
$collection = $db->selectCollection($tbname);