<div class="container ">
      <div class="row p-5">
        <div class="col-md-6 mt-4">
          <div class="title-dn">
            <h4><strong>QUÊN MẬT KHẨU</strong></h4>
            <!-- <b>Hãy đăng ký ngay để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</b> -->
          </div>
          <div class="form-dn">
              <form action="index.php?act=quenmk" method="POST">
                    <div class="dong">
                        <label>Email:</label><br>
                        <input type="email" name="email" class="email-dn" required>
                    </div>
                    <?php
                        if(isset($thongbao) && ($thongbao)!=""){
                            echo '<div class="alert alert-primary">
                                        <strong>'.$thongbao.'!</strong> 
                                    </div>';
                          
                        }
                    ?>
                    <div class="dong">
                        <input type="submit" name="quenmk" value="QUÊN MẬT KHẨU" class="submit">
                    </div>
                    <div class="dong">
                        <a href="index.php?act=dangnhap"><input type="button" value="QUAY LẠI" class="dangNhap"></a>
                    </div>  
              </form>
                    
          </div>
        </div>
        <div class="col-md-6">
          <img src="./img/anhDN.webp" class="w-100" alt="">
        </div>
      </div>
    </div>