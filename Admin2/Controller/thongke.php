<?php
$action ="thongke";
if(isset($_GET['act']))
{
  $action=$_GET['act'];
}
switch ($action) {
  
    case 'thongke':
        include "View/thongke.php";
        break;
    case 'thongke_thang':
      include "View/reportMonth.php";
    default:
        # code...
        break;
}
?>

