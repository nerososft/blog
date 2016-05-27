<html>
<meta charset="utf-8">
<title id='info_title'>登录</title>
<link href="//cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body   style='padding:0px;margin:0px;background:#e9e7ef;'>
  <input id="li_s" value='2' type='hidden'/>
<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/require.php");
require_once __BH_COMP__."/top.comp.php";
echo "<input type='hidden' id='username' value='".$_GET['user']."'/>"
 ?>
<div style='float:left;width:70%;margin-left:15%;padding-left:10px;padding-right:10px;padding-bottom:10px;padding-top:10px;margin-bottom:3px;'>
<style>
.ip_s_b{
  border-radius:30px;width:200px;height:27px;border:none;opacity:1;margin-right:0px;text-indent:10px;padding:2px;background:#999;color:#fff;font-family:'微软雅黑';font-size:12px;line-height:24px;
}
.ip_s_m{
  border-radius:30px;width:200px;height:27px;display: none;border:none;opacity:1;margin-right:0px;text-indent:10px;padding:2px;background:#349045;color:#fff;font-family:'微软雅黑';font-size:12px;line-height:24px;
}
.ip_s_c{
  margin-top:5px;margin-right:3px;
  float:right;color:#fff;font-weight:bold;font-family:'微软雅黑';height:12px;width:12px;background: #d3d3d3;border-radius: 30px;
}
.ip_s_c:hover{
  background:#fff;
}
.ip_s_b:hover{
  background: #333;
}
</style>
<script src='../../assets/js/url.js'></script>
<script src='../../assets/js/get_userinfo_by_name.js'></script>
  <div id='info_container' style="text-align:center;margin-top:20px;margin-bottom:100px;">
    <img id='info_avatar' src="../../assets/img/banner/1.jpg" style="width:150px;height:150px;border-radius:250px;border:solid 5px #fff;"></img>
    <ul style="width:100%;height:30px;background:#fff;display:inline-block;margin:0px;padding:0px;margin-top:20px;">
      <li style='width:10%;line-height:30px;color:#aaa;text-align:center;height:30px;border-bottom:solid 2px #982312;display:inline-block;margin:0px;padding:0px;float:left;'>基本信息</li>
      <li style='width:10%;line-height:30px;color:#aaa;text-align:center;height:30px;display:inline-block;margin:0px;padding:0px;float:left;'>后续开发中</li>
    </ul>
    <p id='info_name' style="color:#ccc;">neroyang</p>
    <p id='info_uid' style="color:#ccc;">uid</p>
    <p id='info_email' style="color:#ccc;">email</p>
    <p id='info_ctime' style="color:#ccc;">ctime</p>
  </div>
</div>
<?php
  require_once __BH_COMP__."/bottom.comp.php";
 ?>
</body>
</html>
