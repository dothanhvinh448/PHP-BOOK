<?php
    class order{
        var $id=0;
        var $employee_id=0;
        var $book_id=0;
        var $date_by=null;
        var $date_back=null;
        var $total=0;
        var $tatus=null;
        var $current_date_back=null;
        function __construct(){

        }
        function createEmployeeBook($employee_id,$book_id,$date_back,$total){
       
            $db= new connect();
            $date=new DateTime("now");// lấy ngày và có giờ
            $date_by=$date->format("Y-m-d");
            $status="borrowed";
            $sql="insert into employee_book(id, employee_id, book_id, date_by, date_back,total,status,current_date_back) 
            VALUES (NULL,$employee_id,$book_id,'$date_by','$date_back',$total,'$status',NULL)";
            $stm=$db->exec($sql);
        }
        function getListBookOrder($id){
            $db=new connect();
            $sql= "SELECT b.*,eb.date_by,eb.date_back,eb.total,eb.id as eb_book_id FROM book b 
                    INNER JOIN employee_book eb on eb.book_id =b.id 
                    INNER JOIN employee e on e.id = eb.employee_id WHERE e.id=$id and eb.status='borrowed'";
            $result=$db->getList($sql);
            return $result;
        }
        function BookBack($id){
            $db=new connect();
            $date=new DateTime("now");// lấy ngày và có giờ
            $date=$date->format("Y-m-d");
            $sql ="UPDATE employee_book set status='back',current_date_back='$date' where id=$id";
            $stm=$db->exec($sql);
            echo $sql;
        }
        function getListBookBack($id){
            $db=new connect();
            $sql= "SELECT b.*,eb.date_by,eb.date_back,eb.total,eb.id as eb_book_id,eb.current_date_back FROM book b 
            INNER JOIN employee_book eb on eb.book_id =b.id 
            INNER JOIN employee e on e.id = eb.employee_id WHERE e.id=$id and eb.status='back'";
            $result=$db->getList($sql);
            return $result;
        }
    }
?>