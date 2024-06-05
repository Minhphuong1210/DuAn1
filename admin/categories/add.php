<div class="container">
<div class="row">
            <div class="row frmtitle titleAD"><h1>Thêm mới loại hàng hóa </h1></div>
            <div class="row fromcontent ">
                <form action="" method="post">
                    <div class="row mb">
                        Mã loại <br>
                    <input type="text" name="maloai" id="" >
                    </div>
                    <div class="row mb">
                        Tên loại <br>
                        <input type="text" name="tenloai" id="">
                    </div>
                    <div class="mt-5">
                        <input type="submit" class="btn btn-primary" name="themmoi" id="" value="Thêm mới">
                        <input type="reset" name="" class="btn btn-primary" value="Nhập lại">
                      <a href="index.php?act=list">  <input type="button" class="btn btn-primary" name="" id="" value="danh sách"></a>
                    </div>

                    <?php
                        if(isset($thongbao) && ($thongbao != "")) echo "$thongbao";
                    ?>

                </form>
            </div>
          </div>
</div>