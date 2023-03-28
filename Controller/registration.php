<?php
$action="registration";
if(isset($_GET['act']))
{
  $action=$_GET['act'];//$action=registration_action
//   echo $action;
}
switch($action)
{
  case 'registration':
    include 'View/registration.php';
    break;
    case 'registration_action':
        if($_SERVER['REQUEST_METHOD']=='POST')// if(isset($_POST['submit']))
        {
          $studentName=$_POST['studentName'];//$ten=an thịnh
          $age =$_POST['age']; 
          $gender=$_POST['gender'];
          $is_deleted="false";
          $username=$_POST['txtusername'];//$username=anthinh
          $phone=$_POST['txtsodt'];//$sodt=123456
          $email=$_POST['txtemail'];//$email=an@gmail.com
          $password=$_POST['txtpass'];//$password=123456
          $address=$_POST['txtdiachi'];//$diachi=hcm      
          $ur=new User();
          //check trung username
          $checkUserName=$ur->checkUserName($username);
          echo print_r($checkUserName['user_name']);
          if($username!=$checkUserName['user_name']){
            $ur->insertUser($studentName,$age,$gender,$is_deleted,$username,$phone,$email,$password,$address);
          //
          echo '<script> alert("Đăng ký thành công");</script>';
          include 'View/home.php';
          break;
          }else{
            echo '<script> alert("Đã trùng tên đăng nhập");</script>';
            include 'View/registration.php';
          }
          
        }
        // sau khi chèn thành công thì muốn load về trang nào là tùy
       
    
}
?>