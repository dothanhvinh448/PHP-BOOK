<?php
  if(isset($_GET["act"]))
  {
    if($_GET["act"]=="insertsp")
    {
      $ac=1;
    }
    elseif($_GET["act"]="update")
    {
      $ac=2;
    }
    else{
      $ac=0;
    }
  }
?>
<!-- biện luận để lấy tiêu đề -->
<?php
if($ac==1)
{
  echo '<div class="row col-md-4 col-md-offset-4"><h3> THÊM SẢN PHẨM</h3></div>';
}
else if($ac==2)
{
  echo '<div class="row col-md-4 col-md-offset-4"><h3> CẬP NHẬT SẢN PHẨM</h3></div>';
}
else{
  echo '<div class="row col-md-4 col-md-offset-4"><h3> KHÔNG CÓ TRANG NÀO</h3></div>';
}
?>

<div class="row col-md-4 col-md-offset-4" >
  <!-- tiến hành lấy thông tin của 1 sản phẩm -->
 <?php
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];//2
    $hh=new HangHoa();
    $result=$hh->getHangHoaID($id);
    $tensach=$result['name'];
    $hinh=$result['image'];
    $tacgia=$result['author'];
    $ngaytao=$result['created_by'];
    $theloai=$result['category'];
    $soluong=$result['number_book'];
    $sotrang=$result['number_pages'];
    
  }
 ?>
 <?php
 if($ac==1)
 {
   echo '<form action="index.php?action=sanpham&act=insert_action" method="post" enctype="multipart/form-data">';
 }
 else if($ac==2)
 {
   echo '<form action="index.php?action=sanpham&act=update_action&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">';
 }
 else{
   echo 'rong';
 }
 ?>
  
  
    <table class="table" style="border: 0px;">
      <tr>
        <td>Mã hàng</td>
        <td> <input type="text" class="form-control" name="id" value="<?php if(isset($id)) echo $id;?>"  readonly/></td>
      </tr>
      <tr>
        <td>Tên Sách</td>
        <td><input type="text" class="form-control" name="name" value="<?php if(isset($tensach)) echo $tensach;?>"  maxlength="100px"></td>
      </tr>
      <tr>
        <td>Tác Giả</td>
        <td><input type="text" class="form-control" name="author" value="<?php if(isset($tacgia)) echo $tacgia;?>"></td>
      </tr>
      <tr>
        <td>Thể Loại</td>
        <td><input type="text" class="form-control" name="category" value="<?php if(isset($theloai)) echo $theloai;?>" ></td>
      </tr>
      <tr>
        <td>Hình</td>
        <td>
        <label><img width="50px" height="50px" src="../Content/image/<?php if(isset($hinh)) echo $hinh; ?>"></label>
           
            Chọn file để upload:
            <input type="file" name="image" value="<?php if(isset($hinh)) echo $hinh;?>" id="fileupload">
         
        </td>
      </tr>
      <tr>
        <td>Số Lượng</td>

        <td>
          <input type="text" class="form-control" name="number_book" value="<?php if(isset($soluong)) echo $soluong;?>" >
        </td>
      </tr>
      <tr>
        <td>Số trang</td>
        <td>
          <input type="text" class="form-control" name="number_pages" value="<?php if(isset($sotrang)) echo $sotrang;?>" >
        </td>
      </tr>
      <tr>
        <td>Ngày tạo</td>
        <td>
          <input type="date" class="form-control" name="created_by" value="<?php if(isset($ngaytao)) echo $ngaytao;?>" >
        </td>
      </tr>

      <tr>
        <td colspan="2">
          <input type="submit" value="submit" name="submit">
        </td>
      </tr>
    </table>
  </form>
</div>