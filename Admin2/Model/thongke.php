<?php
    class thongke{
        function __construct(){

        }
        function getAllListBookBorrowed(){
            $db = new connect();
            $sql="SELECT b.*,eb.date_by,eb.date_back,eb.total,eb.id as eb_book_id,eb.current_date_back,e.name as username,e.gender,e.phone FROM book b 
            INNER JOIN employee_book eb on eb.book_id =b.id 
            INNER JOIN employee e on e.id = eb.employee_id WHERE eb.status='borrowed'";
           $result= $db->getList($sql);
            return $result;
        }
        function getAllListBookBack(){
            $db = new connect();
            $sql="SELECT b.*,eb.date_by,eb.date_back,eb.total,eb.id as eb_book_id,eb.current_date_back,e.name as username,e.gender,e.phone FROM book b 
            INNER JOIN employee_book eb on eb.book_id =b.id 
            INNER JOIN employee e on e.id = eb.employee_id WHERE eb.status='back'";
           $result= $db->getList($sql);
            return $result;
        }
        function getReportMonth(){
            $db=new conncet();
        
        }
    }
?>