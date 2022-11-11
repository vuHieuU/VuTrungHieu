<?php
    function loadall_tk(){
        $sql = "select * from user";
        $listtk = pdo_query($sql);
        return $listtk;
    }   
    function insert_tk($user,$pass,$email,$status,$role){
        $sql = "insert into user(name,password,email,status,role) values('$user','$pass','$email','$status','$role')";
        pdo_execute($sql);
    }
    function delete_tk($id){
        $sql = "delete from user where id=".$id;
        pdo_execute($sql);
    }
    function loadone_tk($id){
        $sql = "select * from user where id=".$id;
        $tk = pdo_query_one($sql);
        return $tk;
    }   
    function update_tk($id,$user,$pass,$email,$status,$role){
        $sql = "update user set name='".$user."',password='".$pass."',email='".$email."',status='".$status."',role='".$role."' where id=".$id;
        pdo_execute($sql);
    }
?>