<?php 
if (!isset($_SESSION)) {
  session_start();
}
$count_products = count_products(2);
$product_in_page = 3; // số sản phẩm hiện thị trên trang
$total_page = ceil($count_products['COUNT(*)'] / $product_in_page); // số trang
if (isset($_GET['page'])) {
  $_SESSION['page'] = $_GET['page'];
  $start = (( $_SESSION['page'] - 1)* $product_in_page);
  var_dump($start);
  $listsanpham = loadall_sanpham($start,$product_in_page);
}
elseif (isset($_GET['previous_page']) && $_SESSION['page'] > 0) {
  $_SESSION['page'] -= 1;
  var_dump($_SESSION['page']);
   $start = (( $_SESSION['page'] )* $product_in_page);
  $listsanpham = loadall_sanpham($start,$product_in_page);
}elseif(isset($_GET['next_page']) && $_SESSION['page'] < $total_page){
  $_SESSION['page'] += 1;
  var_dump($_SESSION['page']);
   $start = (( $_SESSION['page'] )* $product_in_page);
  $listsanpham = loadall_sanpham($start,$product_in_page);
}else {
  $listsanpham = loadall_sanpham(0,$product_in_page);
}


?>
<div class="container-fluid ">

  <div class="row mt-5">
    <div class="col-md-2 ">
      <div class="navbar">
        <div class="rowNav">
          <ul>
            <li><a href="index.php"><b>HÀNG MỚI VỀ</b></a></li>
            <li><a href="index.php?act=ao">ÁO</a></li>
            <li><a href="index.php?act=quan">QUẦN</a></li>
            <li><a href="index.php?act=phukien">PHỤ KIỆN</a></li>
          </ul>
        </div>
      </div>
    </div>
              

    <div class="col-md-10 mt-3  ">
      <div class="row pb-3">
      <?php
        // $listsanpham=loadall_sanpham();
        $i = 0;
        foreach ($listsanpham as $sanpham) {
        
          extract($sanpham);
          // var_dump($sanpham);
          $linksp = "index.php?act=sanphamct&idsp=" . $id;
          $anh = $img_path . $img;         
                echo'        
                              <div class="col-sm-6 col-xl-4 mb-4">
                                <div class="card">
                                  <img  class="card-img-top" src="'.$anh.'" alt="">
                                  <div class="card-body">
                                    <h4 class="card-title">'.$name.'</h4>
                                    <p class="card-text">'.$price.'</p>
                                    <a href="'. $linksp .'" class="btn btn-primary">Xem</a>
                                  </div>
                                </div>
                              </div>';
        }
        ?>        
          <!-- </div>
          </div> -->
      </div>
      
    </div>
  </div>
</div>
<div class="next">
        <ul>
          <li><a href="?act=ao&previous_page"><i class="fa-solid fa-angle-left"></i></a></li>
          <?php for ($i=1; $i <= $total_page ; $i++): ?>
          <li><a href="?act=ao&page=<?= $i?>"><?= $i?></a></li>
            <?php endfor?>
          <li><a href="?act=ao&next_page"><i class="fa-solid fa-angle-right"></i></a></li>
        </ul>
      </div>  