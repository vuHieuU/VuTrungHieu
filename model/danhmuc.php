<?php
   function loadall_dm(){
    $sql = "select * from category order by id_cate";
    $listdm = pdo_query($sql);
    return $listdm; 
   }
   function insert_danhmuc($tenloai){
      $sql = "insert into category(name_cate) values ('$tenloai')";
      pdo_execute($sql);
   }
   function loadone_dm($id){
      $sql = "select * from category where id_cate =".$id;
      $dm=pdo_query_one($sql) ;
      return $dm;
   }
   function update_danhmuc($id,$name){
      $sql = "update category set name_cate='".$name."' where id_cate=". $id;
      pdo_execute($sql);
}
function delete_danhmuc($id){
   $sql = "delete from category where id_cate=" .$id;
   pdo_execute($sql);
}
?>