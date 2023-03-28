<?php
    $action= "user";
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }
    switch ($action) {
        case 'user':
            include "View/user.php";
            break;
            case 'delete':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $user= new user();
                    $user->deleteUser($id);
                    echo '<script> alert("da xóa")</script>';
                }else{
                    echo '<script> alert("chưa có id user")</script>';
                }
                include "View/user.php";
                break;

                case 'update':
                    include "View/edituser.php";
                    break;
                    case 'update_action':
                        if(isset($_POST['submit'])){
                            $id=$_POST['id'];
                            $name=$_POST['name'];
                            $age=$_POST['age'];
                            $gender=$_POST['gender'];
                            $user_name=$_POST['user_name'];
                            $phone=$_POST['phone'];
                            $email=$_POST['email'];
                            $password=$_POST['password'];
                            $address=$_POST['address'];
                            $user = new user();
                            $user->updateUser($id,$name,$age,$gender,$user_name,$phone,$email,$password,$address);
                            echo '<script> alert("update thành công")</script>';
                        }else{
                            echo '<script> alert("chưa có id user")</script>';
                        }
                        include "View/user.php";
                        break;
                 
        default:
            # code...
            break;
    }
?>