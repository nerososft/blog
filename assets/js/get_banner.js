var index = 0;
var length;
var url_array = new Array();
var tourl_array = new Array();
$.post(__BASE_URL__+'lib/Api/item/get_banner',
{},function(data,status){
  var banner_json = eval("("+data+")");//
  banner_json.reverse();
  length = banner_json.length;
  //alert(length);
  //console.log(status,banner_json);
  $.each(banner_json,function(key,value){
    //console.log("key",key);
    url_array[key]=value.url;
    tourl_array[key]=value.tourl;
    if(key==0){
      $("#dot_container").append("<span id='dot"+key+"' class='jump_dot_nav'></span>");
    }else{
      $("#dot_container").append("<span id='dot"+key+"' class='jump_dot'></span>");
    }
    $("#dot"+key).click(function(){
      change();
      index=key;
      event.stopPropagation();
      $("#top_img_list").click(function(){
        window.location.href=__BASE_URL__+value.tourl;
      });
    });
  });
});
setInterval(function(){
  change();
  if(index<length-1){
    index++;
  }else{
    index=0;
  }
},3000);
function change(){
  $("#top_img_list").css("background","url("+__BASE_URL__+url_array[index]+")");
  $("#top_img_list").css("background-size","100% 300px");
  $("#top_img_list").css("transition","2s all");
  for(var i= 0;i<length;i++){
    $("#dot"+i).attr('class','jump_dot');
  }
  $("#dot"+index).attr('class','jump_dot_nav');
  $("#dot"+index).css("transition","0.2s all");
  $("#top_img_list").click(function(){
    window.location.href=__BASE_URL__+tourl_array[index];
  });
}
