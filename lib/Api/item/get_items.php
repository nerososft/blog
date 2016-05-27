<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/FTime.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Api/Model/User.php");

$db = new DB();
$from = 20*($_POST['page']-1);
//$from  = 1;
$db->query("set names utf8");
$items_result = $db->query("select * from passage order by id desc limit $from,20;");

$items_data = array();
while($row = mysql_fetch_array($items_result)){
    $user_model = new User($row['uid']);
    $my_time = new FTime(time(),strtotime($row['createtime']));
    $item_data = array(
      'id'=>$row['id'],
      'avatar'=>$user_model->user_avatar_url,
      'username'=>$user_model->user_name,
      'title'=>$row['title'],
      //'content'=>$row['content'],
      'tag' => $row['tagname'],
      'up' => $row['up'],
      'down'=>$row['down'],
      'hot'=>$row['hot'],
      'createtime' => $my_time->index()
    );
  array_unshift($items_data,$item_data);
}
$db->close();

echo json_encode($items_data);





 ?>
