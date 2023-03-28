

<div class="row col-md-4 col-md-offset-4" style ="margin-top:30px;" >

    <h3>EDIT USER</h3>
 <?php
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];//2
    $user=new user();
    $result=$user->getUserId($id);
    $name=$result['name'];
    $age=$result['age'];
    $gender=$result['gender'];
    $user_name=$result['user_name'];
    $phone=$result['phone'];
    $email=$result['email'];
    $password=$result['password'];
    $address=$result['address'];
    
  }
 ?>

  <form action="index.php?action=user&act=update_action&id=<?php echo $id;?>" method="post">
  
    <table class="table" style="border: 0px;">
      <tr>
        <td>iD</td>
        <td> <input type="text" class="form-control" name="id" value="<?php if(isset($id)) echo $id;?>"  readonly/></td>
      </tr>
      <tr>
        <td>Họ Tên Người Dùng</td>
        <td><input type="text" class="form-control" name="name" value="<?php if(isset($name)) echo $name;?>"  maxlength="100px"></td>
      </tr>
      <tr>
        <td>Tuổi</td>
        <td><input type="text" class="form-control" name="age" value="<?php if(isset($age)) echo $age;?>"></td>
      </tr>
      <tr>
        <td>Giới Tính</td>
        <td><input type="text" class="form-control" name="gender" value="<?php if(isset($gender)) echo $gender;?>" ></td>
      </tr>
      <tr>
        <td>Tên ĐĂNG NHẬP</td>
        <td><input type="text" class="form-control" name="user_name" value="<?php if(isset($user_name)) echo $user_name;?>" ></td>
      </tr>
      <tr>
        <td>SỐ ĐIỆN THOẠI</td>

        <td>
          <input type="text" class="form-control" name="phone" value="<?php if(isset($phone)) echo $phone;?>" >
        </td>
      </tr>
      <tr>
        <td>EMAIL</td>
        <td>
          <input type="text" class="form-control" name="email" value="<?php if(isset($email)) echo $email;?>" >
        </td>
      </tr>
      <tr>
        <td>MẬT KHẨU</td>
        <td>
          <input type="text" class="form-control" name="password" value="<?php if(isset($password)) echo $password;?>" >
        </td>
      </tr>
      <tr>
        <td>ĐỊA CHỈ</td>
        <td>
          <input type="text" class="form-control" name="address" value="<?php if(isset($address)) echo $address;?>" >
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