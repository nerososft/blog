<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Api/Model/User.php");

header("Content-type:text/html;charset=utf8");
session_start();
$tag=$_POST['tag'];
$title=$_POST['title'];
$verify=$_POST['verify'];
$content=$_POST['content'];

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
    //在线
    if($_SESSION['verify_session']!=md5($verify)){
      $result = array(
        'status'=>'error',
        'result_code'=>'01001',
        'msg'=>'验证码错误'
      );
    }else{
      $fabu_uid = $is_log_result->user_id;
      $createtime=date("Y-m-d H:i:s",time());
      $tagname = $tag;
      $is_fabu = $db->query("insert into passage set uid=$fabu_uid,title='$title',content='$content',tagname='$tagname',createtime='$createtime';");
      $db->close();
      if($is_fabu){
        $result = array(
          'status'=>'success',
          'result_code'=>'01004',
          'msg'=>'发布成功'
        );
      }else{
        $result = array(
          'status'=>'error',
          'result_code'=>'01004',
          'msg'=>'发布失败，请重试'.mysql_error()
        );
      }
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
