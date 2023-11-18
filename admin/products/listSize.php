<div class="row">
            <div class="row frmtitle"><h1>Danh sách kích cỡ </h1></div>
            <div class="row fromcontent">
              <div class="row mb frmdsloai table">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã kích thước</th>
                        <th>Số kích thước</th>
                        <th></th>
                    </tr>
<?php
 $listSize=size(); 
foreach ($listSize as $size){
 
  extract($size);
  $suasize="index.php?act=suasize&id=".$id;
  $xoasize="index.php?act=xoasize&id=".$id;
  echo '<tr>
  <td><input type="checkbox" name="" id=""></td>
  <td>'.$id.'</td>
  <td>'.$name.'</td>
  <td><a href="'.$suasize.'"><input type="button" value="sửa"></a> <a href="'.$xoasize.'"><input type="button" value="xóa"></a></td>
</tr>';
}
?>
                    
                </table>
              </div>
            </div>
            <div class="row mb">
              
              <a href="index.php?act=addSize">  <input type="button" name="" id="" value="Nhập thêm"></a>
            </div>
          </div>
          