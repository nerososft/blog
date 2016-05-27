<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Randchar.php");
header("Content-type:text/html;charset=utf8");
session_start();
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$db = new DB();
$log_result=$db->query("select * from user where uid ='$uid';");
$result=array();
while($row = mysql_fetch_array($log_result))
  {
    $result['id']=$row['id'];
    $result['uid']=$row['uid'];
    $result['username']=$row['username'];
    $result['password']=$row['password'];
  }
if($result['uid']==NULL){
  $request_result = array(
    'status'=>'error',
    'result_code'=>'00001',
    'msg'=>'用户不存在'
  );
}else{
  if($result['password']!==md5($pwd)){
    $request_result = array(
      'status'=>'error',
      'result_code'=>'00002',
      'msg'=>'密码错误'
    );
  }else{
    $m_rangchar = new Randchar(16);
    $_SESSION['id'] =$result['id'];
    $_SESSION['token'] =sha1($m_rangchar->get_randchar().md5(time()));
    //echo $_SESSION['token'];
    $session_id = $_SESSION['id'];
    $session_token = $_SESSION['token'];
    $is_login = $db->query("update user set token ='$session_token' where id=$session_id;");
    if(!$is_login){
      $request_result = array(
        'status'=>'error',
        'result_code'=>'00003',
        'msg'=>'登录失败，请重试'
      );
    }else{
      $request_result = array(
        'status'=>'success',
        'result_code'=>'00004',
        'msg'=>'登陆成功'
      );
    }
  }
}
echo json_encode($request_result);
$db->close();
//$result  =array('status'=>'error','result_code'=>'00001','msg'=>'用户不存在');
//echo json_encode($result);
 ?>
