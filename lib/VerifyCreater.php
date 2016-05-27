<?php

session_start();
if(isset($_SESSION['verify_session'])){
    unset ($_SESSION['verify_session']);
}
require './Verify.php';  //先把类包含进来，实际路径根据实际情况进行修改。
$_vc = new ValidateCode();  //实例化一个对象
$_vc->doimg();
//$_SESSION['verify_session'] = $_vc->getCode();
$_SESSION['verify_session'] = md5($_vc->getCode());//验证码保存到SESSION中

 ?>
