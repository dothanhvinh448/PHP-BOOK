<?php
    $action="order";
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }
    switch ($action) {
        case 'order':
            include "View/order.php";
            break;
        case 'order_action':
            if(isset($_SESSION['id'])){
                $order= new order();
                foreach($_SESSION['cart'] as $key=>$item)
                {
                    echo '<script> alert("da order");</script>';
                  $order->createEmployeeBook($_SESSION['id'],$item['id'],$item['ngaytra'],$item['soluong']);
                }
            }  
            unset($_SESSION['cart']);
   
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=order"/>'; 
                break;
        case 'order_back':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $bookback= new order();
                    $bookback->BookBack($id);
                    echo '<script> alert("Trả sách");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=../index.php?action=order"/>'; 
                }
               
            break;
        
        default:
            # code...
            break;
    }
?>