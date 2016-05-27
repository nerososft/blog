<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/FTime.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Api/Model/User.php");
header("Content-type:text/html;charset=utf8");
session_start();
if(isset($_SESSION['id'])){
  //echo $is_log_result['token']."-".$_SESSION['token'];
  $is_log_result = new User($_SESSION['id']);
  if($_SESSION['token']!==$is_log_result->user_token){
    $result = array(
      'status'=>'error',
      'result_code'=>'01002',
      'msg'=>'登录超时，请重新登录'
    );
  }else{
    $username = $_GET['user'];
    if(!isset($username)){
      $look_user = New User();
      $look_user->get_user_info_by_name($username);
      $result = $look_user->get_all_user_info();
    }else{
      $result=$is_log_result->get_all_user_info();
    }
  }
}else{
  $result = array(
    'status'=>'error',
    'result_code'=>'01003',
    'msg'=>'未登录'
  );
}
echo json_encode($result);


 ?>
