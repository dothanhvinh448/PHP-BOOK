<?php
    class User{
        var $id=null;
        var $name=null;
        var $age=0;
        var $gender=null;
        var $is_deleted=null;
        var $userName=null;
        var $phone=null;
        var $email=null;
        var $password=null;
        var $address=null;
        function __construct(){
            
        }
        function insertUser($name,$age,$gender,$is_deleted,$userName,$phone,$email,$password,$address){
            try {
            $db=new connect();
            $sql= "insert INTO employee(id, name, age, gender, is_deleted, user_name, phone, email, password, address) VALUES 
            (NULL,'$name','$age','$gender','$is_deleted','$userName','$phone','$email','$password','$address')";
            $stm=$db->exec($sql);
              echo "thanh cong";
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        
        }
        function login($userName,$password){
            $db= new connect();
            $sql="select * from employee where user_name='$userName' and password='$password' and is_deleted != 'true'";
            $result=$db->getList($sql);
            // echo $sql;
            $set=$result->fetch();
            return $set;
          
        }
        //check trung user_name;
        function checkUserName($userName){
            $db= new connect();
            $sql="select user_name from employee where user_name='$userName'";
        
            $result=$db->getList($sql);
            $set=$result->fetch();
            return $set;
        }
        
    }
?>