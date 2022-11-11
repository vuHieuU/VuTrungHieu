<?php
   function loadall_dm(){
    $sql = "select * from category";
    $listdm = pdo_query($sql);
    return $listdm; 
   }
   function insert_danhmuc($tenloai){
      $sql = "insert into category(name) values ('$tenloai')";
      pdo_execute($sql);
   }
   function loadone_dm($id){
      $sql = "select * from category where id =".$id;
      $dm=pdo_query_one($sql) ;
      return $dm;
   }
   function update_danhmuc($id,$name){
      $sql = "update category set name='".$name."' where id=". $id;
      pdo_execute($sql);
}
function delete_danhmuc($id){
   $sql = "delete from category where id=" .$id;
   pdo_execute($sql);
}
?>