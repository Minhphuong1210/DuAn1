<?php
if(is_array($listmotsize)){
    extract($listmotsize);
}
?>
<div class="row">
    <div class="row frmtitle">
        <h1>Cập nhật size </h1>
    </div>
    <div class="row fromcontent">
        <form action="index.php?act=updateSize" method="post">
            <div class="row mb">
                Mã màu <br>
                <input type="text" name="maloai" id="" disable>
            </div>
            <div class="row mb">
                Tên màu <br>
                <input type="text" name="size" id="" value="<?php echo $size?>">
            </div>
            <div class="row mb">
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id)>0) echo $id; ?>">
                <input type="submit" name="capnhat" id="" value="Cập nhật">
                <input type="reset" name="" id="" value="Nhập lại">
                <a href="index.php?act=listSize"> <input type="button" name="" id="" value="danh sách"></a>
            </div>
            <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
        </form>
    </div>
</div>
</div>