<?php
    function loadall_contact() {
        $sql = "select * from contact order by id desc";
        $listcontact = pdo_query($sql);
        return $listcontact;
    }

    function delete_contact($id) {
        $sql = "delete from contact where id=".$id;
        pdo_execute($sql);
    }

    function add_contact($user,$email,$title,$content) {
        $sql = "insert into contact(user,email,title,content) values ('$user','$email','$title','$content')";
        pdo_execute($sql);
    }

    function loadone_contact($id) {
        $sql = "select * from contact where id=".$id;
        $contact = pdo_query_one($sql);
        return $contact;
    }

    function update_contact($id,$user,$email,$title,$content) {
        $sql = "update contact set user='".$user."' , email='".$email."',title='".$title."',content='".$content."' where id=".$id;
        pdo_execute($sql);
    }
    function checkct($user,$email){
        $sql = "select * from user where user='".$user."' and email = '".$email."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
?>