<?php
function insert_color($name){
    $sql="INSERT INTO `color` (`name`) VALUES ('$name')";
    pdo_execute($sql);
    return;     
}

function insert_Size($name){
    $sql="INSERT INTO `size` (`name`) VALUES ('$name')";
    pdo_execute($sql);
    return;     
}
function insert_sp($name,$img,$price,$desc  ,$id_cat){
    $sql="INSERT INTO `products` (`name`, `img`, `price`, `desc`, `id_cat`) VALUES ('{$name}', '{$img}', '{$price}', '{$desc}', '{$id_cat}')";
    pdo_execute($sql);
    return;    
}
function color(){
    $sql="select *from `color`";
    $listcolor=pdo_query($sql);
    return $listcolor;
}
function size(){
    $sql="select *from `color`";
    $listsize=pdo_query($sql);
    return $listsize;
}
function sp(){
    $sql="select *from `products`";
    $listsp=pdo_query($sql);
    return $listsp;
}

function xoacolor($id){
    $sql="DELETE FROM color WHERE `color`.`id` = $id";
    pdo_execute($sql);
    return ;
}

function xoaSize($id){
    $sql="DELETE FROM size WHERE `size`.`id` = $id";
    pdo_execute($sql);
    return ;
}
?>