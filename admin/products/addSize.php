<div class="container">
    <div class="row">
            <div class="row frmtitle titleAD"><h1>THÊM MỚI KÍCH CỠ</h1></div>
            <div class="row fromcontent">
                <form action="index.php?act=addSize" method="post">
                    <div class="row mb">
                        Mã kích thước <br>
                    <input type="text" name="maloai" id="" disabled>
                    </div>
                    <div class="row mb">
                        Kích thước <br>
                        <input type="text" name="size" id="">
                    </div>
                    <div class="nut mt-4">
                        <input type="submit" class="btn btn-primary input" name="themmoi" id="" value="Thêm mới">
                        <input type="reset" class="btn btn-primary input" name="" id="" value="Nhập lại">
                      <a href="index.php?act=listSize">  <input class="btn btn-primary input" type="button" name="" id="" value="danh sách"></a>
                      <a href="index.php?act=addColor">  <input class="btn btn-primary input" type="button" name="" id="" value="Thêm màu"></a>
                     
                      <a href="index.php?act=addsp"><input class="btn btn-primary input" type="button" name="" id="" value="Thêm sarn phẩm"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
    </div>
    
</div>