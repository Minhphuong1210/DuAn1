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
          <h5 class="card-title">Màu sắc: <span id="color"></span></h5>
          <select name="id_color" id="">
            <!-- <option  value="0">--chọn---</option> -->
            <option value="<?php echo $id?>"><?php echo $mau?></option>
          </select>
           
          </select>
         

          <!-- kích thưoc -->
          <h5 class="card-title">Kích cỡ: <span id="size"></span></h5>
          <select name="id_size" id="">
            <!-- <option value="">--chọn---</option> -->
            <option value="<?php echo $id?>"><?php echo $size?></option>
          </select>
          <form action="index.php?act=addcart" method="post">
                            <input type="hidden" name="id" value="<?php echo $id?>">
                            <input type="hidden" name="img" value="<?php echo $img?>">
                            <input type="hidden" name="name" value="<?php echo $name?>">
                            <input type="hidden" name="price" value="<?php echo $price?>">
                            <input type="hidden" name="mau" value="<?php echo $mau?>">
                            <input type="hidden" name="size" value="<?php echo $size?>">        
                            <div class="themGioHang">
                              <input type="submit" value="THÊM VÀO GIỎ HÀNG" name="addtocart">                                   
                            </div>                                  
                          </form>


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


<script>
             function myJavaScriptFunction(color){
              console.log('string');
              document.getElementById("color").innerHTML=color;
            }

            
            function Function(size){
              console.log('string');
              document.getElementById("size").innerHTML=size;
            }
          </script>