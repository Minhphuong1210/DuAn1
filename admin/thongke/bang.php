<div class="container">
  <div class="row">
    <div class="row frmtitle">
      <h1>Bảng sản phẩm</h1>
    </div>
    <div class="row fromcontent">
      <div class="row mb frmdsloai table">
        <table>
       <tr>
        <th>mã sản phẩm </th>
        <th>Tên sản phẩm</th>
        <th>Tổng số lượng</th>
        <th>Số lượng bán </th>
        <th> Giá sản phẩm</th>
       </tr>
<?php
$thongke=thongke();
foreach ($thongke as $tk) {
  // echo "<pre>";
  // print_r($tk);
  // echo"</pre>";
  ?>
      <tr>
        <td><?php echo $tk['id']?></td>
        <td><?php echo $tk['name']?></td>
        <td><?php echo $tk['tongsoluong']?></td>
        <td><?php echo $tk['soluongban']?></td>
        <td ><?php echo $tk['price']?></td>
       </tr>

  <?php
}


?>


        </table>
      </div>
    </div>
    <div class="row mb">

      <a href="index.php?act=bieudo"> <input type="button" name="" id="" value="Biểu đồ tròn"></a>
    </div>
  </div>

</div>