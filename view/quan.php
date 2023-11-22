

<div class="container-fluid ">

        <div class="row mt-5">
<!-- boxLeft -->
            <div class="col-md-2 ">
              <div class="navbar">
                  <div class="rowNav">
                    <ul>
                      <li><a href=""><b>HÀNG MỚI VỀ</b></a></li>
                      <li><a href=""><b>BỘ SƯU TẬP </b></a></li>
                      <li><a href="">TIMELESS COLLECTION</a></li>
                      <li><a href="">BEST BẠC HÀ</a></li>
                      <li><a href="">RENU</a></li>
                    </ul>
                  </div> 
              </div>
            </div>
            <!-- boxRight -->
            <?php
                $listsanpham = loadall_sanphamquan();
                $i = 0;
                foreach ($listsanpham as $sanpham) {

                    extract($sanpham);
                    // var_dump($sanpham);
                    $linksp = "index.php?act=spct&idsp=" . $id;
                    $anh = $img_path . $img;
                    echo '
                    <div class="col-md-10 mt-3  ">
                    <div class="row pb-3">
                        <div class="col-sm-6 col-xl-4">
                        <div class="card">
                            <img  class="card-img-top" src="'.$anh.'" alt="">nhaaaa
                            <div class="card-body">
                            <h4 class="card-title">'.$name.'</h4>
                            <p class="card-text">'.$price.'</p>
                            <a href="' . $linksp . '" class="btn btn-primary">Xem</a>
                            </div>
                        </div>
                        </div>
                    </div>             
                    </div>'
                    ;
                }
            ?>
            <!-- <div class="col-md-10 mt-3  ">
              <div class="row pb-3">
                <div class="col-sm-6 col-xl-4">
                  <div class="card">
                    <img  class="card-img-top" src="./img/sp2.webp" alt="">
                    <div class="card-body">
                      <h4 class="card-title">ÁO POLO-APV233175</h4>
                      <p class="card-text">1.300.000đ</p>
                      <a href="spchitiet.html" class="btn btn-primary">Xem</a>
                    </div>
                  </div>
                </div>
              </div>             
            </div> -->

        </div>
    </div>
