<div class="container mt-3">
    <h2>Lịch sử các đơn hàng đã mua </h2>
    <table class="table">
        <thead>
            <tr>
                <input type="hidden" >
                <th>Mã</th>
                <th>Tên Người mua</th>
                <th>Địa chỉ </th>
                <th>Email </th>
                <th>Số điện thoại </th>
                <th>ngày đặt hàng </th>
                <th>Phương thức thanh toán</th>
                <th>trạng thái đơn hàng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <?php
        $listbill = loadall_bill($id_user);
        if (is_array($listbill)) {
            foreach ($listbill as $bill) {
           
               
                ?>
                <tbody>
                    <tr>
                        <input type="hidden" <?php echo $id_user ?>>
                        <td><?php echo $bill['id']?></td>
                        <td><?php echo $bill['bill_name']?></td>
                        <td><?php echo $bill['bill_address']?></td>
                        <td><?php echo $bill['bill_email']?></td>
                        <td><?php echo $bill['bill_tel']?></td>
                        <td><?php echo $bill['ngaydathang']?></td>
                        <td><?php echo $bill['bill_pttt']?></td>
                        <td>
                        <?php $status= $bill['bill_status'];
                                 if ($status == 0) {
                                    echo "Chưa xử lý";
                                } elseif ($status == 1) {
                                    echo "Xác nhận đơn hàng";
                                } elseif ($status == 2) {
                                    echo "Đã nhận đơn hàng";
                                }
                            ?>
                        </td>
                        <?php   $suadhus = "index.php?act=suadhus&id=" . $bill['id']; ?>
                        <td><a href="<?php echo $suadhus ?>"><input type="button" value="Cập nhật"></td>
                    </tr>
                    
                </tbody>
                <?php

            }
        }



        ?>

    </table>
</div>