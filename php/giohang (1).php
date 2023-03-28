<?php
   class GioHang{
    function add_item($id,$soluong,$ngaytra){
        $book= new Book();
        $result = $book->getDetailBookById($id);
   if(isset($_SESSION['cart'][$id])){

    $soluong+=$_SESSION['cart'][$id]['soluong'];
    // echo $soluong;
    $this->updateQuantity($id,$soluong);
    return;
   }
        $tensach=$result['name'];
        $tacgia=$result['author'];
        $image=$result['image'];
        $theloai=$result['category'];
        
        
$item=array(
    'id'=>$id,
    'tensach'=>$tensach,
    'tacgia'=>$tacgia,
    'hinh'=>$image,
    'theloai'=>$theloai,
    'soluong'=>$soluong,
    'ngaytra'=>$ngaytra,
);
        $_SESSION['cart'][$id]=$item;

    }
    function updateQuantity($id,$soluong){
        if($soluong<=0){
            unset($_SESSION['cart'][$id]);
        }  else{
            // cập nhật lại là chỉ thực hiện phép gán lại
          $_SESSION['cart'][$id]['soluong']=$soluong;//$_SESSION['cart'][21]['qty']=4
        
        }
    }

    function comment($book_id,$txtbinhluan){
        $db= new connect();
        $date=new DateTime("now");// lấy ngày và có giờ
        $date_by=$date->format("Y-m-d");
        $date=$date->format("Y-m-d");
        $sql = "INSERT INTO binhluan (id,book_id,date,binhluan) VALUES(null,$book_id,'$date_by','$txtbinhluan')";
        // echo $sql;
        $stm=$db->exec($sql);
    }
    function getComment($id){
        $db = new connect();
        $sql = "SELECT * FROM binhluan";
        $resluts=$db->getList($sql);
        return $resluts;
    }
   }
?>