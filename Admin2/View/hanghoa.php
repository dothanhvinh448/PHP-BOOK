
<div  class="col-md-4 col-md-offset-4">
  <h3 style="margin-top:20px;"><b>DANH SÁCH BOOK</h3>
</div>
<div class="row col-12">
<a href="index.php?action=sanpham&act=insertsp"><h4>Thêm sản phẩm</h4></a>
</div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên Sách</th>
        <th>Hình</th>
        <th>Thể Loại</th>
        <th>Tác Giả</th>
        <th>Số Trang</th>
        <th>Số Lượng</th>
        <th>Ngày Thêm</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh=new HangHoa();
      $result=$hh->getListAllBook();
      while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['id'];?></td>
        <td><?php echo $set['name'];?></td>
        <td><img width="50px" height="50px" src="../Content/image/<?php echo $set['image'];?>"/></td>
        <td><?php echo $set['author'];?></td>
        <td><?php echo $set['category'];?></td>
        <td><?php echo $set['number_book'];?></td>
        <td><?php echo $set['number_pages'];?></td>
        <td><?php echo $set['created_by'];?></td>
        <td><a href="index.php?action=sanpham&act=update&id=<?php echo $set['id'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=sanpham&act=delete&id=<?php echo $set['id'];?>">Xóa</a></td>
      </tr>
     <?php
     endwhile;
     ?>
    </tbody>
  </table>
</div>