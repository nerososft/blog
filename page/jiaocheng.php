<html>
<meta charset="utf-8">
<title>教程</title>
<link href="//cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style='padding:0px;margin:0px;background:#e9e7ef;'>
  <input id="li_s" value='4' type='hidden'/>
<?php
require_once str_replace('\\','/',dirname(dirname(__FILE__))."/require.php");
require_once __BH_COMP__."/top.comp.php";
 ?>
 <style>
 #top_tag_list{
   float: left;
   margin: 0px;
   padding: 0px;
   margin-bottom: 6px;
 }
 .top_img_list{
   float: left;
   margin: 0px;
   padding: 0px;
   width: 100%;
   height: 250px;
   background:url(../assets/img/banner/2.jpg);
   background-position: 0px 0px;
   background-size: 100% 250px;
 }
 #tab_item{
   background:#ccc;border-radius:200px;padding:0px;padding-left:3px;padding-right: 3px;color:#fff;margin-right: 3px;margin-bottom: 2px;float:left;
 }
 #lunbo_img{
   width: 100%;
   float:left;
   margin: 0px;
   padding: 0px;
   height: 250px;
 }
 .jump_dot{
   float:left;margin-left: 5px;width:10px;line-height:10p;height:10px;border-radius:10px;text-align:center;background:#eee;display:block;z-index:100;font-size:8px;color:#fff;opacity:0.6;
 }
 .jump_dot_nav{
   float:left;margin-left: 5px;width:10px;line-height:10p;height:10px;border-radius:10px;text-align:center;background:#eee;display:block;z-index:100;font-size:8px;color:#fff;opacity:0.6;
   float: left;
   background: #fff;
   height: 12px;
   margin-top:-1px;
   width: 12px;

 }
 .jump_dot:hover{
   float:left;margin-left: 5px;width:10px;line-height:10p;height:10px;border-radius:10px;text-align:center;background:#eee;display:block;z-index:100;font-size:8px;color:#fff;opacity:0.6;
   float: left;
   background: #fff;
   height: 12px;
   margin-top:-1px;
   width: 12px;
 }
 </style>
 <script src="../assets/js/url.js"></script>
 <script src="../assets/js/get_banner.js"></script>
 <div id='top_img_list' class="top_img_list">
     <div id='dot_container' style="margin:0px;padding:0px;margin-left:70%;height:20px;margin-top:230px;text-align:bottom;text-align:center;">
     </div>
 </div>

 </div>
<?php
 require_once __BH_COMP__."/bottom.comp.php";
 ?>
 </body>
</html>
