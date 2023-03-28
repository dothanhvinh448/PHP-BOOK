<?php
$action="home";//
if(isset($_GET['act']))
{
  $action=$_GET['act'];//$action=detail
//   echo $action;
 
}
switch ($action) {
    case 'home':
        include "./View/home.php";
        break;
        case 'detail':
            include "./View/sanphamchitiet.php";
            break;
            case 'timkiem':
              include "./View/sanpham.php";
              break;
    default:
        # code...
        break;
}
?>