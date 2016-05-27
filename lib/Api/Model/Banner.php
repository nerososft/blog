<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/DB.php");


class Banner{
  var $banner_db;
  var $banner_url;
  var $banner_id;
  var $banner_tourl;
  function __construct(){
    $this->banner_db =new DB();
    //return json_encode($this->get_banner_info());
  }
  function get_banner_info(){
    $banner_result = $this->banner_db->query("select * from banner where isshow =1;");
    $banner_datas = array();
    while ($banner_row = mysql_fetch_array($banner_result)) {
      $banner_data = array(
        'id'=>$banner_row['id'],
        'url'=>$banner_row['url'],
        'tourl'=>$banner_row['tourl']
      );
      array_unshift($banner_datas,$banner_data);
    }
    return $banner_datas;
  }
  function __destruct(){
    $this->banner_db->close();
  }
}

 ?>
