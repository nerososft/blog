var page =1;
var is_data_null = false;
var get_items = function(yeshu){
  console.log(yeshu);
  $.post(__BASE_URL__+"lib/Api/item/get_news",
  {
    page:yeshu
  },
  function(data,status){
    if(data!='[]'){
        page++;
    }
    //console.log(status,data);
    if(data=='[]'){
      $("#loading_img").css("display",'none');
      if(is_data_null==false){
        $("#item_container").append("<div style='width:100%;float:left;background:rgb(231,233,239);height:50px;margin-top:10px;line-height:50px;color:#bbb;text-align:center;'><span class='glyphicon glyphicon-bell'> 没有更多咯<span></div>");
      }
      is_data_null = true;
    }else{
      var items_json = eval("("+data+")");//
      //console.log(status,items_json);
      items_json.reverse();
      $.each(items_json,function(key,value){
        var title=value.title;
        var content = value.content;
        if(title.length>60){
          title = title.substr(0,30)+"...";
        }
        if(content.length>100){
          content = content.substr(0,60)+"...";
        }
        //哈哈，这尼玛这块用的像react一样咯
        $("#item_container").append("<div style='width:100%;float:left;height:150px;border-bottom:1px dashed #ccc;border-right:1px dashed #ccc;padding:10px;'><image style='width:30%;height:130px;margin:0px;padding:0px;float:left;' src='"+__BASE_URL__+"assets/img/banner/"+value.icon+".jpg'></image><div style='width:69%;float:left;height:130px;margin-left:1%;'><div style='width:100%;height:110px;float:left;'><a href=''><p style='margin:0px;paddiing:0px;font-size:16px;font-weight:bold;'>"+title+"<p></a><p style='margin:0px;paddiing:0px;font-size:14px;color:#aaa;'>"+content+"<p></div><div style='width:100%;height:20px;float:left;color:#ccc;'><a href=''><span>"+value.tag+"</span></a>&nbsp&nbsp<a href=''><span>"+value.username+"</span></a>&nbsp&nbsp<span class='glyphicon glyphicon-comment'>14</span>&nbsp&nbsp"+value.ctime+"</div></div></div>");
      });
    //return 1;
    }
  });
}
get_items(page);
$(document).scroll(function(){
  //alert($(window).height());
  if($(document).scrollTop() >= $(document).height() - $(window).height()){
    //alert($(window).height());
    //console.log("get","-----");
    get_items(page);

  }
})
/*
<div style='width:100%;float:left;height:150px;border-bottom:1px dashed #ccc;border-right:1px dashed #ccc;padding:10px;'>
  <image style='width:30%;height:130px;margin:0px;padding:0px;float:left;' src='assets/img/banner/3.jpg'></image>
  <div style='width:69%;float:left;height:130px;margin-left:1%;'>
    <div style='width:100%;height:110px;float:left;'>
      <a href=''><p style="margin:0px;paddiing:0px;font-size:16px;font-weight:bold;font-family:'微软雅黑';">今夜，我们不谈人类未来，也不谈科技术语，只讲一个天才的故事<p></a>
      <p style='margin:0px;paddiing:0px;font-size:14px;font-family:'微软雅黑';color:#aaa;">从天才少年到创业者再到学术大咖，AlphaGo 之父 Demis Hassabis 变换着各种身份，给世界带来一次又一次的惊喜。<p>
    </div>
  <div style="width:100%;height:20px;float:left;color:#ccc;font-family:'微软雅黑';">
  <a href=''><span>故事</span></a>&nbsp&nbsp<a href=""><span>王飞</span></a>&nbsp&nbsp<span class='glyphicon glyphicon-comment'>14</span>&nbsp&nbsp2小时前
  </div>
 </div>
</div>
*/
