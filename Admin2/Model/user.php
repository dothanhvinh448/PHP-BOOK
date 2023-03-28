<?php
    class user{
        var $id=0;
        var $name=null;
        var $phone=null;
        var $age=0;
        var $address=null;
        var $is_deleted=null;
        var $user_name=null;
        var $password=null;
        function __construct(){

        }
        function getListUser(){
            $db=new connect();
            $sql = "select * from employee where is_deleted!='true'";
            $result = $db->getList($sql);
            return $result;
        }
        function deleteUser($id){
            $db= new connect();
            $sql= "update employee set is_deleted='true' where id=$id";
            $db->exec($sql);

        }
        function getUserId($id){
            $db = new connect();
            $sql= "select * from employee where id = $id";
           $result= $db->getInstance($sql);
           return $result;
        }
        function updateUser($id,$name,$age,$gender,$user_name,$phone,$email,$password,$address){
            $db= new connect();
            $sql="update employee set name='$name',age='$age',gender='$gender',user_name='$user_name',phone='$phone',password='$password',address='$address' where id=$id";
            echo $sql;
            $db->exec($sql);

        }
    }
?>