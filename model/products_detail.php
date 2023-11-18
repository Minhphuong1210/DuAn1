<?php
// thêm
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
//Hiện tất
function color(){
    $sql="select *from `color`";
    $listcolor=pdo_query($sql);
    return $listcolor;
}
function size(){
    $sql="select *from `size`";
    $listsize=pdo_query($sql);
    return $listsize;
}
function sp(){
    $sql="select *from `products`";
    $listsp=pdo_query($sql);
    return $listsp;
}
//xóa
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
function xoasp($id){
    $sql="DELETE FROM products WHERE `products`.`id` = $id";
    pdo_execute($sql);
    return ;
}
// sua sp
function one_color($id){

    $sql="select *from `color` where id=$id";
    $listmotcolor=pdo_query_one($sql);
    // var_dump($listmotsp);
return $listmotcolor;
}

function updateColor($name,$id){
    $sql="UPDATE color SET NAME='".$name."' WHERE id=".$id;
    pdo_execute($sql);

}
function one_size($id){
    $sql="select *from `size` where id=$id";
    $listmotsize=pdo_query_one($sql);
    // var_dump($listmotsp);
return $listmotsize;
}
function updateSize($name,$id){
    $sql="UPDATE size SET NAME='".$name."' WHERE id=".$id;
    pdo_execute($sql);

}
function one_sp($id){
    $sql="select *from `products` wher id =$id";
    $listmotsp=pdo_query($sql);
    return $listmotsp;
}
function updatesp($name,$img,$price,$desc,$id_cat,$id){
    
    $sql="UPDATE `products` SET `name` = '$name', `img` = '$img', `price` = '$price', `desc` = '$desc', `id_cat` = '$id_cat' WHERE `products`.`id` = $id";
    pdo_execute($sql);
}

?>