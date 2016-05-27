<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/FTime.php");
class User{
    var $user_db;
    var $user_id;
    var $user_uid;
    var $user_avatar;
    var $user_avatar_url;
    var $user_name;
    var $user_token;
    var $user_email;
    var $user_ctime;
    var $base_user_info;
    var $all_user_info;
    function __construct($id){
      $this->user_id = $id;
      $this->user_db =new DB();
      $this->get_user_info();
    }
    private function get_user_info(){
      $uid = $this->user_id;
      //echo $uid;
      $user_result = $this->user_db->query("select * from user where id='$uid';");
      while($user_row = mysql_fetch_array($user_result)){
        $this->user_uid = $user_row['uid'];
        $this->user_avatar= $user_row['avatar'];
        $this->user_avatar_url= $this->get_avatar_url($this->user_avatar);
        $this->user_name= $user_row['username'];
        $this->user_token=$user_row['token'];
        $this->user_email= $user_row['email'];
        $this->user_ctime= $user_row['ctime'];
      }
    }
    public function get_user_info_by_name($username){
      $user_result = $this->user_db->query("select * from user where username='$username';");
      while($user_row = mysql_fetch_array($user_result)){
        $this->user_uid = $user_row['uid'];
        $this->user_avatar= $user_row['avatar'];
        $this->user_avatar_url= $this->get_avatar_url($this->user_avatar);
        $this->user_name= $user_row['username'];
        $this->user_token=$user_row['token'];
        $this->user_email= $user_row['email'];
        $this->user_ctime= $user_row['ctime'];
      }
    }
    private function get_avatar_url($id){
      $avatar_result = $this->user_db->query("select * from avatar where id='$id';");
      $avatar_url = '';
      while($avatar_row = mysql_fetch_array($avatar_result)){
        $avatar_url = $avatar_row['url'];
      }
      return $avatar_url;
    }
    function get_base_user_info(){
      $this->base_user_info = array(
        'uid'=>$this->user_uid,
        'username'=>$this->user_name,
        'avatar'=>$this->user_avatar_url
      );
      return $this->base_user_info;
    }

    function get_all_user_info(){
      $this->all_user_info = array(
        'uid'=>$this->user_uid,
        'username'=>$this->user_name,
        'avatar'=>$this->user_avatar_url,
        'email'=> $this->user_email,
        'ctime'=> $this->user_ctime
      );
      return $this->all_user_info;
    }
    // 析构函数
    function __destruct(){
        $this->user_db->close();
    }
}
 ?>
