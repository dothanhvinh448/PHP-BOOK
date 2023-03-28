<div class="table-responsive">
   <form  method="post">
      <table class="table table-bordered">
        <thead>
          <tr><td colspan="6"><h2 style="color: red;">THÔNG TIN SÁCH ĐANG CHO MƯỢN</h2></td></tr>
          <tr class="table-success">
          <th>Thông Tin Sách</th>
          <th>Người Mượn</th>
            <th>Thể Loại</th>
            <th>Ngày Mượn Sách</th>
            <th >Ngày Dự kiến trả sách</th>
            <th>Số Lượng</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $listBookOrder=new thongke();
        $result=$listBookOrder->getAllListBookBorrowed();
         while($item=$result->fetch()):
           ?>
            <tr>
            
              <td><img width="50px" height="50px" src="Content/image/<?php echo $item['image'];?>">
              <?php echo $item['name'];?>
            </td>
              <td><?php echo $item['username'];?></td>
              <td><?php echo $item['category'];?></td>
              <td><?php echo $item['date_by'];?></td>
              <td><?php echo $item['date_back'];?></td>
              <td><?php echo $item['total'];?><br /></td>
            </tr>
            <?php endwhile;?>
          <tr>
          </tr>
        </tbody>
      </table>
    </form>

    <form  method="post">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td colspan="7"><h2 style="color: red;">THÔNG TIN SÁCH ĐÃ TRẢ</h2></td>
          
        </tr>
          <tr class="table-success">
          <th>Thông Tin Sách</th>
          <th>Người Mượn</th>
            <th>Thể Loại</th>
            <th>Ngày Mượn Sách</th>
            <th >Ngày Phải Trả Sách</th>
            <th>Ngày Trả Sách</th>
            <th>Số Lượng</th>
            <th>Trả Muộn</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $listBookOrder=new thongke();
        $result=$listBookOrder->getAllListBookBack();
         while($item=$result->fetch()):
           ?>
            <tr>
            
              <td><img width="50px" height="50px" src="Content/image/<?php echo $item['image'];?>">
              <?php echo $item['name'];?>
            </td>
              <td><?php echo $item['username'];?></td>
              <td><?php echo $item['category'];?></td>
              <td><?php echo $item['date_by'];?></td>
              <td><?php echo $item['date_back'];?></td>
              <td><?php echo $item['current_date_back'];?></td>
              <td><?php echo $item['total'];?><br /></td>
              <?php
                  if($item['current_date_back']>$item['date_back']){
                    echo ' <td>Có</td>';
                  }
              ?>  
            </tr>
            <?php endwhile;?>
          <tr>
          </tr>
        </tbody>
      </table>
    </form>
</div>
</div>