<div class="container ">
      <div class="row p-5">
        <div class="col-md-6 mt-4">
          <div class="title-dn">
            <h4><strong>TẠO TÀI KHOẢN</strong></h4>
            <b>Hãy đăng ký ngay để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</b>
          </div>
          <div class="form-dn">
              <form action="index.php?act=dangky" method="POST">
                    <div class="dong">
                        <label>Tên đăng nhập:</label><br>
                        <input type="text" name="user" class="email-dn">
                    </div>

                    <div class="dong">
                        <label>Số điện thoại:</label><br>
                        <input type="text" name="sdt" class="email-dn">
                    </div>

                    <div class="dong">
                        <label>Email:</label><br>
                        <input type="email" name="email" class="email-dn">
                    </div>

                    <div class="dong">
                        <label>Mật khẩu:</label><br>
                        <input type="password" name="pass" class="email-dn">
                    </div>
                   
                    <div class="dong">
                        <input type="submit" name="dangky" value="ĐĂNG KÝ" class="submit">
                    </div>
                    <div class="dong">
                        <a href="index.php?act=dangnhap"><input type="button" value="ĐĂNG NHẬP" class="dangNhap"></a>
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