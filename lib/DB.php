<?php
header('Access-Control-Allow-Origin: *');
require_once str_replace('\\','/',dirname(dirname(__FILE__))."/config/config.php");
/*
 *
*/
class DB
{
  var $sql;
  var $db_con;
  function __construct()
  {
    //var_dump(get_db_conf());
    $this->db_con=mysql_connect(get_db_conf()['DB_HOST'],get_db_conf()['DB_USER'],get_db_conf()['DB_PWD']);
    //echo $db_config['DB_HOST'].$db_config['DB_USER'].$db_config['DB_PWD'];
    if (!$this->db_con)
    {
      die('Could not connect: ' . mysql_error());
    }
    if (!mysql_query("use bh;",$this->db_con))
    {
      die('Could not select datebase ' . mysql_error());
    }
  }
  public function query($sql){
    $db_con = $this->db_con;
    mysql_query("set names utf8;",$db_con);
    $db_result=mysql_query($sql,$db_con);

      return $db_result;

  }
  public function close(){
    mysql_close($this->db_con);
  }
}



 ?>
