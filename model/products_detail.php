<?php
function load_all_sp(){
   $sql="SELECT  p.name,p_d.price,p.img,p.desc,c.mau,s.so,p_d.quantity FROM products_detail p_d INNER JOIN products p on P_d.id_pro =p.id
   INNER JOIN color c on p_d.id_color=c.id
   INNER JOIN size s on p_d.id_size = s.id";
 pdo_query($sql);
    return;     
}

function insert_color($mau){
    $sql="INSERT INTO `color` (`mau`) VALUES ('$mau')";
    pdo_execute($sql);
    return;     
}

?>