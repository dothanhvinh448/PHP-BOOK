<?php
$action="giohang";//măt định action là giohang
if(!isset($_SESSION['cart']))
{
  // nếu ko tồn tại giỏ hàng thì tạo ra giỏ hàng tên là $_SESSION['cart']
  // vì giỏ hàng chứa nhiều sản phẩm nên nó là kiểu mảng
  $_SESSION['cart']=array();
  //a[] tương đương $_SESSION['cart'][]
}
if(isset($_GET['act']))//isset($_GET['act'] là kiểm tra xem phương thức gét có hay không
                       //nếu có thì action=Get['act] //phương thức gét là đường link hoặc là form action
{                       //vd:  <form action="index.php?action=giohang&act=add_cart" method="post"> dòng 14 chitietsanpham
                        //lúc này act=update_cart thì nó kiểm tra có get  $_GET['act'] nê action =$_GET['act'] =add_cart
                        //luc này vào  case "add_cart"   // if($_SERVER['REQUEST_METHOD']=='POST')
                        // if($_SERVER['REQUEST_METHOD']=='POST') nếu có sự kiện submit trong form 
                        //<button class="add-to-cart btn btn-default" type="submit" data-toggle="modal" data-target="#myModal">Mượn Sách dòng 55 chitietsanpham
                        // nếu mà có nó sẽ thu thập dữ liệu trong from dữ liệu trong form được lưu trong phương thức post
                       // $book_id=$_POST['id'];mã sách là 1
                       //  $cart= new GioHang(); khai báo đối tượng Gio Hang trong Model
                       //cart->$cart->add_item($book_id,$soluong,$ngaytra); gọi hàm add_item trong model Gionghang để lưu xuống database
                       //   echo '<meta http-equiv="refresh" content="0;url=../index.php?action=giohang"/>'; điều hướng về lại trang giỏ hàng
  $action=$_GET['act'];
}
switch($action)
{
  case "giohang":
    include 'View/cart.php';
    break;
  case "add_cart":
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $book_id=$_POST['id'];//$mahh=12
      $soluong=$_POST['soluong'];
      $ngaytra=$_POST['ngaytra'];
      $cart= new GioHang();
      $cart->add_item($book_id,$soluong,$ngaytra);
      echo '<meta http-equiv="refresh" content="0;url=../index.php?action=giohang"/>';
    }
    break;
  case 'emty_cart':
  
    if(isset($_GET['id']))
    {
      $key=$_GET['id'];
      // xóa thì dùng hàm unset
      unset($_SESSION['cart'][$key]);
      echo '<meta http-equiv="refresh" content="0;url=../index.php?action=giohang"/>';
    }
    case 'update_cart':
      $soluongnew=$_POST['newqty'];// $soluongnew là 1 array lưu thông tin của tất cả mã hàng trong giỏ hàng với số lượng tuowg ứng
      // duyệt qua giỏ hàng $_SESSION['cart']
      foreach($soluongnew as $key=>$soluong)
      {
        if($_SESSION['cart'][$key]['soluong']!=$soluong)
        {
          $cart= new GioHang();
         $cart->updateQuantity($key,$soluong);//21,10
        }
      }
      echo '<meta http-equiv="refresh" content="0;url=../index.php?action=giohang"/>';
      break;
      case 'binhluan':
        if($_SERVER['REQUEST_METHOD']=='POST'){
          $bookId=$_GET['id'];
          $txtbinhluan=$_POST['comment'];
          $comment = new GioHang();
          $comment->comment($bookId,$txtbinhluan);
        }
        include "./View/sanphamchitiet.php";
    break;
}
?>