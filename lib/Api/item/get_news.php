<?php
require_once str_replace('\\','/',dirname(dirname(dirname(__FILE__)))."/Api/Model/Wenzhang.php");
$m_wenzhang = new Wenzhang();
echo json_encode($m_wenzhang->get_by_page($_POST['page']));


 ?>
