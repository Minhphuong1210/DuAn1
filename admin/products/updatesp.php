<div class="container">
<?php
if (isset($_GET['id'])) {
    $listmotsp = one_sp($_GET['id']);
    foreach ($listmotsp as $load_one) {
        extract($load_one);
        $hinhpath = "../upload/" . $load_one['img'];
        $img = "";
        if (is_file($hinhpath)) {
            $img = "<img src='" . $hinhpath . "' >";

        } else {
            $img = "no photo";
        }

        ?>
        <div class="row mt-5 ">
            <div class="row frmtitle titleAD">
                <h1>CẬP NHẬT SẢN PHẨM </h1>
            </div>
            <div class="row fromcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb">
                        <b>Mã loại:</b> <br>
                        <input type="text" name="maloai" id="" disabled>
                    </div>
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id)>0) echo $id; ?>">
                    <div class="row mb">
                        <b>Tên sản phẩm:</b> <br>
                        <input type="text" name="name" id="" value="<?php echo $load_one['name'] ?>">
                    </div>

                    <div class="row mb">
                        <b>Hình:</b> <br>
                        <input type="file" name="img">
                        <div class="imgsua">
                            <?php echo $img  ?>
                        </div>
                    </div>
                    <div class="row mb">
                        <b>Mô tả:</b> <br>
                        <input type="text" name="desc" id="" value="<?php echo $load_one['desc'] ?>">
                    </div>
                    <div class="row mb">
                        <b>Gía:</b> <br>
                        <input type="text" name="price" id="" value="<?php echo $load_one['price'] ?>">
                    </div>

                    <b class="row mb">Danh mục</b>
                    <select name="id_cat" id="">
                        <option value="">--chọn--</option>
                        <?php
                        $listdm = load_all_danhmuc();

                        foreach ($listdm as $dm) {
                            // var_dump($dm);
                            ?>
                           

                            <option value="<?php echo $dm['name'] ?>" <?php if($load_one['name']=$dm['name']) echo "selected" ?> ><?php echo $dm['name'] ?></option>
                            <?php
                        }
                        ?>
                          <input type="hidden" name="iddm" value="<?php echo $dm['id']?>">

                    </select>
                    <div class="mt-4">
                  
                    <input type="submit" name="capnhat" class="btn btn-primary" id="" value="Cập nhật">
                    <input type="reset" name="" id="" class="btn btn-primary" value="Nhập lại">
                    <a href="index.php?act=listsp"> <input type="button" class="btn btn-primary" name="" id=""
                            value="Danh sách sản phẩm"></a>
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
        <?php

    }
}


?>
</div>