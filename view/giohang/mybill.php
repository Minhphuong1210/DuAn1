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
            </tr>
        </thead>
        <?php
        $listbill = loadall_bill($id_user);
        if (is_array($listbill)) {
            foreach ($listbill as $bill) {
             
                // var_dump($bill);
                ?>
                <tbody>
                    <tr>
                        <!-- <td>
                    <div class="pr-cart">
                        <div class="img-cart">
                            <img src="./img/sp1.webp" width="100%" alt="">
                        </div>
                        <div class="pr-dt">
                            <ul>
                                <li><strong>Áo sơ mi-AR02029DT</strong></li>
                                <li><b>Màu sắc:</b></li>
                                <li><b>Kích cỡ: 39</b></li>
                            </ul>
                        </div>
                    </div>
                </td> -->
                        <!-- <td><a href="#"><button type="button" class="btn btn-warning">Xóa</button></a></td> -->
                        <input type="hidden" <?php echo $id_user ?>>
                        <td><?php echo $bill['id']?></td>
                        <td><?php echo $bill['bill_name']?></td>
                        <td><?php echo $bill['bill_address']?></td>
                        <td><?php echo $bill['bill_email']?></td>
                        <td><?php echo $bill['bill_tel']?></td>
                        <td><?php echo $bill['ngaydathang']?></td>
                        <td><?php echo $bill['bill_pttt']?></td>
                    </tr>

                </tbody>
                <?php

            }
        }



        ?>

    </table>
</div>