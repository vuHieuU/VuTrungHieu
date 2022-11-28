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

    function add_contact($name,$email,$title,$note) {
        $sql = "insert into contact(name,email,title,note) values ('$name','$email','$title','$note')";
        pdo_execute($sql);
    }

    function loadone_contact($id) {
        $sql = "select * from contact where id=".$id;
        $contact = pdo_query_one($sql);
        return $contact;
    }

    function update_contact($id,$name,$email,$title,$note) {
        $sql = "update contact set name='".$name."' , email='".$email."',title='".$title."',note='".$note."' where id=".$id;
        pdo_execute($sql);

    }
?>