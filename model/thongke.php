<?php
$sql="SELECT p.id, p.name, COUNT(DISTINCT pb.quality) AS 'tongsoluong', COUNT(b.id) AS 'soluongban'
FROM products p
JOIN product_detail pb ON pb.id_pro = p.id
LEFT JOIN bill b ON b.id = p.id
GROUP BY p.id, p.name;
";



?>