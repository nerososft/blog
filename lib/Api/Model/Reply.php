<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once "User.php";
class Reply{
  var $comment_id;
  var $reply_db;
  function __construct($id){
    $this->comment_id = $id;
    $this->reply_db = new DB();
  }
  function all(){
    $c_id = $this->comment_id;
    $reply_result = $this->reply_db->query("select * from huifu where commentid='$c_id';");
    $replys_data = array();
    while($reply_row = mysql_fetch_array($reply_result)){
      $reply_User_model = new User($reply_row['uid']);
      $my_time = new FTime(time(),strtotime($reply_row['createtime']));
      $reply_data = array(
        'id'=>$reply_User_model->user_uid,
        'avatar'=>$reply_User_model->user_avatar_url,
        'username'=>$reply_User_model->user_name,
        'reply'=>$reply_row['content'],
        'ctime'=>$my_time->index()
      );
      array_unshift($replys_data,$reply_data);
    }
    return $replys_data;
  }
  // 析构函数
  function __destruct(){
      $this->reply_db->close();
  }


}



 ?>
