<?php
function thongke()
{
    $sql = "SELECT p.id, p.name, SUM(DISTINCT pb.quality) AS 'tongsoluong', COUNT(b.id) AS 'soluongban',p.price,b.ngaydathang,sum(DISTINCT b.id) as 'tongsoluongban'
    FROM products p
    JOIN product_detail pb ON pb.id_pro = p.id
    LEFT JOIN bill b ON b.id = p.id
    GROUP BY ngaydathang;
    ";
    // var_dump($sql);
    // $sql="SELECT p.id, p.name, SUM(DISTINCT pb.quality) AS 'tongsoluong', COUNT(b.id) AS 'soluongban', p.price, b.ngaydathang, SUM(DISTINCT b.id) as 'tongsoluongban' FROM products p JOIN product_detail pb ON pb.id_pro = p.id RIGHT JOIN bill b ON b.id = p.id GROUP BY ngaydathang";

    $thongke=pdo_query($sql);
    // var_dump($thongke);
    return $thongke;

}
function load_thongke(){
    $sql="SELECT p.id, p.name, SUM(DISTINCT pb.quality) AS 'tongsoluong', COUNT(b.id) AS 'soluongban',sum(b.total) as tongtien,b.ngaydathang,sum(DISTINCT b.id) as 'tongsoluongban'
    FROM products p
    JOIN product_detail pb ON pb.id_pro = p.id
    RIGHT JOIN bill b ON b.id = p.id
    GROUP BY ngaydathang";
     $load_thongke=pdo_query($sql);
     // var_dump($thongke);
     return $load_thongke;
}

function load_tongsanpham(){
    $sql=" SELECT *, SUM(quality) AS tongsanpham
    FROM product_detail";
      $load_tongsanpham=pdo_query($sql);
      // var_dump($thongke);
      return $load_tongsanpham;
}
function load_tongsanphamdaban(){
    $sql="SELECT *, SUM(quality) AS tongsanpham
    FROM cart";
      $load_tongsanphamdaban=pdo_query($sql);
      // var_dump($thongke);
      return $load_tongsanphamdaban;
}

function load_tongtien(){
    $sql=" SELECT *, SUM(total) AS tongtien
    FROM bill;";
    $load_tongtien=pdo_query($sql);
    return $load_tongtien;
}
?>