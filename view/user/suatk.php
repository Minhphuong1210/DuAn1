<div class="container ">
      <div class="row p-5">
        <div class="col-md-6 mt-4">
          <div class="title-dn">
            <h4><strong>CẬP NHẬT TÀI KHOẢN</strong></h4>
            <!-- <b>Hãy đăng ký ngay để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</b> -->
          </div>
          <div class="form-dn">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
              <form action="index.php?act=suatk" method="POST">
                    <div class="dong">
                        <label>Tên đăng nhập:</label><br>
                        <input type="text" name="user" value="<?=$name?>" class="email-dn">
                    </div>

                    <div class="dong">
                        <label>Số điện thoại:</label><br>
                        <input type="text" name="sdt" value="<?=$phone?>" class="email-dn">
                    </div>

                    <div class="dong">
                        <label>Email:</label><br>
                        <input type="email" name="email" value="<?=$email?>" class="email-dn">
                    </div>

                    <div class="dong">
                        <label>Mật khẩu:</label><br>
                        <input type="password" name="pass" value="<?=$pass?>" class="email-dn">
                    </div>
                   
                    <div class="dong">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT" class="submit">
                    </div>
                    <div class="dong">
                        <a href="index.php?act=dangnhap"><input type="button" value="QUAY LẠI" class="dangNhap"></a>
                    </div>  
              </form>
                    <?php
                        if(isset($thongbao) && ($thongbao)!=""){
                            echo $thongbao;
                        }
                    ?>
          </div>
        </div>
        <div class="col-md-6">
          <img src="./img/anhDN.webp" class="w-100" alt="">
        </div>
      </div>
    </div>