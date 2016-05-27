<?php
//require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");
//require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Randchar.php");
header("Content-type:text/html;charset=utf8");
session_start();
if (session_destroy()){
  $result = array(
    'status'=>'success',
    'result_code'=>'01001',
    'msg'=>'注销成功'
  );
}else{
  $result = array(
    'status'=>'error',
    'result_code'=>'01002',
    'msg'=>'注销失败'
  );
}
echo json_encode($result);




 ?>
