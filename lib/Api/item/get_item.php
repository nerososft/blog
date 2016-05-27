<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/FTime.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Api/Model/Comment.php");

$db = new DB();
$get_detil_id = $_POST['id'];
$item_result = $db->query("select * from passage where id = '$get_detil_id';");
//echo mysql_error();
//echo $get_detil_id;
while($row = mysql_fetch_array($item_result)){
  $user_model = new User($row['uid']);
  $comment_model = new Comment($row['id']);
  $my_time = new FTime(time(),strtotime($row['createtime']));
  $item_data = array(
    'id'=>$row['id'],
    'username'=>$user_model->user_name,
    'title'=>$row['title'],
    'content'=>$row['content'],
    'tag' => $row['tagname'],
    'up' => $row['up'],
    'down'=>$row['down'],
    'hot'=>$row['hot'],
    'comment'=>$comment_model->all(),
    'createtime' => $my_time->index()
  );
}
echo json_encode($item_data);



 ?>
