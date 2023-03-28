<?php
class uploadImage{
  function uploadhinh($hinh)
{
$hinhanhpaht=basename($_FILES['image']['name']);
$target_dir="../Content/image/";
$target_file=$target_dir.$hinhanhpaht;

$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
  {
    echo '<script> alert("Update sản phẩm thành công")</script>';
  }else{
    echo '<script> alert("chua update hình ảnh thành công")</script>';
  }
}
}
?>
