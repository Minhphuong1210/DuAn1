<?php
    if(is_array($suaDm)){
        extract($suaDm);
    }
?>
<div class="row">
            <div class="row frmtitle"><h1>Cập nhật loại hàng hóa </h1></div>
            <div class="row fromcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb">
                        Mã loại <br>
                    <input type="text" name="maloai" id="">
                    </div>
                    <div class="row mb">
                        Tên loại <br>
                        <input type="text" name="tenloai" id="" value="<?php if(isset($name)&&($name)!="") echo $name ?>">
                    </div>
                    <div class="row mb">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id)>0) echo $id; ?>">
                        <input type="submit" name="capnhat" id="" value="Cập nhật">
                        <input type="reset" name="" id="" value="Nhập lại">
                      <a href="index.php?act=listdm">  <input type="button" name="" id="" value="danh sách"></a>
                    </div>

                    <?php
                        if(isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>

                </form>
            </div>
          </div>
    </div>