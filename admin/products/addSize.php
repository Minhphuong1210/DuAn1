<div class="row">
            <div class="row frmtitle"><h1>Thêm mới loại hàng hóa </h1></div>
            <div class="row fromcontent">
                <form action="index.php?act=addSize" method="post">
                    <div class="row mb">
                        Mã kích thước <br>
                    <input type="text" name="maloai" id="" disable>
                    </div>
                    <div class="row mb">
                        Kích thước <br>
                        <input type="text" name="name" id="">
                    </div>
                    <div class="row mb">
                        <input type="submit" name="themmoi" id="" value="Thêm mới">
                        <input type="reset" name="" id="" value="Nhập lại">
                      <a href="index.php?act=listSize">  <input type="button" name="" id="" value="danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
          </div>
    </div>