<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once "Reply.php";
session_start();

class Comment{
    var $comment_db;
    var $passage_id;

    function __construct($id){
      $this->passage_id  = $id;
      $this->comment_db = new DB();
    }
    function all(){
      $p_id = $this->passage_id;
      $comment_result = $this->comment_db->query("select * from comments where passageid='$p_id';");
      $comments_data = array();
      while($comment_row = mysql_fetch_array($comment_result)){
        $comment_User_model = new User($comment_row['uid']);
        $reply_model = new Reply($comment_row['id']);
        $my_time = new FTime(time(),strtotime($comment_row['createtime']));
        $comment_data = array(
          'id'=>$comment_row['id'],
          'uid'=>$comment_User_model->user_uid,
          'avatar'=>$comment_User_model->user_avatar_url,
          'username'=>$comment_User_model->user_name,
          'comment'=>$comment_row['content'],
          'reply'=>$reply_model->all(),
          'ctime'=>$my_time->index()
        );
        array_unshift($comments_data,$comment_data);
      }
      return $comments_data;
    }
    function insert($id,$comment){
      $ctime=date("Y-m-d H:i:s",time());
      $uid = $_SESSION['id'];
      $comment_do_result = $this->comment_db->query("insert into comments (content,createtime,uid,passageid) values ('$comment','$ctime',$uid,$id);");
      return $comment_do_result;
    }
    // 析构函数
    function __destruct(){
        $this->comment_db->close();
    }
}
 ?>
