<html>
<meta charset="utf-8">
<title>发布</title>
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
<script src='../../assets/js/get_passage_tag.js'></script>
<script src='../../assets/js/passage_fabu_do.js'></script>
  <div style="text-align:center;">
    <CENTER>
    <div class='ip_s_m' id="log_tip"><p id='log_tip_msg' style="float:left;margin:0px;padding:0px;"></p><span id="ip_s_c" class="ip_s_c"></span></div>
  </CENTER>
  <select id='tag_selecter' class='ip_s' style='width:19%;background:#e9e7ef;box-shadow:0px 0px 1px 0.7px #bbb;border-radius:2px;'>
    <option value="nodejs">nodejs</option>
  </select>
  <input id='passage_title' class="ip_s" placeholder="标题" style='width:80%;background:#e9e7ef;box-shadow:0px 0px 1px 0.7px #bbb;border-radius:2px;'>
  <p style="margin:0px;width:100%;height:10px;"></p>
  <script type="text/plain" id="editor" style="width:100%;height:300px;">
      <p>内容。。。。</p>
  </script>
  <p style="margin:0px;width:100%;height:10px;"></p>
  <img class='ip_s' style="width:100px;" title="点击刷新" src="http://121.42.157.180/lib/VerifyCreater.php" align="absbottom" onclick="this.src='http://121.42.157.180/lib/VerifyCreater.php?'+Math.random();"></img>
  <input id='verify' class='ip_s' style="width:100px;background:#fff;" type="text" placeholder="验证码"/>
  <p style="margin:0px;width:100%;height:10px;"></p>
  <center>
  <button id='fabu_tip' class='ip_s_b' onclick="fabu_do();">发布</button>
</center>
  <script type="text/javascript">

      //实例化编辑器
      //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
      var ue = UE.getEditor('editor');


      function isFocus(e){
          alert(UE.getEditor('editor').isFocus());
          UE.dom.domUtils.preventDefault(e)
      }
      function setblur(e){
          UE.getEditor('editor').blur();
          UE.dom.domUtils.preventDefault(e)
      }
      function insertHtml() {
          var value = prompt('插入html代码', '');
          UE.getEditor('editor').execCommand('insertHtml', value)
      }
      function createEditor() {
          enableBtn();
          UE.getEditor('editor');
      }
      function getAllHtml() {
          alert(UE.getEditor('editor').getAllHtml())
      }
      function getContent() {
          var arr = [];
          arr.push(UE.getEditor('editor').getContent());
          return arr.join("\n");
      }
      function getPlainTxt() {
          var arr = [];
          arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
          arr.push("内容为：");
          arr.push(UE.getEditor('editor').getPlainTxt());
          alert(arr.join('\n'))
      }
      function setContent(isAppendTo) {
          var arr = [];
          arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
          UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
          alert(arr.join("\n"));
      }
      function setDisabled() {
          UE.getEditor('editor').setDisabled('fullscreen');
          disableBtn("enable");
      }

      function setEnabled() {
          UE.getEditor('editor').setEnabled();
          enableBtn();
      }

      function getText() {
          //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
          var range = UE.getEditor('editor').selection.getRange();
          range.select();
          var txt = UE.getEditor('editor').selection.getText();
          alert(txt)
      }

      function getContentTxt() {
          var arr = [];
          arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
          arr.push("编辑器的纯文本内容为：");
          arr.push(UE.getEditor('editor').getContentTxt());
          alert(arr.join("\n"));
      }
      function hasContent() {
          var arr = [];
          arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
          arr.push("判断结果为：");
          arr.push(UE.getEditor('editor').hasContents());
          alert(arr.join("\n"));
      }
      function setFocus() {
          UE.getEditor('editor').focus();
      }
      function deleteEditor() {
          disableBtn();
          UE.getEditor('editor').destroy();
      }
      function disableBtn(str) {
          var div = document.getElementById('btns');
          var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
          for (var i = 0, btn; btn = btns[i++];) {
              if (btn.id == str) {
                  UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
              } else {
                  btn.setAttribute("disabled", "true");
              }
          }
      }
      function enableBtn() {
          var div = document.getElementById('btns');
          var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
          for (var i = 0, btn; btn = btns[i++];) {
              UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
          }
      }

      function getLocalData () {
          alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
      }

      function clearLocalData () {
          UE.getEditor('editor').execCommand( "clearlocaldata" );
          alert("已清空草稿箱")
      }
  </script>


  </div>

</div>
 </body>
</html>
