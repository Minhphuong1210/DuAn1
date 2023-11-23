
<div class="container-fluid ">

<div class="row mt-5">
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
            

            <div class="col-md-10 mt-3  ">
                        <div class="row pb-3">
            <?php
             $listsanpham=loadall_sanpham();
    $i = 0;
    foreach ($listsanpham as $sanpham) {
     
      extract($sanpham);
      // var_dump($sanpham);
      $linksp = "index.php?act=spct&idsp=" . $id;
      $anh = $img_path . $img;         
             echo'        
                          <div class="col-sm-6 col-xl-4">
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
               
        </div>
    </div>

    </div>
    </div>
