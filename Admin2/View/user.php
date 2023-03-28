<div class="table-responsive">
   <form  method="post">
      <table class="table table-bordered">
        <thead>
          <tr><td colspan="9"><h2 style="color: red;">THÔNG TIN TOÀN KHOẢN ACTIVE</h2></td></tr>
          <tr class="table-success">
            <th>Tên</th>
            <th>Tuổi</th>
            <th>Giới Tính</th>
            <th >tên đăng nhập</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php
        $listUser=new user();
        $result=$listUser->getListUser();
         while($item=$result->fetch()):
           ?>
            <tr>
            <td><?php echo $item['name'];?></td>
            <td><?php echo $item['age'];?></td>
             <td> <?php echo $item['gender'];?></td>
            </td>
              <td><?php echo $item['user_name'];?></td>
              <td><?php echo $item['phone'];?></td>
              <td><?php echo $item['email'];?></td>
              <td><?php echo $item['address'];?></td>
              <td><a href="index.php?action=user&act=update&id=<?php echo $item['id'];?>">Cập nhật</a></td>
                <td><a href="index.php?action=user&act=delete&id=<?php echo $item['id'];?>">Xóa</a></td>
            </tr>
            <?php endwhile;?>
          <tr>
          </tr>
        </tbody>
      </table>
    </form>
</div>
</div>