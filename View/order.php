<div class="table-responsive">
 <?php
 if(!isset($_SESSION['id'])):
  echo '<script> alert("Bạn chưa đăng nhập");</script>';
  echo '<meta http-equiv="refresh" content="0;url=../index.php?action=login"/>';
 ?>
 <?php
  else:
 ?>
   
   <form action="index.php?action=giohang&act=update_cart" method="post">
      <table class="table table-bordered">
        <thead>
          <tr><td colspan="5"><h2 style="color: red;">THÔNG TIN SÁCH Đã Mượn Thành Công</h2></td></tr>
          <tr class="table-success">
          <th>Thông Tin Sách</th>
            <th>Thể Loại</th>
            <th>Ngày Mượn Sách</th>
            <th >Ngày Dự kiến trả sách</th>
            <th>Số Lượng</th>
            <th>Trả sách</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $listBookOrder=new order();
        $result=$listBookOrder->getListBookOrder($_SESSION['id']);
         while($item=$result->fetch()):
           ?>
            <tr>
            
              <td><img width="50px" height="50px" src="Content/image/<?php echo $item['image'];?>">
              <?php echo $item['name'];?>
            </td>
              <td><?php echo $item['category'];?></td>
              <td>Ngày Mượn:<?php echo $item['date_by'];?></td>
              <td>Ngày Trả Sách:<?php echo $item['date_back'];?></td>
              <td>  Số Lượng: <?php echo $item['total'];?><br /></td>
              <td><button btn btn-primary><a href="index.php?action=order&act=order_back&id=<?php echo $item['eb_book_id'];?>">Trả sách</a></button></td>
            </tr>
            <?php endwhile;?>
          <tr>
          </tr>
        </tbody>
      </table>
    </form>

    <form action="index.php?action=giohang&act=update_cart" method="post">
      <table class="table table-bordered">
        <thead>
          <tr><td colspan="5"><h2 style="color: red;">THÔNG TIN SÁCH ĐÃ TRẢ</h2></td></tr>
          <tr class="table-success">
          <th>Thông Tin Sách</th>
            <th>Thể Loại</th>
            <th>Ngày Mượn Sách</th>
            <th >Ngày Dự Kiến Trả Sách</th>
            <th>Ngày Trả Sách</th>
            <th>Số Lượng</th>
            <th>Trả Sách Không Đúng Hẹn</th>
         
          </tr>
        </thead>
        <tbody>
        <?php
        $listBookBack=new order();
        $_SESSION['id'];
        $result=$listBookBack->getListBookBack($_SESSION['id']);
         while($item=$result->fetch()):
         ?>
            <tr>
            
              <td><img width="50px" height="50px" src="Content/image/<?php echo $item['image'];?>">
              <?php echo $item['name'];?>
            </td>
              <td><?php echo $item['category'];?></td>
              <td>Ngày Mượn:<?php echo $item['date_by'];?></td>
              <td>Ngày Dự Trả Sách:<?php echo $item['date_back'];?> </td>
              <td>Ngày Trả sách:<?php echo $item['current_date_back'];?> </td>
              <td>  Số Lượng: <?php echo $item['total'];?><br /></td>
               
              <?php
                  if($item['current_date_back']>$item['date_back']){
                    echo ' <td>Bạn đã trả muộn</td>';
                  }
              ?>            
            </tr>
            <?php endwhile;?>
          <tr>
          </tr>
        </tbody>
      </table>
    </form>
  <?php endif;?>
</div>
</div>