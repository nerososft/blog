<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");

$db = new DB();

//$from  = 1;
$db->query("set names utf8");
$items_result = $db->query("select * from passage order by hot desc limit 0,12");

$items_data = array();
while($row = mysql_fetch_array($items_result)){
    $item_data = array(
      'id'=>$row['id'],
      'title'=>$row['title'],
      'hot'=>$row['hot'],
      'tag' => $row['tagname']
    );
  array_unshift($items_data,$item_data);
}
$db->close();

echo json_encode($items_data);
