<?php
    $action ="login";
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }
    switch ($action) {
        case 'login':
            include "View/dangnhap.php";
            break;
        case 'login_action':
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    if($username=="admin"&& $password=="admin"){
                        $_SESSION['username']=$username;
                        echo '<script> alert("Đăng nhập thành công");</script>';
                    //   include "View/hanghoa.php";
                    // echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham"/>';
                    include "View/hanghoa.php";
                        break;
                    } 
                }
        case 'logout':
        session_destroy();
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
         break;
              
            // login_action
        default:
            # code...
            break;
    }
?>