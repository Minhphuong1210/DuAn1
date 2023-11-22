<div class="container ">
  <div class="row p-5">
    <div class="col-md-6">
      <div class="title-dn">
        <h4>ĐĂNG NHẬP</h4>
        <b>Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</b>
      </div>
      <div class="form-dn">
        <?php
        if (isset($_SESSION["user"])) {
          extract($_SESSION["user"]);
          ?>

          <div class="dong">
            <h1>
              Chào mừng
              <?= $name ?>
            </h1>
          </div>

          <div class="dong">
            <!-- cập nhật tài khoản -->
            <div class="dong">
              <a href="index.php?act=suatk"><input type="button" value="Cập nhật tài khoản" class="dangNhap"></a>
            </div>
            <!-- Đăng nhập admin -->
            <?php
            if ($role == 1) {
              ?>
              <div class="dong">
                <a href="admin/index.php"><input type="button" value="Đăng nhập admin" class="dangNhap"></a>
              </div>
              <?php
            }
            ?>
            <!-- Thoát -->
            <div class="dong">
              <a href="index.php?act=thoat"><input  type="button" value="Thoát" class="dangNhap"></a>
            </div>
          </div>

          <?php
        } else {
          ?>
          <form action="index.php?act=dangnhap" method="POST">
            <div class="dong">
              <label>Tên người dùng:</label><br>
              <input type="text" name="user" class="email-dn" required>
            </div>

            <div class="dong">
              <label>Mật khẩu:</label><br>
              <input type="password" name="pass" class="email-dn" required>
            </div>

            <div class="dong">
              <input type="submit" name="dangnhap" value=" ĐĂNG NHẬP" class="submit">
            </div>
            <div class="dong">
              <a href="index.php?act=dangky"><input type="button" value="ĐĂNG KÝ" class="dangNhap"></a>
            </div>
            <div class="dong">
              <a href="index.php?act=quenmk"><input type="button" value="QUÊN MẬT KHẨU" class="dangNhap"></a>
            </div>
          </form>

        <?php } ?>
      </div>
    </div>
    <div class="col-md-6">
      <img src="./img/anhDN.webp" class="w-100" alt="">
    </div>
  </div>
</div>