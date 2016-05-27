<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>论坛</title>
</head>
<body style='padding:0px;margin:0px;background:#e9e7ef;'>
    <input id="li_s" value='2' type='hidden'/>
<?php
require_once str_replace('\\','/',dirname(dirname(__FILE__))."/require.php");
require_once __BH_COMP__."/top.comp.php";
 ?>
 <div style='float:left;width:70%;margin-left:15%;padding-left:10px;padding:10px;margin-bottom:0px;'>
<script src="../assets/js/url.js"></script>
<script src="../assets/js/get_tab_menu.js"></script>
<div style="width:70%;float:left;">
  <div id='tab_container' style="width:100%;float:left;margin:0px;padding:0px;margin-bottom:5px;">
  <!--  <span id='tab_item' class="span_tab">php</span>-->
  </div>

  <script src="../assets/js/get_items.js"></script>
  <div id='item_container' style="width:100%;float:left;border-top:dashed 1px #d3d3d3;">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
<!--
    <div id='item_one' class='item_one'>
      <img id='user_icon' class='item_icon' src="http://cdn.v2ex.co/gravatar/a66b61af924d537b228e76e727acb7a3?s=73&d=retro"/>
      <div id='item_one_content' class='item_one_content'>
        <a id='item_title_href' href="#"><p id='item_title' class='item_title'>python 有没有类似 node pm2 的(可视化)管理工具?</p></a>
        <p class='item_tab'><span id='item_tag_name' class="span_tab_s">python</span><a id='item_user_name' href=''>neroyang</a></p>
      </div>
    </div>
-->
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
  <div style="width:30%;float:left;padding-left:10px;">
    <script src="../assets/js/back_to_top.js"></script>
    <script src="../assets/js/get_hot_items.js"></script>
    <script>
      var fabu = function(){
        window.location.href=__BASE_URL__+'page/item/fabu';
      }
    </script>
    <p id="back-to-top" class="back-to-top"><a href="#top" style="color:#aaa;margin:0px;padding:0px;font-family:'微软雅黑';"><span style="font-size:30px;margin:0px;padding:0px;" class="glyphicon glyphicon-circle-arrow-up"></span>返回顶部</a></p>
    <button onclick="fabu()" class="ip_s_b"><span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp发布</button>
    <div style="width:100%;float:left;margin-top:5px;">

      <p style="margin:0px;padding:0px;border-bottom:dashed 1px #d3d3d3;margin-bottom:5px;width:100%;color:#888;font-family:'微软雅黑';"><span class='glyphicon glyphicon-fire'></span> 热门·趋势</p>
      <div id='hot_items_container' style="float:left;width:100%;">
        <!--<a href=''><p class='hot_items'>这是条热门说说，哈哈哈哈哈哈哈哈哈哈哈啊哈哈哈哈哈哈哈</p></a>-->
      </div>
    </div>
    <div style="width:100%;float:left;margin-top:5px;">
      <script src="../assets/js/get_hot_nodex.js"></script>
      <p style="margin:0px;padding:0px;color:#888;border-bottom:dashed 1px #d3d3d3;margin-bottom:5px;width:100%;font-family:'微软雅黑';"><span class='glyphicon glyphicon-console'></span> 最新节点</p>
      <div id='hot_tag_container' style="float:left;width:100%;">
        <!--<a href=''><span id='tab_item' class="span_tab_hot">php</span></a>-->
      </div>
    </div>
  </div>
</div>

</body>
<style>
.hot_items{
width:100%;float:left;margin:0px;padding:0px;font-family:'微软雅黑';
}
.spinner {
  margin: 100px auto;
  width: 20px;
  height: 20px;
  position: relative;
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
/*returnTop*/
.back-to-top{
    color:#ccc;
    position:fixed;
    display:none;
    margin:0px;padding:0px;
    bottom:100px;
    right:80px;
}
.back-to-top a{
    text-align:center;
    text-decoration:none;
    color:#d1d1d1;
    display:block;
    width:64px;
    /*使用CSS3中的transition属性给跳转链接中的文字添加渐变效果*/
    -moz-transition:color 1s;
    -webkit-transition:color 1s;
    -o-transition:color 1s;
}
.back-to-top a:hover{
    color:#979797;
}
.back-to-top a span{
    border-radius:6px;
    display:block;
    height:64px;
    width:56px;
    margin-bottom:5px;
    /*使用CSS3中的transition属性给<span>标签背景颜色添加渐变效果*/
    -moz-transition:background 1s;
    -webkit-transition:background 1s;
    -o-transition:background 1s;
}
.back-to-top a:hover span{

}

 .item_icon{
   width:40px;height:40px;float:left;border-radius:100px;
 }
 .item_one_content{
   float:left;margin-left:6px;
 }
 .item_title{
   font-family:'微软雅黑';color:#000;margin:0px;padding:0px;
 }
 .item_tab{
   margin:0px;margin-top:6px;padding:0px;
 }
 .item_one{
   float:left;width:100%;padding-top:10px;padding-left: 3px;padding-bottom:10px;border-bottom: dashed 1px #ccc;
 }
 .item_one:hover{
   background: #f0f0f0;
 }
 .span_tab{
   background:#ccc;border-radius:200px;padding:0px;padding-left:3px;padding-right: 3px;color:#fff;margin-right: 3px;margin-bottom: 2px;float:left;
 }
 .span_tab_hot{
   background:#ccc;border-radius:200px;padding:0px;padding-left:3px;padding-right: 3px;color:#fff;margin-right: 3px;margin-top: 2px;float:left;font-family:'微软雅黑' ;
 }
 .span_tab_s{
   background:#ddd;border-radius:2px;padding:2px;color:#fff;
 }
 .span_tab_s:hover{
   background: #bbb;
 }
 .span_tab:hover{
   background: #bbb;
 }
 .span_tab_nav{
   background: #bbb;
 }
 .ip_s_b{
   border-radius:30px;width:100%;height:27px;border:none;opacity:1;margin-right:0px;text-indent:10px;padding:2px;background:#ccc;color:#fff;font-family:'微软雅黑';font-size:12px;line-height:24px;
 }
 .ip_s_b:hover{
   background: #bbb;
 }
 </style>
 <?php
 require_once __BH_COMP__."/bottom.comp.php";
 ?>
</html>
