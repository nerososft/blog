$.post(__BASE_URL__+'lib/Api/user/get_user_info',{
  name:$("#username").val()
},function(data,status){
  var user_info_json = eval("("+data+")");//
  console.log("s",user_info_json);
  $("#info_avatar").attr('src',__BASE_URL__+user_info_json.avatar);
  $("#info_title").html(user_info_json.username+"的个人中心");
  $("#info_name").html(user_info_json.username);
  $("#info_uid").html(user_info_json.uid);
  $("#info_email").html(user_info_json.email);
  $("#info_ctime").html(user_info_json.ctime);

});
