<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>主页</title>
    <link href="//cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style='padding:0px;margin:0px;background:#e9e7ef;'>
      <input id="li_s" value='0' type='hidden'/>
  <?php
  //echo "1";
  require_once "require.php";
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
     height: 300px;
     background:url(../assets/img/banner/2.jpg);
     background-position: 0px 0px;
     background-size: 100% 300px;
   }
   #tab_item{
     background:#ccc;border-radius:200px;padding:0px;padding-left:3px;padding-right: 3px;color:#fff;margin-right: 3px;margin-bottom: 2px;float:left;
   }
   #lunbo_img{
     width: 100%;
     float:left;
     margin: 0px;
     padding: 0px;
     height: 300px;
   }
   .jump_dot{
     float:left;margin-left: 5px;width:10px;line-height:10p;height:10px;border-radius:10px;text-align:center;background:#eee;display:block;z-index:100;font-size:8px;color:#fff;opacity:0.6;
   }
   .jump_dot_nav{
     float:left;margin-left: 5px;width:10px;line-height:10p;height:10px;border-radius:10px;text-align:center;background:#eee;display:block;z-index:100;font-size:8px;color:#fff;opacity:0.6;
     float: left;
     background: #e9e7ef;
     height: 12px;
     margin-top:-1px;
     width: 12px;

   }
   .jump_dot:hover{
     float:left;margin-left: 5px;width:10px;line-height:10p;height:10px;border-radius:10px;text-align:center;background:#eee;display:block;z-index:100;font-size:8px;color:#fff;opacity:0.6;
     float: left;
     background: #e9e7ef;
     height: 12px;
     margin-top:-1px;
     width: 12px;
   }
   </style>
   <script src="assets/js/url.js"></script>
   <script src="assets/js/get_banner.js"></script>
   <script src="assets/js/get_news.js"></script>
   <div id='top_img_list' class="top_img_list">
       <div id='dot_container' style="margin:0px;padding:0px;margin-left:70%;height:20px;margin-top:280px;text-align:bottom;text-align:center;">
       </div>
   </div>
   <div style="width:80%;float:left;margin-left:10%;">
   <div id='item_container' style="width:80%;float:left;background:#e9e7ef;">
<!--
     <div style="width:100%;float:left;height:150px;border-bottom:1px dashed #ccc;border-right:1px dashed #ccc;padding:10px;">
       <image style="width:30%;height:130px;margin:0px;padding:0px;float:left;" src="assets/img/banner/3.jpg"></image>
       <div style="width:69%;float:left;height:130px;margin-left:1%;">
         <div style="width:100%;height:110px;float:left;">
           <a href=''><p style="margin:0px;paddiing:0px;font-size:16px;font-weight:bold;font-family:'微软雅黑';">今夜，我们不谈人类未来，也不谈科技术语，只讲一个天才的故事<p></a>
           <p style="margin:0px;paddiing:0px;font-size:14px;font-family:'微软雅黑';color:#aaa;">从天才少年到创业者再到学术大咖，AlphaGo 之父 Demis Hassabis 变换着各种身份，给世界带来一次又一次的惊喜。<p>
         </div>
       <div style="width:100%;height:20px;float:left;color:#ccc;font-family:'微软雅黑';">
       <a href=""><span>故事</span></a>&nbsp&nbsp<a href=""><span>王飞</span></a>&nbsp&nbsp<span class="glyphicon glyphicon-comment">14</span>&nbsp&nbsp2小时前
       </div>
      </div>
    </div>-->







   </div>


   <div style="20%;float:left;background:#e9e7ef;padding:10px;">
     <p style="margin:0px;paddiing:0px;font-size:14px;font-family:'微软雅黑';color:#aaa;">推荐</p>
   </div>
</div>
<div id='loading_img' class="spinner" style="float:left;margin-left:45%;margin-top:10px;padding:0px;margin-bottom:0px;height:35px;">
    <center>
  <div class="spinner-container container1">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
  <div class="spinner-container container2">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
  <div class="spinner-container container3">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
  </div>
  </center>
</div>
</div>
<style>
.spinner {
  margin: 100px auto;
  width: 20px;
  height: 20px;
  position: relative;
}
*{
  font-family: '微软雅黑';
}
.container1 > div, .container2 > div, .container3 > div {
  width: 6px;
  height: 6px;
  background-color: #333;

  border-radius: 100%;
  position: absolute;
  -webkit-animation: bouncedelay 1.2s infinite ease-in-out;
  animation: bouncedelay 1.2s infinite ease-in-out;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.spinner .spinner-container {
  position: absolute;
  width: 100%;
  height: 100%;
}

.container2 {
  -webkit-transform: rotateZ(45deg);
  transform: rotateZ(45deg);
}

.container3 {
  -webkit-transform: rotateZ(90deg);
  transform: rotateZ(90deg);
}

.circle1 { top: 0; left: 0; }
.circle2 { top: 0; right: 0; }
.circle3 { right: 0; bottom: 0; }
.circle4 { left: 0; bottom: 0; }

.container2 .circle1 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}

.container3 .circle1 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}

.container1 .circle2 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}

.container2 .circle2 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}

.container3 .circle2 {
  -webkit-animation-delay: -0.7s;
  animation-delay: -0.7s;
}

.container1 .circle3 {
  -webkit-animation-delay: -0.6s;
  animation-delay: -0.6s;
}

.container2 .circle3 {
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s;
}

.container3 .circle3 {
  -webkit-animation-delay: -0.4s;
  animation-delay: -0.4s;
}

.container1 .circle4 {
  -webkit-animation-delay: -0.3s;
  animation-delay: -0.3s;
}

.container2 .circle4 {
  -webkit-animation-delay: -0.2s;
  animation-delay: -0.2s;
}

.container3 .circle4 {
  -webkit-animation-delay: -0.1s;
  animation-delay: -0.1s;
}

@-webkit-keyframes bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0.0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes bouncedelay {
  0%, 80%, 100% {
    transform: scale(0.0);
    -webkit-transform: scale(0.0);
  } 40% {
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
  }
}
</style>
<?php
require_once __BH_COMP__."/bottom.comp.php";
?>
</body>
</html>
