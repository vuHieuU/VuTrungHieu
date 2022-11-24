<?php
    function insert_binhluan($content,$product_id,$user_id){
        $sql = "insert into comment(content,product_id,user_id) values ('$content','$product_id','$user_id')";
        pdo_execute($sql);
    }
    function load_bl($product_id){
        $sql = "select * from comment inner join user on comment.user_id=user.id where 1";
        if($product_id>0)
        $sql.=" and product_id='".$product_id."'";
        $sql.=" order by comment.id desc limit 0,10";
        $listbl=pdo_query($sql);
        return  $listbl;
       }
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