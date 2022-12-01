<?php
    function loadblog_home(){
        $sql = "select * from blog order by id_blog desc limit 0,3";
        $listblog = pdo_query($sql);
        return $listblog;
    }
    function load_blog(){
        $sql = "select * from blog";
        $listblog = pdo_query($sql);
        return $listblog;
    }
    function  insert_blog($title, $content, $img){
        $sql = "insert into blog(title,content,img) values('$title','$content','$img')";
        pdo_execute($sql);
     }


?>