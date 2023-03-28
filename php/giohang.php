<?php
$action="giohang";

if(!isset($_SESSION['cart']))
{
  // nếu ko tồn tại giỏ hàng thì tạo ra giỏ hàng tên là $_SESSION['cart']
  // vì giỏ hàng chứa nhiều sản phẩm nên nó là kiểu mảng
  $_SESSION['cart']=array();
  //a[] tương đương $_SESSION['cart'][]
}
if(isset($_GET['act']))
{
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
      echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
    }
    break;
  case 'emty_cart':
    // truyền id là mã hh mà người dùng click xóa
    // nhận id
    if(isset($_GET['id']))
    {
      $key=$_GET['id'];
      // xóa thì dùng hàm unset
      unset($_SESSION['cart'][$key]);
      echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
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
      echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
      break;
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