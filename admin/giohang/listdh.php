<div class="container mt-3">
    <h2>Lịch sử người mua hàng  </h2>
    <table class="table">
        <thead>
            <tr>
                <!-- <input type="hidden" > -->
                <th>Mã</th>
                <th>sản phẩm</th>
                <th>Tên Người mua</th>
                <th>Địa chỉ </th>
                <th>Email </th>
                <th>Số điện thoại </th>
                <th>ngày đặt hàng </th>
                <th>Phương thức thanh toán</th>
                <th>Thao tác </th>
            </tr>
        </thead>
        <?php
  $hiendh=hien_bill();
          if (is_array($hiendh)) {
            foreach ($hiendh as $bill) {
          
                ?>
                <tbody>
                    <tr>
                       
                        <td><?php echo $bill['id']?></td>
                       <td> <img src="../upload/<?php echo $bill['img'] ?>" alt="" width=80px></td>
                        <td><?php echo $bill['bill_name']?></td>
                        <td><?php echo $bill['bill_address']?></td>
                        <td><?php echo $bill['bill_email']?></td>
                        <td><?php echo $bill['bill_tel']?></td>
                        <td><?php echo $bill['ngaydathang']?></td>
                        <td><?php echo $bill['bill_pttt']?></td>
                        <?php
                         $xoasp = "index.php?act=xoadh&id=" . $bill['id'];
                         $suasp = "index.php?act=suadh&id=" . $bill['id'];
                        ?>
                        <td><a href="<?php echo $suadh ?>"><input type="button" value="Cập nhật"></a> <a
                             href="<?php echo $xoadh ?>"><input type="button" value="xóa"></a></td>
                    </tr>

                </tbody>
                <?php

            }
        }



        ?>

    </table>
</div>