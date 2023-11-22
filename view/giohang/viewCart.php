<div class="container mt-3">
  <h2>GIỎ HÀNG</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Sản phẩm</th>
        <th>Thao tác</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Tổng tiền</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
        $tong = 0;
        $i=0;
        foreach ($_SESSION['mycart'] as $cart) {
          $hinh = $img_path . $cart[2];
          $ttien = intval($cart[3]) * intval($cart[4]);
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
                            <li><b>Màu sắc: '.$cart[6].'</b></li>
                            <li><b>Kích cỡ: '.$cart[7].'</b></li>
                        </ul>
                    </div>
                </div>
              </td>
              <td><a href="index.php?act=delCart&idCart='.$i.'"><button type="button" class="btn btn-warning">Xóa</button></a></td>
              <td>' . $cart[4] . '</td>
              <td>' . $cart[3] . '</td>
              <td>' . $ttien . '</td>
              
            </tr>';
            $i+=1;
        }
        echo '
            <tr>
              <td colspan="4">Tổng đơn hàng</td>
              <td>' . $tong . '</td>
            </tr>';
      // }
      ?>


    </tbody>
  </table>
</div>