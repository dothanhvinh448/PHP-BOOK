
<div class="table-responsive">
  <!-- kiểm tra trong giỏ hàng của kh có hàng hay ko, có hàng thì mới load lên
  ko có hàng thì yêu cầu người ta chọn hàng
 -->
 <?php
  if(!isset($_SESSION['cart'])||count($_SESSION['cart'])==0):
   
    echo '<script> alert("Giỏ hàng của bạn chưa có món hàng nào");</script>';
    echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home"/>';
 ?>
 <!-- ngược lại hiển thị form chứa những món hàng mà khách hàng mua -->
 <?php
  else:
 ?>

    <form action="index.php?action=giohang&act=update_cart" method="post">
      <table class="table table-bordered">
        <thead>
          <tr><td colspan="5"><h2 style="color: red;">THÔNG TIN SÁCH</h2></td></tr>
          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sách</th>
            <th>Thể Loại</th>
            <th >Ngày Trả</th>
            <th>Số Lượng</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // echo print_r($_SESSION['cart']);  
          $i=0;
          // foreach(mang as $key=>$value)// foreach(mang as $item)
            foreach($_SESSION['cart'] as $key=>$item):
              $i++;
              
          ?>
            <tr>
              <td><?php echo $i;?></td>
              <td><img width="50px" height="50px" src="Content/image/<?php echo $item['hinh'];?>">
              <?php echo $item['tensach'];?>
            </td>
              <td><?php echo $item['theloai'];?></td>
           
              <td>Ngày Trả Sách:<?php echo $item['ngaytra'];?> </td>
              <td>  Số Lượng: <input type="text" name="newqty[<?php echo $item['id'];?>]" value="<?php echo $item['soluong'];?>" /><br /></td>
              <td><a href="index.php?action=giohang&act=emty_cart&id=<?php echo $item['id'];?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                <button type="submit" class="btn btn-secondary">Sửa</button>

              </td>
            </tr>
          <?php
            endforeach;
          ?>
          <tr>
            <td><a href="index.php?action=order&act=order_action"><button type="button" class="btn btn-danger">ORDER</button></a></td>
          </tr>
        </tbody>
      </table>
    </form>
 <?php
  endif;
 ?>
</div>
</div>