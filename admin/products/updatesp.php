<?php
if(is_array($listmotsp)){
    extract($listmotsp);
    
}
?>
<div class="row">
            <div class="row frmtitle"><h1>Thêm mới sản phẩm </h1></div>
            <div class="row fromcontent">
                <form action="index.php?act=updatesp" method="post" enctype= "multipart/form-data"  >
                    <div class="row mb">
                        Mã loại <br>
                    <input type="text" name="maloai" id="" disable>
                    </div>
                    <div class="row mb">
                        Tên sản phẩm <br>
                        <input type="text" name="name" id="" value="<?=$name?>">
                    </div>
                    
                    <div class="row mb">
                        hình <br>
                        <input type="file" name="img" id="" value="<?php echo $img ?>">
                    </div>
                    <div class="row mb">
                        desc <br>
                        <input type="text" name="desc" id="" value="<?php echo $desc ?>">
                    </div>
                   <div class="row mb">
                        giá <br>
                        <input type="text" name="price" id="" value="<?php echo $price ?>">
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
                        <input type="submit" name="capnhat" id="" value="Cập nhật">
                        <input type="reset" name="" id="" value="Nhập lại">
                      <a href="index.php?act=listsp">  <input type="button" name="" id="" value="danh sách sản phẩm"></a>
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