<?php
class HangHoa{
  public function __construct()
  {
    
  }
  // pt hiển thị tất cả các sp
  function getListAllBook(){
    $db=new connect();
    $select =" SELECT * FROM book WHERE book.is_deleted!='true'";
  
    $result=$db->getList($select);
    // echo var_dump($result);
    return $result;
}
  // lấy thông tin của bảng loại hàng
  function getListMaLoaiSP()
  {
    $db=new connect();
    $select="select maloai,tenloai from loai";
    $result=$db->getList($select);
    return $result;
  }
  // viết câu lệnh insert vào bảng hàng hóa
  function createBook($name,$created_by,$number_book,$number_pages,$author,$category,$image)
  {
    $db=new connect();
    $is_deleted="false";
    $query="insert into book(id, name,created_by,number_book,number_pages, author,category,image,is_deleted) 
    values(NULL,'$name','$created_by',$number_book,$number_pages,'$author','$category','$image','$is_deleted')";
    $db->exec($query);
  }
  // lấy thông tin của 1 sản phẩm
  function getHangHoaID($id)
  {
    $db=new connect();
    $select=" select * from book where id=$id";
    $result=$db->getInstance($select);
    return $result;
  }
  // phuong thức update hang hoa
  function updatehanghoa($id,$name,$created_by,$number_book,$number_pages,$author,$category,$image)
  {
    $db=new connect();
    $query="update book set name='$name',
    created_by='$created_by',
    number_book=$number_book,
    number_pages=$number_pages,
    author='$author',
    category='$category',
    image='$image' 
    where id=$id";
    $db->exec($query);
  }
  // pt xóa
  function deleteBook($id)
  {
    $db=new connect();
    $query="update book set is_deleted='true' where id=$id";

    $db->exec($query);
  }
  // function insertLoaiHang($id,$tenloai,$idmenu)
  // {
  //   $db=new connect();
  //   $query="insert into loai(maloai,tenloai,idmenu) values($id,'$tenloai',$idmenu)";
  //   $db->exec($query);
  // }
}
?>