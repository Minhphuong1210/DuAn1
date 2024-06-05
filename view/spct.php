<div class="container ">
  <div class="">
    <?php
    foreach ($listmotsp as $sp) {
      extract($sp);
      $linksp = "index.php?act=addcart&idsp=" . $id;
      ?>
      <form action="index.php?act=addcart" method="post" onsubmit="addToCart(<?php echo $id ?>)" class="row rowct p-5 ">
      <div class="col-md-5">
        <img src="./upload/<?php echo $sp['img'] ?>" class="w-100" alt="">
      </div>
      <div class="col-md-5">
        <div class="infor">
          <div class="title-ct">
            <h3><?php echo $sp['name'] ?></h3>
            <p><i class="fa-regular fa-heart"></i></p>
          </div>
          <div class="price">
            <b> Giá :<?php echo $sp['price'] ?></b>
          </div>
          <!-- màu sắc -->
          <h5 class="card-title">Màu sắc: <span id="color"></span></h5>
          <select name="id_color" id="">
            <?php foreach($list_color as $color):?>
            <option value="<?php echo $color['id'] ?>"><?php echo $color['mau'] ?></option>
            <?php  endforeach?>
          </select>
          </select>
          <!-- số lượng -->
          <h5 class="card-title">Số lượng:</h5>
          <input type="number" name="soluong" id="soluong<?php echo $id ?>" value="1">
          <!-- kích thước -->
          <h5 class="card-title">Kích cỡ: <span id="size"></span></h5>
          <select name="id_size" id="">
          <?php foreach($list_size as $size):?>
            <option value="<?php echo $size['id'] ?>"><?php echo $size['size'] ?></option>
            <?php  endforeach?>
          </select>
          
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="img" value="<?php echo $img ?>">
            <input type="hidden" name="name" value="<?php echo $name ?>">
            <input type="hidden" name="price" value="<?php echo $price ?>">
            <input type="hidden" name="soluong" id="inputSoluong<?php echo $id ?>">
            <div class="themGioHang">
              <input type="submit" value="THÊM VÀO GIỎ HÀNG" name="addtocart">
            </div>
          
          <div class="mota">
            <h5 class="title-mota">Mô tả: </h5>
            <div class="mota-sp">
              <?php echo $sp['desc'] ?>
            </div>
            
          </div>
          
        </div>
      </div>
      </form>
      <div class="title-1" style="text-align: center;">
  <h3 class="title-mota">SẢN PHẨM CÙNG LOẠI</h3>
</div>
<div class="container mt-4">
  <div class="row">
    <?php
    $i = 0;
    foreach ($sp_cung_loai as $spcl) {
      extract($spcl);
      $linksp = "index.php?act=spct&idsp=" . $id;
      $anh = $img_path . $img;
      echo '<div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                            <div class="card">
                            <img  class="card-img-top" src="' . $anh . '" alt="">
                            <div class="card-body">
                                <h4 class="card-title">' . $name . '</h4>
                                <p class="card-text">' . $price . '</p>
                                <a href="' . $linksp . '" class="btn btn-primary"> Xem</a>
                            </div>
                            </div>
                            
                      

                        </div>';
    }
    ?>
  </div>
</div>
    <?php
    }
    ?>
  </div>
</div>

<script>
  function addToCart(id) {
    var soluong = document.getElementById('soluong' + id).value;
    document.getElementById('inputSoluong' + id).value = soluong;
  }
</script>
