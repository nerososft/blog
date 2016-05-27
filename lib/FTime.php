<?php
/*
 * $createtime 可以是当前时间
 * $gettime 你要传进来的时间
 */
class FTime{
        function  __construct($createtime,$gettime) {
            $this->createtime = $createtime;
            $this->gettime = $gettime;
    }
    function getSeconds()
    {
            return $this->createtime-$this->gettime;
        }
    function getMinutes()
       {
       return ($this->createtime-$this->gettime)/(60);
       }
      function getHours()
       {
       return ($this->createtime-$this->gettime)/(60*60);
       }
      function getDay()
       {
        return ($this->createtime-$this->gettime)/(60*60*24);
       }
      function getMonth()
       {
        return ($this->createtime-$this->gettime)/(60*60*24*30);
       }
       function getYear()
       {
        return ($this->createtime-$this->gettime)/(60*60*24*30*12);
       }
       function index()
       {
            if($this->getYear() > 1)
            {
                 if($this->getYear() > 2)
                    {
                        return date("Y-m-d",$this->gettime);
                        exit();
                    }
                return intval($this->getYear())."年前";
                exit();
            }
             if($this->getMonth() > 1)
            {
                return intval($this->getMonth())."月前";
                exit();
            }
             if($this->getDay() > 1)
            {
                return intval($this->getDay())."天前";
                exit();
            }
             if($this->getHours() > 1)
            {
                return intval($this->getHours())."小时前";
                exit();
            }
             if($this->getMinutes() > 1)
            {
                return intval($this->getMinutes())."分钟前";
                exit();
            }
           if($this->getSeconds() > 1)
            {
                return intval($this->getSeconds()-1)."秒前";
                exit();
            }
       }
  }
//类的使用实例
/*
 *
 * 调用类输出方式
 *
 * $a = new Mygettime(time(),strtotime('-25 month'));
 * echo iconv('utf-8', 'gb2312', $a->index())?iconv('utf-8', 'gb2312', $a->index()):iconv('utf-8', 'gb2312', '当前');
 *
 */
