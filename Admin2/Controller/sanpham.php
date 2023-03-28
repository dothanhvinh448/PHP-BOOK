<?php
$action="sanpham";
if(isset($_GET['act']))
{
  $action=$_GET['act'];
}
switch($action)
{
  case "sanpham":
    include "View/hanghoa.php";
    break;
  case "insertsp":
    include "View/edithanghoa.php";
    break;
  case "insert_action":
    if(isset($_POST['submit']))
    {
      $id=$_POST['id'];
      $name=$_POST['name'];
      $created_by=$_POST['created_by'];
      $number_book=$_POST['number_book'];
      $number_pages=$_POST['number_pages'];
      $author=$_POST['author'];
      $category=$_POST['category'];
      $image=$_FILES['image']['name'];
      // đem toàn bộ thông tin này chèn vào database
      $hh=new HangHoa();
      $hh->createBook($name,$created_by,$number_book,$number_pages,$author,$category,$image);
      // sau khi chèn xong, đưa hình từ server về thư mục cần đỗ vào
      if(isset($hh))// chèn đc thì trả về là true
      {
        $uploadImage = new uploadImage();
        $uploadImage->uploadhinh($image);
        echo '<script> alert("Lưu sản phẩm thành công")</script>';
      }
    }
    include "View/hanghoa.php";
    break;
  case "update":
    include "View/edithanghoa.php";
    break;
  case "update_action":
    // truyền qua đây thông tin của tất cả các sp
    if(isset($_POST['submit']))
    {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $created_by=$_POST['created_by'];
    $number_book=$_POST['number_book'];
    $number_pages=$_POST['number_pages'];
    $author=$_POST['author'];
    $category=$_POST['category'];
    $image=$_FILES['image']['name'];

      // đem toàn bộ thông tin này chèn vào database
      $hh=new HangHoa();
      $hh->updatehanghoa($id,$name,$created_by,$number_book,$number_pages,$author,$category,$image);
      // sau khi update xong, đưa hình từ server về thư mục cần đỗ vào
      if(isset($hh))// chèn đc thì trả về là true
      {
           
        $uploadImage = new uploadImage();
        $uploadImage->uploadhinh($image);
        // echo '<script> alert("Update sản phẩm thành công")</script>';
      }
    }
    include "View/hanghoa.php";
    break;
  case "delete":
    if(isset($_GET['id']))
    {
      $id=$_GET['id'];
      $book=new HangHoa();
      $book->deleteBook($id);
      // echo '<script> alert("Xóa sản phẩm thành công")</script>';
    }
    include "View/hanghoa.php";
    break;
}
 ?>