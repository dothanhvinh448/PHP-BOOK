<?php
    $action="login";
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }
    switch ($action) {
        case 'login':
            include "./View/login.php";
            break;
            case 'login_action':
               if($_SERVER['REQUEST_METHOD']=="POST"){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $ur= new User();
                    $log=$ur->login($username,$password);
                    if($log==true)
                    {
                      // trường hợp đang nhập có thông tin
                      $_SESSION['id']=$log['id'];//$log[0] vì nó trả về là dạng mảng
                      $_SESSION['name']=$log['name'];
                      $_SESSION['username']=$log['user_name'];
                      $_SESSION['password']=$log['password'];
                      $_SESSION['email']=$log['email'];
                      $_SESSION['address']=$log['address'];
                      $_SESSION['phone']=$log['phone'];
                      echo '<script> alert("Đăng nhập thành công");</script>';
                      // thẻ meta load lại trang trong thời gian 0 giây
                      echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home"/>';
                      
                    }else{
                        echo '<script> alert("Sai thông tin đăng nhập");</script>';
                        include "./View/login.php";
                    }
               }
               break;
               case 'logout':
                session_destroy();
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home"/>';
                break;
        default:
            # code...
            break;
    }
?>