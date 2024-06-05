<?php
if (isset($_GET['id'])) {
    $listmotsp = one_sp($_GET['id']);
    // var_dump($listmotsp);
    foreach ($listmotsp as $load_one) {
      
        ?>

        <div class="container">
            <div class="row">
                <div class="row frmtitle titleAD">
                    <h1>CẬP NHẬT SẢN PHẨM CHI TIẾT</h1>
                </div>
                <div class="row fromcontent">
                    <form action="index.php?act=updatespct" method="post" enctype="multipart/form-data">
                        <div class="row mb">

                            <b> kích thước</b>
                            <select name="id_size" id="">
                                <option value="">--chọn--</option>
                                <?php
                                $listSize = size();
                                foreach ($listSize as $size) {
                                    ?>
                                    <option value="<?php echo $size['size'] ?>" <?php if ($load_one['size'] = $size['size'])
                                           echo "selected" ?>>
                                        <?php echo $size['size'] ?>
                                    </option>
                                    <?php
                                }
                               
                                ?>
                                   <input type="hidden" name="idsize" value="<?php echo $size['id']?>">
                            </select>
                        </div>

                        <div class="row mb">

                            <b> Màu sắc</b>
                            <select name="id_color" id="">
                                <option value="">--chọn--</option>
                                <?php
                                $listColor = color();
                                foreach ($listColor as $color) {
                                    ?>
                                    <option value="<?php echo $color['mau'] ?>" <?php if ($load_one['mau'] = $color['mau'])
                                           echo "selected" ?>>
                                        <?php echo $color['mau'] ?>
                                    </option>
                                    <?php
                                }

                                ?>
                                 <input type="hidden" name="idcolor" value="<?php echo $color['id']?>">
                            </select>
                        </div>

                        <!-- code  -->
                        <div class="row mb">
                            <b>Số lượng</b>
                            <input type="text" name="quality" id="" value="<?php echo $load_one['quality'] ?>">
                        </div>
                        <input type="hidden" name="price" value="<?php echo $load_one['price']?>">
                        <input type="hidden" name="id_pro" id="" value="<?php echo $load_one['id_pro'] ?>">
                        <input type="hidden" name="id" id="" value="<?php echo $load_one['id'] ?>">
                    <?php }
} ?>
                <div class=" mb">

                    <input type="submit" name="capnhat" class="btn btn-primary" id="" value="Cập nhật">
                    <input type="reset" name="" id="" class="btn btn-primary" value="Nhập lại">
                    <a href="index.php?act=listsp"> <input type="button" class="btn btn-primary" name="" id=""
                            value="danh sách sản phẩm"></a>
                    <a href="index.php?act=addColor"> <input type="button" class="btn btn-primary" name="" id=""
                            value="Thêm màu"></a>
                    <a href="index.php?act=addSize"> <input type="button" class="btn btn-primary" name="" id=""
                            value="Thêm kích cỡ"></a>

                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </form>
        </div>
    </div>
</div>
</div>