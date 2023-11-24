<?php
if(isset($_GET['id'])){
        $listmotsp = one_sp($_GET['id']);
        foreach($listmotsp as $load_one){
            $hinhpath = "../upload/".$img;
            if (is_file($hinhpath)) {
                $img= "<img src='".$hinhpath."' height='80px'>";
            
            } else {
                $img = "no photo";
            }

            ?>
           
            <div class="container">
    <div class="row">
        <div class="row frmtitle">
            <h1>cập nhật </h1>
        </div>
        <div class="row fromcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb">
                    <b>Mã loại:</b> <br>
                    <input type="text" name="maloai" id="" disable>
                </div>
                <div class="row mb">
                    <b>Tên sản phẩm:</b> <br>
                    <input type="text" name="name" id="" value="<?php echo $load_one['name']?>" >
                </div>

                <div class="row mb">
                    <b>Hình:</b> <br>
                    <input type="file" name="img" id="">
                    <?php echo $img?>
                </div>
                <div class="row mb">
                    <b>Mô tả:</b> <br>
                    <input type="text" name="desc" id="" value="<?php echo $load_one['desc']?>">
                </div>
                <div class="row mb">
                    <b>Gía:</b> <br>
                    <input type="text" name="price" id="" value="<?php echo $load_one['price']?>">
                </div>
                
                <b class="row mb">Danh mục</b>
                <select name="id_cat" id="">
                    <option value="">--chọn--</option>
                    <?php
                    $listdm = load_all_danhmuc();

                    foreach ($listdm as $dm) {
                       ?>
                         <option value="<?php echo $dm['name'] ?>" <?php if($load_one['name']=$dm['name']) echo "selected" ?> ><?php echo $dm['name'] ?></option>
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
                            <option value="<?php echo $size['size'] ?>" <?php if($load_one['size']=$size['size']) echo "selected" ?> ><?php echo $size['size'] ?></option>
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
                             <option value="<?php echo $color['mau'] ?>" <?php if($load_one['mau']=$color['mau']) echo "selected" ?> ><?php echo $color['mau'] ?></option>
                            <?php
                        }

                        ?>
                    </select>
                </div>

                <!-- code  -->
                <div class="row mb">
                    <b>Số lượng</b>
                    <input type="text" name="quality" id="" value="<?php echo $load_one['quality']?>"> 
                </div>
                <input type="hidden" name="id_pro" id="" value="<?php echo $load_one['id_pro']?>" >
                <input type="hidden" name="id" id="" value="<?php echo $load_one['id']?>" >
                <?php } } ?>
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