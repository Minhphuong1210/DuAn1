<?php

?>
<div class="container mt-3">
  <h2>GIỎ HÀNG</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Sản phẩm</th>
        <th></th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Tổng tiền</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // echo var_dump($_SESSION['mycart']); exit;
      if (isset($_SESSION['mycart']) && (count($_SESSION['']) > 0)) {
        $tong = 0;
        foreach ($_SESSION['mycart'] as $car) {
          $hinh = $img_path . $cart[2];
          $ttien = $cart[3] * $cart[4];
          $tong += $ttien;
          echo '
                <tr>
              <td>
                <div class="pr-cart">
                    <div class="img-cart">
                        <img src="' . $hinh . '" width="100%" alt="">
                    </div>
                    <div class="pr-dt">
                        <ul>
                            <li><strong>' . $cart[1] . '</strong></li>
                            <li><b>Màu sắc:</b></li>
                            <li><b>Kích cỡ: 39</b></li>
                        </ul>
                    </div>
                </div>
              </td>
              <td><a href="#"><button type="button" class="btn btn-warning">Xóa</button></a></td>
              <td>' . $cart[4] . '</td>
              <td>' . $cart[3] . '</td>
              <td>' . $ttien . '</td>
            </tr>';

        }

        echo '
            <tr>
             
              <td colspan="4">Tổng đơn hàng</td>
              <td>' . $tong . '</td>
            
            </tr>';
      }
      ?>


    </tbody>
  </table>
</div>