<?php
    function loadall_tk(){
        $sql = "select * from user";
        $listtk = pdo_query($sql);
        return $listtk;
    }   
    function insert_tk($user,$pass,$email,$address,$tel,$role){
        $sql = "insert into user(name,password,email,address,tel,role) values('$user','$pass','$email','$address','$tel','$role')";
        pdo_execute($sql);
    }
    function dangki_taikhoan($user,$pass,$email,$tel){
        $sql = "insert into user(name,password,email,tel) values('$user','$pass','$email','$tel')";
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
    function update_tk($id,$user,$pass,$email,$address,$tel,$role){
        $sql = "update user set name='".$user."',password='".$pass."',email='".$email."',address='".$address."',tel='".$tel."',role='".$role."' where id=".$id;
        pdo_execute($sql);
    }
    function update_tk1($id,$name,$password,$email,$hinh,$tel,$address,$role){
        if($hinh !=""){
        $sql = "update user set name='".$name."',password='".$password."',email='".$email."',image='".$hinh."',tel='".$tel."',address='".$address."',role='".$role."' where id=".$id;
        }else{
            $sql = "update user set name='".$name."',password='".$password."',email='".$email."',tel='".$tel."',address='".$address."',role='".$role."' where id=".$id;
        }
        pdo_execute($sql);
    }
    function check_user($name,$password){
        $sql="select * from user where name='".$name."' AND password='".$password."'";
      $sp=pdo_query_one($sql);
      return $sp;
    }
    function check_pass($user,$email){
        $sql = "select * from user where name='".$user."' and email ='".$email."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
?>