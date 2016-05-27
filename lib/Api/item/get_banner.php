<?php

require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Api/Model/Banner.php");

$banner = new Banner();
echo json_encode($banner->get_banner_info());
 ?>
