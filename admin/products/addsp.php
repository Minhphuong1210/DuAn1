<div class="row">
            <div class="row frmtitle"><h1>Thêm mới loại hàng hóa </h1></div>
            <div class="row fromcontent">
                <form action="index.php?act=addsp" method="post" enctype= "multipart/form-data"  >
                    <div class="row mb">
                        Mã loại <br>
                    <input type="text" name="maloai" id="" disable>
                    </div>
                    <div class="row mb">
                        Tên sản phẩm <br>
                        <input type="text" name="name" id="">
                    </div>
                    
                    <div class="row mb">
                        hình <br>
                        <input type="file" name="img" id="">
                    </div>
                    <div class="row mb">
                        desc <br>
                        <input type="text" name="desc" id="">
                    </div>
                    <select name="id_cat" id="">
                        <option value="">--chọn--</option>
                        <?php
                        $listdm=load_all_danhmuc();
                        foreach ($listdm as $dm){
                         ?>
                         <option value="<?php echo $dm['id']?>"><?php echo $dm['name'] ?></option>
                         <?php   
                        }
                        
                        ?>
                    </select>
                    <div class="row mb">
                        <input type="submit" name="themmoi" id="" value="Thêm mới">
                        <input type="reset" name="" id="" value="Nhập lại">
                      <a href="index.php?act=listdm">  <input type="button" name="" id="" value="danh sách"></a>
                      <a href="index.php?act=addColor">  <input type="button" name="" id="" value="Thêm màu"></a>
                      <a href="index.php?act=addSize">  <input type="button" name="" id="" value="Thêm kích cỡ"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
          </div>
    </div>