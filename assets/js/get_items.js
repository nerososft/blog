var page =1;
var is_data_null = false;
var get_items = function(yeshu){
  console.log(yeshu);
  $.post(__BASE_URL__+"lib/Api/item/get_items",
  {
    page:yeshu
  },  function(data,status){
    if(data!='[]'){
        page++;
    }
    if(data=='[]'){
      $("#loading_img").css("display",'none');
      if(is_data_null == false){
        $("#item_container").append("<div style='width:100%;float:left;background:rgb(231,233,239);height:50px;margin-top:10px;line-height:50px;color:#bbb;text-align:center;'><span class='glyphicon glyphicon-bell'> 没有更多咯<span></div>");
      }
      is_data_null = true;
    }else{
      var items_json = eval("("+data+")");//
      items_json.reverse();
      $.each(items_json,function(key,value){
        var title=value.title;
        if(title.length>40){
          title = title.substr(0,40)+"...";
        }
        $("#item_container").append("<div id='item_one' class='item_one' style='width:100%;'><img id='user_icon' class='item_icon' src='"+__BASE_URL__+value.avatar+"'/><div id='item_one_content' class='item_one_content'><a id='item_title_href' href='"+__BASE_URL__+"page/item/detil?item="+value.id+"'><p id='item_title' class='item_title'>"+title+"</p></a><p class='item_tab'><span id='item_tag_name' class='span_tab_s'><a href='"+__BASE_URL__+"page/tag/tag?tag="+value.tag+"'> <span class='glyphicon glyphicon-tag'></span> "+value.tag+"</span></a><a id='item_user_name' href='"+__BASE_URL__+"page/user/user_info?user="+value.username+"'>  <span class='glyphicon glyphicon-user'></span>"+value.username+"</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style='color:rgb(86,61,124);' class='glyphicon glyphicon-thumbs-up'>"+value.up+"</span>&nbsp&nbsp<span style='color:rgb(86,61,124);' class='glyphicon glyphicon-thumbs-down'>"+value.down+"</span>&nbsp&nbsp<span style='border-radius:20px;background:rgb(86,61,124);color:#fff;padding:0px;padding-left:5px;padding-right:5px;'>"+value.hot+"</span>&nbsp&nbsp&nbsp&nbsp&nbsp<span style='color:rgb(86,61,124);border:solid 0.5px #239012;border-radius:3px;' class='glyphicon glyphicon-time'>"+value.createtime+"</span></p></div></div>");
      });
    }
  });
}
get_items(page);
$(document).scroll(function(){
  if($(document).scrollTop() >= $(document).height() - $(window).height()){
    get_items(page);
  }
})
