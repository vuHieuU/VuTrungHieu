<?php
    function loadall_bl(){
        $sql = "select * from comment";
        $listbl = pdo_query($sql);
        return $listbl; 
       }
    function delete_bl($id){
    $sql = "delete from comment where id=".$id;
    pdo_execute($sql);
       }

?>