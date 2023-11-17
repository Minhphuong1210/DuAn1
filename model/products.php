<?php
    function insert_sp($tensp,$filename,$giasp,$mota,$iddm){
        $sql="insert into products(name,img,price,desc,id_cat) values('$tensp','$giasp','$filename','$mota','$iddm')";
        pdo_execute($sql);
        return;     
    }
    function load_all_sp(){
        $sql="SELECT * FROM products ORDER BY id DESC";
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function xoasp($id){
        $sql="DELETE FROM products WHERE `products`.`id` = $id";
        pdo_execute($sql);
        return;
    }
    function load_one_sp($id){
        $sql="SELECT * FROM products WHERE id=".$id;
        $suasp=pdo_query_one($sql);
        return $suasp;
    }

    function update_sp($id,$tenloai){
        $sql="UPDATE products SET NAME='".$tenloai."' WHERE id=".$id;
        pdo_execute($sql);
    }
?>