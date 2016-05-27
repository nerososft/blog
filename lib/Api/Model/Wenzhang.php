<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/FTime.php");
require_once "User.php";

class Wenzhang{
    var $wenzhang_db;
    function __construct(){
      $this->wenzhang_db =new DB();
    }
    function get_by_page($page){
      $from = 8*($page-1);
      $wenzhang_result = $this->wenzhang_db->query("select * from wenzhang order by ctime limit $from,8;");
      $wenzhang_all = array();
      while($wenzhang_row = mysql_fetch_array($wenzhang_result)){
        $my_time = new FTime(time(),strtotime($wenzhang_row['ctime']));
        $fabu_User_model = new User($wenzhang_row['uid']);
        $wenzhang = array(
          'id'=>$wenzhang_row['id'],
          'title'=>$wenzhang_row['title'],
          'content'=>$wenzhang_row['content'],
          'ctime'=>$my_time->index(),
          'tag'=>$wenzhang_row['tag'],
          'icon'=>$wenzhang_row['icon'],
          'username'=>$fabu_User_model->user_name,
          'avatar'=>$fabu_User_model->user_avatar_url
        );
        array_unshift($wenzhang_all,$wenzhang);
      }
      return $wenzhang_all;
    }
    function __destruct(){
        $this->wenzhang_db->close();
    }
  }



 ?>
