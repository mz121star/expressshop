<?php
header('Content-Type: text/html; charset=UTF-8');

error_reporting(E_ALL|E_STRICT);
ini_set("display_errors","on");

// 数据库前缀,表名
define("MONGODB", "linus.mongohq.com");
define("MONGOPORT", 10062);
define("MONGOUSER", "njblog");
define("MONGOPW", 'njblog');
$dbname = 'shop';

// 连接Mongo
$server = "mongodb://".MONGOUSER.":".MONGOPW."@".MONGODB.":".MONGOPORT.'/'.$dbname;
$conn = new MongoClient();
if($conn === false)
{
    print "Mongo() fail\n";
    exit(-1);
}

$tbname = "e_shops";
$db = $conn->selectDB($dbname);
$collection = $db->selectCollection($tbname);

  
function file_type($filename) {  
    $file = fopen($filename, "rb");
    $bin = fread($file, 2);
    fclose($file);
    $strInfo = @unpack("C2chars", $bin);
    $typeCode = intval($strInfo['chars1'].$strInfo['chars2']);
    $fileType = '';
    switch ($typeCode) {
        case 7790:
            $fileType = 'exe';
            break;
        case 7784:
            $fileType = 'midi';
            break;
        case 8297:
            $fileType = 'rar';
            break;
        case 8075:
            $fileType = 'zip';
            break;
        case 255216:
            $fileType = 'jpg';
            break;
        case 7173:
            $fileType = 'gif';
            break;
        case 6677:
            $fileType = 'bmp';
            break;
        case 13780:
            $fileType = 'png';
            break;
        default:  
            $fileType = 'unknown: '.$typeCode;
    }  
    if ($strInfo['chars1']=='-1' AND $strInfo['chars2']=='-40' ) return 'jpg';
    if ($strInfo['chars1']=='-119' AND $strInfo['chars2']=='80' ) return 'png';
    return $fileType;  
}  