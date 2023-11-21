<div class="container ">
  <div class="row rowct p-5 ">
    <?php
    foreach ($listmotsp as $sp) {
      extract($sp);
 
      $linksp = "index.php?act=addcart&idsp=" . $id;
      ?>
    
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
          <select name="" id="">
            <option value="">--chọn màu sắc--</option>
            <?php
          $listColor = color();
          foreach ($listColor as $color) {
            ?>
            <option value="<?php echo $color['id']?>"><?php echo $color['name']?></option>
            <?php
          }
          ?>
          </select>
          
          <!-- kích thưoc -->
          <h5 class="card-title">Kích cỡ:</h5>
          <select name="id_size" id="">
            <option value="">--chọn kích thước--</option>
            <?php
          $listSize = size();
          foreach ($listSize as $size) {
            ?>
            <option value="<?php echo $size['id']?>"><?php echo $size['name']?></option>
            <?php
          }
          ?>
          </select> 
  <div class="themGioHang">
          <input type="submit" value="THÊM VÀO GIỎ HÀNG" name="addtocart">
         
          
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