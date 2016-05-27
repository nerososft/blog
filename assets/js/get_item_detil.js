var comment_do = function(){
  if($("#c_title").val()!=''){
    $.post(__BASE_URL__+'lib/Api/item/item_comment_do',
    {
      cid:$("#get_detil_id").val(),
      comment:$("#c_title").val()
    },function(data,status){
      console.log(status,data);
    });
  }
}
var get_item_data = function(dataid){
  $.post(__BASE_URL__+'lib/Api/item/get_item',
  {
    id:dataid
  },function(data,status){
    var item_one_json = eval("("+data+")");//
    //console.log(status,item_one_json);
    $("#passage_one_title").html(item_one_json.title);
    $("#passage_container_content").html(item_one_json.content);
    $("#comments_container").html("");
    $("#passage_tab_container").append("<a href='"+__BASE_URL__+"page/tag/tag?tag="+item_one_json.tag+"'><span class='glyphicon glyphicon-tag'></span>nodejs</a>&nbsp<a href='"+__BASE_URL__+"page/user/user_info?user="+item_one_json.username+"'><span class='glyphicon glyphicon-user'></span>"+item_one_json.username+"</a>&nbsp&nbsp&nbsp<span class='glyphicon glyphicon-thumbs-up'>"+item_one_json.up+"</span>&nbsp<span class='glyphicon glyphicon-thumbs-down'>"+item_one_json.down+"</span>&nbsp<span class='tab_hot'>"+item_one_json.hot+"</span>&nbsp&nbsp&nbsp<span class='glyphicon glyphicon-time'>"+item_one_json.createtime+"</span>");
    //console.log('c',item_one_json.comment);
    if(item_one_json.comment==""){
      $("#comments_container").append("<div style='width:100%;float:left;background:rgb(231,233,239);height:30px;margin-top:5px;line-height:30px;color:#bbb;text-align:center;'><span class='glyphicon glyphicon-bell'> 还没有评论哦，来抢个沙发吧</span></div>");
    }
    $.each(item_one_json.comment,function(k_c,v_c){
      //console.log('pinglun',v_c.avatar+"---"+v_c.comment+"---"+v_c.id+"---"+v_c.ctime+"---"+v_c.username);
      $("#comments_container").append("<div id='comment_item' class='comment_item'><img class='comment_item_img' title="+v_c.username+" src='"+__BASE_URL__+v_c.avatar+"'></img><div class='comment_c_container'><p class='comment_title'>"+v_c.comment+"</p><span style='color:rgb(86,61,124);' class='glyphicon glyphicon-time'>"+v_c.ctime+"</span></div><div id='huifu_container"+k_c+"' class='huifu_container1'></div></div>");
      $.each(v_c.reply,function(k_r,v_r){
        //console.log('huifu',v_r.avatar+"---"+v_r.reply+"---"+v_r.id+"---"+v_r.ctime+"---"+v_r.username);
        $("#huifu_container"+k_c).append("<div id='huifu_item' class='huifu_item'><img class='huifu_avatar' title="+v_r.username+" src='"+__BASE_URL__+v_r.avatar+"'></img><div class='huifu_container2'><p class='huifu_t'>"+v_r.reply+"</p><span class='huifu_time' class='glyphicon glyphicon-time'>"+v_r.ctime+"</span></div></div>");
      });
    });
  });
}
/*
<div id='comment_item' class='comment_item'>
  <img class='comment_item_img' src=''></img>
  <div class='comment_c_container'>
    <p class='comment_title'>我是评论一，哒哒哒</p>
    <span class='comment_c_hot' style=''>15</span>
    <span style='color:rgb(86,61,124);' class='glyphicon glyphicon-time'>3分钟前</span>
    <button class='bt_huifu' id='bt_huifu' onclick="ip_open()">回复</botton>
  </div>
  <div id='huifu_container' class='huifu_container1'>
    <div id='ip_huifu' class="ip_huifu">
        <input id='huifu_kk' onclick='ip_no()' class='huifu_kk' placeholder="回复点什么">
        <button class='huifu_bb' onclick="ip_close()" >回复</button>
    </div>

  </div>
</div>






<div id='huifu_item' class='huifu_item'>
  <img class='huifu_avatar' src=''></img>
  <div class='huifu_container2'>
    <p class='huifu_t'>我是回复一，哒哒哒</p>
    <span class='huifu_time' class='glyphicon glyphicon-time'>3分钟前</span>
  </div>
</div>
*/
