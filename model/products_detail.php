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
function insert_sp($name,$img,$price,$desc,$id_cat,$quality,$id_size,$id_color){
    $sql="INSERT INTO `products` (`name`, `img`, `price`, `desc`, `id_cat`) VALUES ('{$name}', '{$img}', '{$price}', '{$desc}', '{$id_cat}');";
    $sql.=' SET @Last_id_sp = LAST_INSERT_ID();';
    $sql.=" INSERT INTO `product_detail` (`quality`, `price`,`id_pro`,`id_size`,`id_color`) VALUES ('{$quality}','{$price}',@Last_id_sp,'{$id_size}','{$id_color}')";
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
function spct(){   
    $sql="select p.id, p.name,p.img,p.desc,p.price,p.id_cat,pd.id_size,pd.id_color,pd.id_pro,pd.quality FROM product_detail pd INNER JOIN products p on pd.id_pro = p.id";
    $listspct=pdo_query($sql);
    return $listspct; 
}
function sp(){
    $sql= "select *from `products`";
    pdo_query($sql);
    return;
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
    $sql="select p.id, p.name,p.img,p.desc,p.price,p.id_cat,pd.id_size,pd.id_color,pd.id_pro,pd.quality FROM product_detail pd INNER JOIN products p on pd.id_pro = p.id WHERE p.id=$id";
    $listmotsp=pdo_query($sql);
    // var_dump($listmotsp);
    return $listmotsp;
    
}
function updatesp($name,$img,$price,$desc,$id_cat,$id){
    $sql ="UPDATE `products` SET `name` = '$name', `img` = '$img', `price` = '$price', `desc` = '$desc', `id_cat` = '$id_cat' WHERE `products`.`id` = $id";
    pdo_execute($sql);
    return ;
}

function updatespct($quality,$price,$id_pro,$id_size,$id_color){
$sql="UPDATE `product_detail` SET `quality` = '$quality', `price` = '$price', `id_pro` = '$id_pro', `id_size` = '$id_size', `id_color` = '$id_color' WHERE `product_detail`.`id_pro` =$id_pro;";
pdo_execute($sql);
return ;
}

//sp bên trang view
function loadAll_sp_view(){
    $sql="SELECT * FROM products WHERE 1 ORDER BY id DESC LIMIT 0,8";
    $dsspView=pdo_query($sql);
    return $dsspView;
}
?>


