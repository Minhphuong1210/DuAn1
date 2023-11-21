<?php
function insert_cart($name,$img,$price,$id_cart,$quanlity,$total){
    $sql="INSERT INTO `products` (`name`, `img`, `price`) VALUES ('{$name}', '{$img}', '{$price}');";
    $sql.=' SET @Last_id_sp = LAST_INSERT_ID();';
    $sql.=" INSERT INTO `car_detail` (`id_cart`, `id_pro`, `quanlity`, `total`, `price`) VALUES ('$id_cart', '@last_id_sp', '$quanlity', '$total', '$price')";
    pdo_execute($sql);
    return;
}

?>