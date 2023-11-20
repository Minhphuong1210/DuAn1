<div class="container ">
  <div class="row rowct p-5 ">
    <?php
    foreach ($listmotsp as $sp) {
      extract($sp);
      // $anh = $img_path . $img;
      // echo "<pre>";
      // print_r($sp);
      // echo"</pre>";
      ?>
      <!-- ?code -->
      <div class="col-md-5">
        <img src="./upload/<?php echo $sp['img'] ?>" class="w-100" alt="">

      </div>
      <div class="col-md-5">
        <div class="infor">
          <div class="title-ct">
            <h3>
              <?php echo $sp['name'] ?>
            </h3>
            <p><i class="fa-regular fa-heart"></i></p>
          </div>
          <div class="price">
            <b> Giá :
              <?php echo $sp['price'] ?>
            </b>
          </div>
          <!-- màu sắc -->
          <h5 class="card-title">Màu sắc: <span id="size"></span></h5>
          <?php
          $listColor = color();
          foreach ($listColor as $color) {
            ?>
            <button value="<?php echo $color['id'] ?>">
              <?php echo $color['name'] ?>
            </button>
            <?php
          }
          ?>
          <!-- kích thưoc -->
          <h5 class="card-title">Kích cỡ:</h5>
          <?php
          $listSize = size();
          foreach ($listSize as $size) {
            ?>
            <button class="size" value="" <?php echo $size['id'] ?>>
              <?php echo $size['name'] ?>
            </button>
            <?php
          }
          ?>

          <div class="themGioHang">
            <input type="submit" value="THÊM VÀO GIỎ HÀNG">
          </div>
          </form>

          <div class="mota">
            <h5 class="title-mota">Mô tả: </h5>

            <div class="mota-sp">
              <?php echo $sp['desc'] ?>
            </div>
          </div>
        </div>
      </div>

      <?php
    }
    ?>


  </div>
</div>