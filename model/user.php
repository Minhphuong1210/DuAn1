<?php
//thêm tài khoản
    function insert_user($user,$sdt,$email,$pass){
        $sql="insert into users(name,phone,email,pass) values('$user','$sdt','$email','$pass')";
        pdo_execute($sql);
    }
//đăng nhập
    function checkuser($user,$pass){
        $sql="SELECT * FROM users WHERE name='".$user."' AND pass='".$pass."'";
        $checkuser=pdo_query_one($sql);
        return $checkuser;
    }
//sửa tk
    function update_user($id,$user,$sdt,$email,$pass){
        $sql="UPDATE `users` SET `name` = '".$user."', `phone` = '".$sdt."', `email` = '".$email."', `pass` = '".$pass."' WHERE `users`.`id` =".$id;
        pdo_execute($sql);
        echo $sql;
    }
//quên mk
    function checkemail($email){
        $sql="SELECT * FROM users WHERE email='".$email."'";
        $checktk=pdo_query_one($sql);
        return $checktk;
    }
    // admin
    function load_kh(){
        $sql="select * from `users`";
        return pdo_query($sql);
    }
    function xoatk($id){
        $sql="DELETE FROM users WHERE `users`.`id` = $id";
        return pdo_execute($sql);
    }
?>