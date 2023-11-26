<div class="main">
        <div class="container-fluid lineTT  ">
            <div class="container bg-white">
                <div class="row rowTT">
                    <div class="col-md-6 boxLeft ">
                      <?php
                      if(!isset($_SESSION['user'])){
                      ?>
                      <div class="box-TT">
                        <h3 class="title-tt">Thanh toán</h3>
                        <b>Bạn đã có tài khoản? Xin mời <a href="index.php?act=dangnhap">Đăng nhập</a> để Đặt Hàng</b>
                      </div>
                      <?php
                      }
                      
                      
                      ?>
                      
                      <div class="form-dn">
                        <form action="index.php?act=billcomfirm" method="post">
                            <?php
                                if(isset($_SESSION["user"])){
                                    $name=$_SESSION["user"]["name"];
                                    $email=$_SESSION["user"]["email"];
                                    $phone=$_SESSION["user"]["phone"];
                                }else{
                                    $name="";
                                    $email="";
                                    $phone="";
                                }
                            ?>
                              <b>1.Địa chỉ nhận hàng</b>
                              <div class="dong">
                                  <label>Họ và Tên:</label><br>
                                  <input type="text" name="name" value="<?=$name?>" class="email-dn">
                              </div>

                              <div class="dong dongtt">
                                  <label>Địa chỉ email:</label><br>
                                  <input type="email" name="email" value="<?=$email?>" class="email-dn">
                              </div>
                              
                              <div class="dong">
                                  <label>Số điện thoại:</label><br>
                                  <input type="text" name="phone" value="<?=$phone?>" class="email-dn">
                              </div>

                              <div class="dong">
                                  <label>Địa chỉ nhận hàng:</label><br>
                                  <input type="text" class="email-dn" required name="address">
                              </div>
                              <div class="dong">
                                  <label>Ghi chú:</label><br>
                                  <textarea class="email-tt" name="" id="" cols="30" rows="10"></textarea>
                              </div>
                              
                              <b>2.Phương thức thanh toán</b>
                              <div class="dong">
                                <div class="form-check mb-3 mt-3">
                                  <input type="radio" class="form-check-input" id="radio1" name="pttt" value="option1" checked>Thanh toán khi nhận hàng
                                  <label class="form-check-label" for="radio1"></label>
                                </div>
                                <div class="form-check">
                                  <input type="radio" class="form-check-input" id="radio2" name="pttt" value="option2">Thanh toán thẻ VNPAY (ATM, VISA,mastercard,..)
                                  <label class="form-check-label" for="radio2"></label>
                                </div>
                              </div>
                              
                              <div class="thanhtien">
                                <div class="text">
                                  <span>THÀNH TIỀN</span>
                                </div>
                                <div class="price">
                                    <span></span>
                                </div>
                              </div>

                              <div class="dong">
                                  <input type="submit" value="ĐẶT HÀNG" class="submit" name="dongydathang">
                              </div>
                           
                             
                        </form>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <div class="ttdh">
                        <h4 class="title-TT">Thông tin đơn hàng</h4>
                          <table class="table">
                            <thead>
                             
                            </thead>
                            <tbody>
                             <?php
                              viewcart(0); 
                             
                              ?>
                            </tbody>
                          </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>