<?php
/*
*随机字符串生成
**/
class Randchar{
  var $len;
  function __construct($length)
  {
    $this->len = $length;
  }
  function get_randchar(){
   $str = null;
   $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz1234567890";
   $max = strlen($strPol)-1;
   for($i=0;$i<$len;$i++){
    $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
   }
   return $str;
  }
}
?>
