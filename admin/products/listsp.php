<div class="container">
  <div class="row">
    <div class="row frmtitle titleAD">
      <h1>DANH SÁCH SẢN PHẨM </h1>
    </div>
    <div class="row fromcontent">
      <div class="row mb frmdsloai table">
        <table >
          <tr>
            <th></th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Giá </th>
            <th>Mô tả</th>
            <th>Danh mục</th>
            <th>Kích thước</th>
            <th>Màu sắc</th>
            <th>Số lượng</th>
            <th>Thao tác</th>
          </tr>
          <?php
          $listspct = spct();
          foreach ($listspct as $sp) {
            extract($sp);
            $catInfo = load_one_dm($sp['id_cat']);
            $catName = $catInfo['name'];
            ?>
            <tr>
              <td><input type="checkbox" name="" id=""></td>
              <td>
                <?php echo $sp['name'] ?>
              </td>

              <td><img src="../upload/<?php echo $sp['img'] ?>" alt="" width=100px></td>
              <td>
                <?php echo $sp['price'] ?>
              </td>
              <td>
                <div class="desc p-1"><?php echo $sp['desc']?></div>
              </td>
              <td>
                <?php echo  $catName ?>
              </td>
              <td>
                <?php echo $sp['size'] ?>
              </td>
              <td>
                <?php echo $sp['mau'] ?>
              </td>
              <td>
                <?php echo $sp['quality'] ?>
              </td>
              <?php 
                $xoasp = "index.php?act=xoasp&id=" . $sp['id'];
                $suasp = "index.php?act=suasp&id=" . $sp['id'];
                $suaspct="index.php?act=suaspct&id=".$sp['id'];
              ?>
              <td><a href="<?php echo $suasp ?>"><input type="button" class="btn btn-primary" value="Sửa"></a> 
              <a href="<?php echo $xoasp ?>" onclick="return confirm('bạn có muốn xóa')"><input class="btn btn-danger" type="button" value="Xóa"></a>
              <a href="<?php echo $suaspct?>"><input type="button"  class=" btn btn-warning text-light" value="Chi tiết"></a>
            </td>
              
              </tr>
              <?php
          }
          ?>

            



        </table>
      </div>
    </div>
    <div class="row mb">

      <a href="index.php?act=addsp"> <input type="button"  class="btn btn-primary"  name="" id="" value="Nhập thêm"></a>
    </div>
  </div>

</div>