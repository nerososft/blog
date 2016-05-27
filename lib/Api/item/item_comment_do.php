<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Api/Model/Comment.php");
session_start();

$comment_model = new Comment();
$is_log_result = new User($_SESSION['id']);
$db = new DB();
$result = array();
if(isset($_SESSION['id'])){
  //echo $is_log_result['token']."-".$_SESSION['token'];
  if($_SESSION['token']!==$is_log_result->user_token){
    $result = array(
      'status'=>'error',
      'result_code'=>'01002',
      'msg'=>'登录超时，请重新登录'
    );
  }else{
    $cid = $_POST['cid'];
    $comment = $_POST['comment'];
    //echo $comment;
    if($comment_model->insert($cid,$comment)){
      $result = array(
        'status'=>'success',
        'result_code'=>'01004',
        'msg'=>'评论成功'
      );
    }else{
      $result = array(
        'status'=>'error',
        'result_code'=>'01004',
        'msg'=>'评论失败，请重试'.mysql_error()
      );
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
