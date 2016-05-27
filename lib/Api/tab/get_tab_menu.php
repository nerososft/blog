<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
$db = new DB();
$db->query("set names utf8");
$tab_result = $db->query("select * from tab order by hot;");
$tabs_data = array();
while($row = mysql_fetch_array($tab_result)){
  $tab_data = array(
    'id'=>$row['id'],
    'name'=>$row['title'],
    'desc'=>$row['descrp']
  );
  array_unshift($tabs_data,$tab_data);
}
$db->close();
echo json_encode($tabs_data);






 ?>
