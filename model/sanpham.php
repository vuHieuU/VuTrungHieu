<?php

   function loadall_sp(){
    $sql = "select * from products";
   $listsp = pdo_query($sql);
   return $listsp;
   }

   function loadsp_home(){
   $sql="select * from products inner join category on products.cate_id=category.id_cate where 1 order by name desc limit 0,8";
   $listsp = pdo_query($sql);
   return $listsp;
   }

   function insert_sanpham($name,$price,$hinh,$weight,$mota,$soluong,$id_dm){
      $sql = "insert into products(name,price,image,weight,content,amount,cate_id) values('$name','$price','$hinh','$weight','$mota','$soluong','$id_dm')";
      pdo_execute($sql);
   }

   function loadAll_sanpham($kyw="", $cate_id=0) {
      $sql = "select * from sanpham where 1"; 
      if($kyw!=""){
          $sql.=" and name like '%".$kyw."%'";
      }
      if($cate_id>0){
          $sql.=" and cate_id ='".$cate_id."'";
      }
      $sql.=" order by id asc";
      $listsanpham = pdo_query($sql);
      return $listsanpham;
  }

   function loadAll_sanpham_home() {
      $sql = "select * from products where 1 order by id desc limit 0,9"; 
      $listsanpham = pdo_query($sql);
      return $listsanpham;
   }


   function load_ten_dm($cate_id) {
      if($cate_id > 0){
      $sql = "select * from category where id=".$cate_id;
      $dm = pdo_query_one($sql);
      extract($dm);
      return $name;
   }else{
      return "";
   }
   }

   function loadone_sp($id){
      $sql = "select * from products where id=".$id;
      $listsp = pdo_query_one($sql);
   return $listsp;
   }
   function update_sp($id,$name,$price,$hinh,$weight,$mota,$soluong,$id_dm){
      if($hinh!="")
         $sql="update products set name='".$name."', price='".$price."',image='".$hinh."',weight='".$weight."', content='".$mota."',amount='".$soluong."',cate_id='".$id_dm."' where id=".$id;
      else
      $sql="update products set name='".$name."', price='".$price."',weight='".$weight."', content='".$mota."',amount='".$soluong."',cate_id='".$id_dm."' where id=".$id;
      pdo_execute($sql);
   }
   function delete_sanpham($id){
      $sql = "delete from products where id=" .$id;
      pdo_execute($sql);
   }
