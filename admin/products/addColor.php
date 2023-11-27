<div class="container">
    <div class="row ">
        <div class="row frmtitle"><h1>Thêm mới Màu</h1></div>
        <div class="row fromcontent">
            <form action="index.php?act=addColor" method="post">
                <div class="row mb">
                    Mã màu <br>
                <input type="text" name="maloai" id="" disable>
                </div>
                <div class="row mb">
                    Tên màu <br>
                    <input type="text" name="mau" id="">
                </div>
                <div class="nut mt-4">
                <div class=" mb">
                    <input type="submit"  class="btn btn-primary input" name="themmoi" id="" value="Thêm mới">
                    <input type="reset"  class="btn btn-primary input"name="" id="" value="Nhập lại">
                <a href="index.php?act=listColor">  <input  class="btn btn-primary input" type="button" name="" id="" value="danh sách"></a>
                
                <a href="index.php?act=addSize">  <input  class="btn btn-primary input" type="button" name="" id="" value="Thêm kích cỡ"></a>
                <a href="index.php?act=addsp"><input  class="btn btn-primary input" type="button" name="" id="" value="Thêm sản phẩm"></a>
                </div>
                </div>
                <?php 
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
                ?>
            </form>
        </div>   
    </div>
</div>