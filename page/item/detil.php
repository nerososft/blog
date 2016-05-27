<html>
<meta charset="utf-8">
<title>详情</title>
<link href="//cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style='padding:0px;margin:0px;background:#e9e7ef;'>
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
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<script type="text/javascript" charset="utf-8" src="../../assets/umediter/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../../assets/umediter/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="../../assets/umediter/lang/zh-cn/zh-cn.js"></script>
<script src='../../assets/js/url.js'></script>
<script src='../../assets/js/get_item_detil.js'></script>
  <div style="text-align:center;margin-bottom:5px;">
    <div style="float:left;margin:0px;width:100%;"><p style="float:left;margin:0px;font-size:12px;color:#888;"><a href='../luntan'>论坛</a> > <input id='get_detil_id' style='border:none;background:#e9e7ef;' value='<?php echo $_GET["item"];?>' readonly="readonly"></p></div>
  </div>
  <!--__________________________________________________________________________-->
  <style>
    .passage_container{
      width:70%;float:left;margin-top:5px;
    }
    .passage_container_top{
      float:left;width:100%;
    }
    .passage_one_title{
      float:left;width:100%;border-bottom:solid 1px #ccc;padding-bottom:3px;
    }
    .passage_tab_container{
      width:100%;float:left;margin-top:1px;
    }
    .tab_hot{
        border-radius:20px;background:rgb(86,61,124);color:#fff;padding:0px;padding-left:5px;padding-right:5px;
    }
    .passgae_comment_ip_container{
      width:100%;float:left;margin-top:20px;
    }
    .passage_ip_comment{
      border-radius:30px;background: #f8f8f8;width:200px;height:27px;border:none;opacity:1;margin-right:0px;text-indent:10px;padding:2px;color:#333;font-family:'微软雅黑';font-size:12px;line-height:24px;
      width:80%;float:left;height:30px;line-height:30px;background:#fff;border-radius:5px;
    }
    .passage_bt_comment{
      border-radius:30px;background: #f8f8f8;width:200px;height:27px;border:none;opacity:1;margin-right:0px;text-indent:10px;padding:2px;color:#333;font-family:'微软雅黑';font-size:12px;line-height:24px;
      width:18%;border-radius:5px;height:30px;float:left;margin-left:2%;padding:0px;text-indent:0px;
    }
    .comment_container{
      width:100%;float:left;margin-top:10px;
    }
    .comment_item{
      width:100%;float:left;margin-bottom: 10px;
    }
    .comment_item_img{width:40px;hetght:40px;float:left;border-radius:4px;}
    .comment_c_container{float:left;margin-left:5px;}
    .comment_c_hot{border-radius:20px;background:rgb(86,61,124);color:#fff;padding:0px;padding-left:5px;padding-right:5px;}
    .bt_huifu{border-radius:30px;background: #f8f8f8;width:200px;height:27px;border:none;opacity:1;margin-right:0px;text-indent:10px;padding:2px;color:#333;font-family:'微软雅黑';font-size:12px;line-height:24px;border-radius:5px;width:50px;height:22px;line-height:22px;margin-left:10px;padding:0px;text-indent:0px;}
    .huifu_kk{
      border-radius:30px;background: #f8f8f8;width:200px;height:27px;border:none;opacity:1;margin-right:0px;text-indent:10px;padding:2px;color:#333;font-family:'微软雅黑';font-size:12px;line-height:24px;
      width:55%;float:left;height:24px;line-height:24px;background:#fff;border-radius:5px;
    }
    .huifu_bb{
      border-radius:30px;background: #f8f8f8;width:200px;height:27px;border:none;opacity:1;margin-right:0px;text-indent:10px;padding:2px;color:#333;font-family:'微软雅黑';font-size:12px;line-height:24px;
      width:13%;border-radius:5px;height:24px;float:left;margin-left:2%;padding:0px;text-indent:0px;
    }
    .huifu_item{
      width:100%;float:left;padding:5px;
    }
    .huifu_avatar{
      width:35px;hetght:35px;float:left;border-radius:4px;
    }
    .huifu_container2{
      float:left;margin-left:5px;
    }
    .huifu_t{
      margin:0px;padding:0px;font-size:12px;
    }
    .huifu_time{
      font-size:12px;color:rgb(86,61,124);
    }
    .comment_title{
      margin:0px;padding:0px;
    }
    .huifu_container1{
      margin-left:5%;width:95%;float:left;
    }
    .ip_huifu{
      width:100%;float:left;margin-top:8px;
    }
  </style>
  <div class="passage_container" id='passage_container'>
    <div class="passage_container_top">
      <p id='passage_one_title' class="passage_one_title">正在加载。。。<p>
      <div id='passage_tab_container' class="passage_tab_container">
        <!--<a href=''><span class='glyphicon glyphicon-tag'></span>nodejs</a>
        <a href=''><span class='glyphicon glyphicon-user'></span>neroyang</a>
        <a href=''><span class='glyphicon glyphicon-thumbs-up'>12</span></a>
        <a href=''><span class='glyphicon glyphicon-thumbs-down'>11</span></a>
        <span class='tab_hot'>15</span>
        <span class='glyphicon glyphicon-time'>2014-3-2 12:09:20</span>-->
      </div>
    </div>
    </hr>
    <div id='passage_container_content' class="passage_container_top">
      正在加载。。。
    </div>
    <div class="passgae_comment_ip_container">
        <input id='c_title' class="passage_ip_comment" placeholder="说点什么">
        <button class='passage_bt_comment' onclick="comment_do()">发表</button>
    </div>
    <style>
    </style>
    <div id='comments_container' class="comment_container">
      <p>正在加载。。。<p>
<!--      <div id='comment_item' class='comment_item'>
        <img class='comment_item_img' src=""></img>
        <div class='comment_c_container'>
          <p class='comment_title'>我是评论一，哒哒哒</p>
          <span class='comment_c_hot' style=''>15</span>
          <span style='color:rgb(86,61,124);' class='glyphicon glyphicon-time'>3分钟前</span>
          <button class='bt_huifu' id='bt_huifu' onclick="ip_open()">回复</botton>
        </div>
        <div id="huifu_container" class="huifu_container1">
          <div id='ip_huifu' class="ip_huifu">
              <input id='huifu_kk' onclick='ip_no()' class="huifu_kk" placeholder="回复点什么">
              <button class='huifu_bb' onclick="ip_close()" >回复</button>
          </div>
          <div id='huifu_item' class='huifu_item'>
            <img class='huifu_avatar' src=''></img>
            <div class='huifu_container2'>
              <p class='huifu_t'>我是回复一，哒哒哒</p>
              <span class='huifu_time' class='glyphicon glyphicon-time'>3分钟前</span>
            </div>
          </div>
        </div>
      </div>
  --></div>
  </div>
  <!--___________________________________________________________________________-->
</div>
</body>
<script>
var is_huifu_open;
$("#ip_huifu").toggle();
  var ip_open = function(){
    if(is_huifu_open!=true){
      $("#ip_huifu").slideToggle();
      $("#bt_huifu").slideToggle();
      is_huifu_open = true;
      event.stopPropagation();
      return false;
    }
  }
  var ip_close = function(){
    if(is_huifu_open!=false){
      $("#ip_huifu").slideToggle();
      $("#bt_huifu").slideToggle();
      is_huifu_open = false;
    }
  }
  var ip_no = function(){
    event.stopPropagation();
    return false;
  }


    $(document).click(function(){
      if(is_huifu_open==true){
        ip_close();
      }
    });

</script>
<script langue='javascript'>
var data_id = document.getElementById('get_detil_id').value;
get_item_data(data_id);
</script>
