<?php
    class Book{
        var $id=null;
        var $name=null;
        var $created_by=null;
        var $number_book=0;
        var $number_pages=0;
        var $author=null;
        var $category=null;
        var $image="image/";
        var $status="null";
        function __construct(){

        }
        function getListBookNew(){
            $db=new connect();
            $select =" SELECT * FROM book WHERE book.is_deleted!='true' ORDER by id DESC limit 4 ";
            $result=$db->getList($select);
            return $result;
        }
        function getListAllBook(){
            $db=new connect();
            $select =" SELECT * FROM book WHERE book.is_deleted!='true' ORDER by id DESC   ";
            $result=$db->getList($select);
            return $result;
        }
        function getDetailBookById($id){
            $db =new connect();
            $select="SELECT * FROM book WHERE id=$id ";
            // echo "$select";
            $result= $db->getInstance($select);
            return $result;
        }
        function searchBook($name){
            $db=new connect();
            $select =" SELECT * FROM book WHERE book.is_deleted!='true' and name LIKE '%$name%' ORDER by id DESC";
            $result=$db->getList($select);
            return $result;
        }
        
    }
?>