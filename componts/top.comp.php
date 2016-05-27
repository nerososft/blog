<?php
//echo "3";
require_once "comp.require.php";
header("Content-type:text/html;charset=utf8");
session_start();
?>
<script src="../../assets/bootstrap/js/jquery.js"></script>
<link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src='../../assets/js/url.js'></script>
<script src='../../assets/js/logout.js'></script>
<div style='margin:0px;padding:0px;float:left;background:#e9e7ef;width:100%;'>
  <ul id='ul_top' style='float:left;margin-bottom:10px;display:inline-block;color:#fff;height:35px;margin-top:0px;background:#f0f0f0;width:100%;padding-left:10%;padding-right:10%;position:fixed;z-index:1000;box-shadow:0px 0px 1px 1px rgb(170,170,171);'>
    <style>
    *{
      font-family: "微软雅黑";
      transition: 0s all;
    }
    .top_li{
      transition: 0.5s all;
      font-weight: bold;
      float:left;height:35px;padding-left:10px;color:#aaa;padding-right:10px;display: inline-block;line-height: 35px;font-family:"微软雅黑";
    }
    .top_li:hover{
      font-weight: bold;
      float:left;height:35px;padding-left:10px;padding-right:10px;display: inline-block;line-height: 35px;font-family:"微软雅黑";border-bottom:solid 3px #555;color:#555;;
    }
    .top_li_nav{
      font-weight: bold;
      float:left;height:35px;padding-left:10px;padding-right:10px;display: inline-block;line-height: 35px;font-family:"微软雅黑";border-bottom:solid 3px #555;color:#555;;
    }
    </style>
    <a href="<?php echo '/page/luntan';?>"><li style='float:left;height:35px;padding:0px;margin:0px;color:#555;display: inline-block;line-height: 35px;font-family:"微软雅黑";margin:0p><p>Neroyang</p></li></a>
<!--    <a href="<?php echo '/page/index';?>"><li id='0' class="top_li">主页</li></a>
    <a href="<?php echo '/page/jiaocheng';?>"><li id='4' class="top_li">教程</li></a>
    <a href="<?php echo '/page/luntan';?>"><li id='2' class="top_li">论坛</li></a>
-->    
<script>
    //alert(document.getElementById('li_s').value);
    var sel = document.getElementById('li_s').value+"";
    document.getElementById(sel).className='top_li_nav';
    </script>
    <li style="float:right;line-height:35px;list-style-type:none;color:#ccc;font-weight: bold;">
      <?php
        $islog_user_model = new User($_SESSION['id']);
        if(isset($_SESSION['id'])){
          if($_SESSION['token']!==$islog_user_model->user_token){
            echo "异地登陆或者登陆超时。<a href='/page/user/login'>重新登录</a>";
          }else{
            echo "<img style='border:solid 1px #fff;margin-top:-3px;border-radius:100px;width:27px;height:27px;' src='http://121.42.157.180/".$islog_user_model->user_avatar_url."'></img>&nbsp<a href='/page/user/myself'>".$islog_user_model->user_name."</a>   <button class='bt_s_o' id='lg_bt_out' onclick='logout();'>安全退出</button>";
          }
        }else{
            echo "<a href='/page/user/login'>登录</a>  <a href='/page/user/register'>注册</a>";
        }
       ?>
    </li>
    <li style="float:left;margin-left:20px;">
      <div style="float:left;height:35px;margin-top:0px;border:none;padding:4px;">
        <div style="width: 276px; height: 28px;line-height:28px; background-size: 276px 28px; background-image: url('http://121.42.157.180/assets/img/qbar_light@2x.png'); background-repeat: no-repeat; display: inline-block;"><input type="text" placeHolder='' style='font-family:"微软雅黑";width:240px;height:22px;margin-top:3px;background:#fff;line-height:22px;margin-left:26px;border:none;color:#888;' maxlength="36" name="q" id="q" value=""></div>
        <!--<input class='ip_s' onclick="" type="text" placeholder="输入要查找的内容"/>
        <button class='bt_s' style="border-radius:30px;width:25px;height:27px;border:none;opacity:1;margin-left:0px;margin-top:0px;">S</button>
      --><style>
        *:focus { outline: none; }
        input {outline:none;}
        button {outline:none;}
        button:focus{
          outline: 0;
        }

        .ip_s{
          border-radius:30px;background: #f8f8f8;width:200px;height:27px;border:none;opacity:1;margin-right:0px;text-indent:10px;padding:2px;color:#333;font-family:'微软雅黑';font-size:12px;line-height:24px;
        }
        .ip_s:hover{
          background: #fff;
        }
          .bt_s{
            border-radius:30px;width:27px;height:27px;border:none;opacity:1;margin-left:0px;margin-top:0px;
          }
          .bt_s_o{
            border-radius:0px;border:none;height:35px;background: #f0f0f0;
          }
          .bt_s:hover{
            border-radius:30px;width:27px;height:27px;border:none;opacity:1;margin-left:0px;margin-top:0px;background: #ccc;
          }
        </style>
      </div>
    </li>
  </ul>
  <div style='float:left;margin-bottom:10px;display:inline-block;color:#fff;height:25px;margin-top:0px;background:#aaa;width:100%;padding-left:15%;padding-right:15%;'></div>
</div>
