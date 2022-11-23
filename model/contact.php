<?php
    function loadall_contact() {
        $sql = "select * from contact order by id desc";
        $listcontact = pdo_query($sql);
        return $listcontact;
    }
?>