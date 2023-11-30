<?php
function thongke()
{
    $sql = "SELECT p.id, p.name, SUM(DISTINCT pb.quality) AS 'tongsoluong', COUNT(b.id) AS 'soluongban',p.price
    FROM products p
    JOIN product_detail pb ON pb.id_pro = p.id
    LEFT JOIN bill b ON b.id = p.id
    GROUP BY p.id, p.name;
    ";
    $thongke=pdo_query($sql);
    // var_dump($thongke);
    return $thongke;

}



?>