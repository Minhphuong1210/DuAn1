<div class="container">
<div class="row">
            <div class="row frmtitle"><h1>Danh sách sản phẩm </h1></div>
            <div class="row fromcontent">
              <div class="row mb frmdsloai table">
                <table>
                    <tr>
                        <th></th>
                        <th>Tên</th>
                        <th>ảnh</th>
                        <th>giá </th>
                        <th>Mô tả</th>
                        <th>Danh mục</th>
                        <th>Thao tác</th>
                    </tr>
<?php
 $listsp=sp(); 
foreach ($listsp as $sp){
 
    $xoasp="index.php?act=xoasp&id=".$sp['id' ];
    $suasp="index.php?act=suasp&id=".$sp['id'];
  
  
    ?>
  
    <tr>
                          <td><input type="checkbox" name="" id=""></td>               
                          <td><?php echo $sp['name']?></td>
                         
                          <td><img src="../upload/<?php echo $sp['img'] ?>" alt="" width=80px></td>
                          <td><?php echo $sp['price']?></td>
                          <td><?php echo $sp['desc']?></td>
                          <td><?php echo$sp['id_cat'] ?></td>
                          <td><a href="<?php echo $suasp?>"><input type="button" value="sửa"></a> <a href="<?php echo $xoasp?>"><input type="button" value="xóa"></a></td>
                      </tr>
                   
    <?php
}
?>
                    
                </table>
              </div>
            </div>
            <div class="row mb">
              
              <a href="index.php?act=addsp">  <input type="button" name="" id="" value="Nhập thêm"></a>
            </div>
          </div>
          
</div>