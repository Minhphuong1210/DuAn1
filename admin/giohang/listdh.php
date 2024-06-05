<div class="container mt-3">
    <h2 class="titleAD">Lịch sử người mua hàng </h2>
    <table class="table">
        <thead>
            <tr>
                
                <th>Mã</th>
                <!-- <th>sản phẩm</th> -->
                <th>Tên Người mua</th>
                <th>Địa chỉ </th>
                <th>Email </th>
                <th>Số điện thoại </th>
                <th>ngày đặt hàng </th>
                <th>Phương thức thanh toán</th>
                <th>trạng thái đơn hàng</th>
                <th>Thao tác </th>
            </tr>
        </thead>
        <?php
        $hiendh = hien_bill();
        if (is_array($hiendh)) {
          
            foreach ($hiendh as $bill) {
                ?>
                <tbody>
                    <tr>

                        <td>
                            <?php echo $bill['id'] ?>
                        </td>
                     
                        <td>
                            <?php echo $bill['bill_name'] ?>
                        </td>
                        <td>
                            <?php echo $bill['bill_address'] ?>
                        </td>
                        <td>
                            <?php echo $bill['bill_email'] ?>
                        </td>
                        <td>
                            <?php echo $bill['bill_tel'] ?>
                        </td>
                        <td>
                            <?php echo $bill['ngaydathang'] ?>
                        </td>
                        <td>
                            <?php echo $bill['bill_pttt'] ?>
                        </td>
                        <td>
                            <?php echo $bill['bill_status']?>
                        </td>
                        <?php
                      
                        $suadh = "index.php?act=suadh&id=" . $bill['id'];
                        ?>
                        <td><a href="<?php echo $suadh ?>"><input type="button" value="Cập nhật"></a> 
                              </td>
                    </tr>

                </tbody>
                <?php

            }
        }



        ?>

    </table>
</div>