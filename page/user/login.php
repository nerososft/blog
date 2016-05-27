<html>
<meta charset="utf-8">
<title>登录</title>
<link href="//cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body   style='padding:0px;margin:0px;background:#e9e7ef;'>
  <input id="li_s" value='2' type='hidden'/>
<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/require.php");
require_once __BH_COMP__."/top.comp.php";
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
  <link rel="stylesheet" media="screen" href="../../assets/particles.js/practice/css/style.css">
<script src='../../assets/js/url.js'></script>
<script src='../../assets/js/login.js'></script>
<!-- scripts -->
<script src="../../assets/particles.js/particles.js"></script>
<script src="../../assets/particles.js/practice/js/app.js"></script>
<!-- stats.js -->
<script src="../../assets/particles.js/practice/js/lib/stats.js"></script>
  <div style="text-align:center;margin-top:100px;margin-bottom:100px;">
    <CENTER>
    <div class='ip_s_m' id="log_tip">
      <p id='log_tip_msg' style="float:left;margin:0px;padding:0px;"></p>
      <span id="ip_s_c" class="ip_s_c"></span>
    </div>
    </CENTER><br>
    <input id='uid' class='ip_s' type="text" placeholder="手机"/><br>
    <p style="margin:0px;width:100%;height:10px;"></p>
    <input id='pwd' class='ip_s' type="password" placeholder="密码"/>
    <p style="margin:0px;width:100%;height:10px;"></p>
    <button class='ip_s_b' onclick="login();">登录</button>
  </div>
</div>
<?php
  require_once __BH_COMP__."/bottom.comp.php";
 ?>
</body>
</html>
