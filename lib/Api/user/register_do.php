<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Randchar.php");
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Api/Model/User.php");

header("Content-type:text/html;charset=utf8");
session_start();
$result = array();
if((1==1)||($_POST["verify"]=='')||($_POST["name"]=='')||($_POST['uemail']=='')||($_POST['id']=='')||($_POST['password']=='')||($_POST['yaoqingma']=='')){
  $verify = $_POST['verify'];
  $uid = $_POST['id'];
  $uname = $_POST['name'];
  $email = $_POST['uemail'];
  //echo $email;
  $password = md5($_POST['password']);

  $yaoqingma = $_POST['yaoqingma'];
  if($_SESSION['verify_session']!=md5($verify)){
    $result = array(
      'status'=>'error',
      'result_code'=>'01001',
      'msg'=>'验证码错误'
    );
  }else{
    $m_db = new DB();
    $yaoqing_result = $m_db->query("select * from yanzhengma where yanzhengma = '$yaoqingma';");
    $yaoqing = array();
    while($row = mysql_fetch_array($yaoqing_result)){
      $yaoqing = array(
        'yaoqingren'=>$row['username'],
        'yaopingma'=>$row['yanzhengma'],
        'cishu'=>$row['cishu']
      );
    }
    if(is_null($yaoqing) || $yaoqing['cishu']<1){
      $result = array(
        'status'=>'error',
        'result_code'=>'01002',
        'msg'=>'邀请码不存在'
      );
    }else{
      $user_result = $m_db->query("select id from user where uid=$uid;");
      //$user_array['id']='';
      while($user_row = mysql_fetch_array($user_result)){
        $user_array['id']=$user_row['id'];
      }
      //var_dump($user_array);
      if(!is_null($user_array)){
        $result = array(
          'status'=>'error',
          'result_code'=>'01006',
          'msg'=>'该手机号已经注册'
        );
      }else{
        $email_result = $m_db->query("select id from user where email='$email';");
        while($email_row = mysql_fetch_array($email_result)){
          $email_array['id']=$email_row['id'];
        }
        //var_dump($email_array);
        if(!is_null($email_array)){
          $result = array(
            'status'=>'error',
            'result_code'=>'01007',
            'msg'=>'该邮箱已经绑定'
          );
        }else{
          $name_result = $m_db->query("select id from user where username='$uname';");
          while($name_row = mysql_fetch_array($name_result)){
            $name_array['id']=$name_row['id'];
          }
          //var_dump($email_array);
          if(!is_null($name_array)){
            $result = array(
              'status'=>'error',
              'result_code'=>'01008',
              'msg'=>'用户名被已注册'
            );
          }else{
            $cishu = $yaoqing['cishu']-1;
            $yaoqing_result = $m_db->query("update yanzhengma set cishu = $cishu where yanzhengma = '$yaoqingma';");
            //$_SESSION['id'] =$uid;
            $m_rangchar = new Randchar(16);
            $_SESSION['token'] =sha1($m_rangchar->get_randchar().md5(time()));
            //echo $_SESSION['token'];
            $session_uid = $_SESSION['id'];
            $session_token = $_SESSION['token'];
            $ctime = date('Y-m-d H:i:s',time());
            $register = $m_db->query("insert into user set uid=$uid,username='$uname',password='$password',token='$session_token',ctime='$ctime';");
            //var_dump($register);
            $log_result = $m_db->query("select id from user where uid=$uid;");
            while($log_row = mysql_fetch_array($log_result)){
              //$log_array['id']=$name_row['id'];
              $_SESSION['id']=$log_row['id'];
            }
            if($register){
              $result = array(
                'status'=>'success',
                'result_code'=>'01005',
                'msg'=>'注册成功'
              );
            }else{
              $result = array(
                'status'=>'error',
                'result_code'=>'01004',
                'msg'=>'注册失败，请重试'.mysql_error()
              );
            }
          }
        }
      }
    }
  }
}else{
  $result = array(
    'status'=>'error',
    'result_code'=>'01003',
    'msg'=>'字段填写不全'
  );
}
echo json_encode($result);


 ?>
