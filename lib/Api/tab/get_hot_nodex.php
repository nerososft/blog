<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");

$db = new DB();

//$from  = 1;
$db->query("set names utf8");
$items_result = $db->query("select * from tab order by createtime desc limit 0,12");

$items_data = array();
while($row = mysql_fetch_array($items_result)){
    $item_data = array(
      'id'=>$row['id'],
      'name'=>$row['title'],
      'desc'=>$row['descrp'],
      'hot'=>$row['hot']
    );
  array_unshift($items_data,$item_data);
}
$db->close();

echo json_encode($items_data);
