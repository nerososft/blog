<html>
<meta charset="utf-8">
<title>错误<?php echo $_GET['code'];?></title>
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
td{
  color:#ccc;
  padding:2px;
}
</style>
  <div style="text-align:center;margin-top:100px;margin-bottom:100px;">
    <CENTER>
      <h3 style="color:#ccc;">ERR_<?php echo $_GET['code'];?></h3>
      <p style="color:#ccc;">There is something error in:<p>
      <table>
        <?php
          for($i = 0;$i<5;$i++){
              echo "<tr><td>0x".dechex(rand(1,99)).dechex(rand(1,99)).dechex(rand(1,99))."</td><td>0x".dechex(rand(1,99)).dechex(rand(1,99)).dechex(rand(1,99))."</td><td>0x".dechex(rand(1,99)).dechex(rand(1,99)).dechex(rand(1,99))."</td><td>0x".dechex(rand(1,99)).dechex(rand(1,99)).dechex(rand(1,99))."</td><td>0x".dechex(rand(1,99)).dechex(rand(1,99)).dechex(rand(1,99))."</td><td>0x".dechex(rand(1,99)).dechex(rand(1,99)).dechex(rand(1,99))."</td><td>0x".dechex(rand(1,99)).dechex(rand(1,99)).dechex(rand(1,99))."</td></tr>";
          }
         ?>
      </table>
      <p style="color:#ccc;">Please press any key to contuine:_<p>
    </CENTER>
  </div>
</div>
<?php
  require_once __BH_COMP__."/bottom.comp.php";
 ?>
</body>
</html>
