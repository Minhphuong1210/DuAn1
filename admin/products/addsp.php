<div class="container">
    <div class="row">
        <div class="row frmtitle">
            <h1>Thêm mới sản phẩm </h1>
        </div>
        <div class="row fromcontent">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row mb">
                    <b>Mã loại:</b> <br>
                    <input type="text" name="maloai" id="" disable>
                </div>
                <div class="row mb">
                    <b>Tên sản phẩm:</b> <br>
                    <input type="text" name="name" id="">
                </div>

                <div class="row mb">
                    <b>Hình:</b> <br>
                    <input type="file" name="img" id="">
                </div>
                <div class="row mb">
                    <b>Mô tả:</b> <br>
                    <input type="text" name="desc" id="">
                </div>
                <div class="row mb">
                    <b>Gía:</b> <br>
                    <input type="text" name="price" id="">
                </div>
                <b class="row mb">Danh mục</b>
                <select name="id_cat" id="">
                    <option value="">--chọn--</option>
                    <?php
                    $listdm = load_all_danhmuc();
                    foreach ($listdm as $dm) {
                        ?>
                        <option value="<?php echo $dm['id'] ?>">
                            <?php echo $dm['name'] ?>
                        </option>
                        <?php
                    }

                    ?>
                </select>

                <div class="row mb">

                    <b> kích thước</b>
                    <select name="id_size" id="">
                        <option value="">--chọn--</option>
                        <?php
                        $listSize = size();
                        foreach ($listSize as $size) {
                            ?>
                            <option value="<?php echo $size['id'] ?>">
                                <?php echo $size['name'] ?>
                            </option>
                            <?php
                        }

                        ?>
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
                            <option value="<?php echo $color['id'] ?>">
                                <?php echo $color['name'] ?>
                            </option>
                            <?php
                        }

                        ?>
                    </select>
                </div>

                <!-- code  -->
                <div class="row mb">
                    <b>Số lượng</b>
                    <input type="text" name="quality" id="">
                </div>
                <div class=" mb">
                   
                    <input type="submit" name="themmoi" class="btn btn-primary" id="" value="Thêm mới">
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