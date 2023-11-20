<div class="container mt-5 mb-5">
      <div id="carouselExampleIndicators " class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/bn1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/bn2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/bn3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="row mt-5 mb-4">
        <div class="col-md-4">
          <img src="./img/h1.webp" width="100%" alt="">
        </div>
        <div class="col-md-4">
          <img src="./img/h2.webp" width="100%" alt="">
        </div>
        <div class="col-md-4">
          <img src="./img/h3.jpg" width="100%" alt="">
        </div>
      </div>
            <!--slshow2  -->
      <div id="carouselExampleIndicators " class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/bnp1.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/bnp2.webp" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- end banner -->

    <!-- gth sp -->
    <div class="title-1" style="text-align: center;">
      <h3>HÀNG MỚI VỀ</h3>
    </div>
    <div class="container mt-4">
      <div class="row">
        <?php
            $i=0;
            foreach ($listspct as $view){
                extract($view);
                // var_dump($view);
                $linksp = "index.php?act=spct&idsp=" . $id;
                $anh=$img_path.$img;
                echo '<div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                            <div class="card">
                            <img  class="card-img-top" src="'.$anh.'" alt="">
                            <div class="card-body">
                                <h4 class="card-title">'.$name.'</h4>
                                <p class="card-text">'.$price.'</p>
                                <a href="'.$linksp.'" class="btn btn-primary"> Xem</a>
                            </div>
                            </div>
                        </div>';
            }
        ?>
      </div>
    </div>
   
    <!--  form-->
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-md-8">
          <img src="./img/bn.webp" width="100%" alt="">
        </div>
        <div class="col-md-4  text-black box">
            <div class="content">
              <h3>ĐĂNG KÝ NHẬN BẢN TIN</h3>
              <p>Đừng bỏ lỡ hàng ngàn sản phẩm với chương trình siêu hấp dẫn</p>
              <input class="email" type="text" placeholder="Nhập email của bạn"><br/>
              <input class="submit" type="submit" value="ĐĂNG KÝ">
            </div>
        </div>
      </div>
    </div>