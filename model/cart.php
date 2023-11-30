<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoa_th = 'Thao tác';

    } else {
        $xoa_th = '';
    }
    echo '<tr>
                <th>Sản phẩm</th>
                <th>' . $xoa_th . '</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng tiền</th>
            </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = intval($cart[3]) * intval($cart[4]);
        $tong += $ttien;

        if ($del == 1) {
            $xoa_td = '<td><a href="index.php?act=delCart&idCart=' . $i . '"><button type="button" class="btn btn-warning">Xóa</button></a></td>';
        } else {
            $xoa_td = '';
        }
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
                                <li><b>Màu sắc: ' . $cart[6] . '</b></li>
                                <li><b>Kích cỡ: ' . $cart[7] . '</b></li>
                                  
                            </ul>
                        </div>
                    </div>
                </td>
                <td>' . $xoa_td . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $ttien . '</td>
            </tr>';
        $i += 1;
    }
    echo '
            <tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>' . $tong . '</td>
            </tr>';
}


function tongdonhang()
{

    $tong = 0;


    foreach ($_SESSION['mycart'] as $cart) {

        $ttien = intval($cart[3]) * intval($cart[4]);
        $tong += $ttien;

    }
    return $tong;
}

function insert_bill($id_user,$name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO `bill` (`id_user`,`bill_name`,`bill_email`,`bill_address`,`bill_tel`,bill_pttt,`ngaydathang`,`total`) VALUES ('$id_user','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    // $sql_args = [$name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang]; // Tạo mảng giá trị tương ứng với câu lệnh SQL
//   echo "<pre>";
//   print_r($sql);
//   echo"</pre>";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($id_user, $id_pro, $img, $name, $price, $quality,$thanhtien, $idbill){
    
    $sql = "INSERT INTO `cart` (`id_user`,`id_pro`,`img`,`name`,price,`quality`,`thanhtien`,`idbill`) VALUES ('$id_user','$id_pro','$img','$name','$price','$quality','$thanhtien','$idbill')";
//     echo "<pre>";
//   print_r($sql);
//   echo"</pre>";
    return pdo_execute($sql);
}


function loadone_bill($id)
{

    $sql = "select *from `bill` where id=" . $id;
    $bill = pdo_query_one($sql);
    // var_dump($listmotsp);
    return $bill;
}

    
function loadone_cart($idbill)
{

    $sql = "select *from `cart` where idbill=".$idbill;
    $bill = pdo_query($sql);
    // var_dump($listmotsp);
    return $bill;
}

function loadall_bill($id_user)
{

    $sql = "select *from `bill` where id_user=".$id_user;
    // $sql.= " order by ngaydathang desc"
    $listbill = pdo_query($sql);
    // var_dump($listmotsp);
    return $listbill;
}
function hien_bill()
{
    $sql = "select p.img,b.bill_name,b.bill_address,b.bill_tel,b.bill_email,b.bill_pttt,b.ngaydathang,b.bill_status,b.id FROM products p INNER JOIN bill b on p.id = b.id ORDER BY ngaydathang DESC";
    $hienbill = pdo_query($sql);
    // var_dump($hienbill);
    return $hienbill;
}


function bill_chi_tiet($listbilll){
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '<tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng tiền</th>
            </tr>';

    if (!is_null($listbilll) && is_array($listbilll)) {
        foreach ($listbilll as $cart) {
            $hinh = $img_path . $cart['img'];

            $tong += $cart['thanhtien'];

            // if ($del == 1) {
            //     $xoa_td = '<td><a href="index.php?act=delCart&idCart=' . $i . '"><button type="button" class="btn btn-warning">Xóa</button></a></td>';
            // } else {
            //     $xoa_td = '';
            // }
            echo '
            <tr>
                <td>
                    <div class="pr-cart">
                        <div class="img-cart">
                            <img src="' . $hinh . '" width="100%" alt="">
                        </div>
                        <div class="pr-dt">
                            <ul>
                                <li><strong>' . $cart['name'] . '</strong></li>
                               
                                <li><b>Kích cỡ: ' . $cart['quanlity'] . '</b></li>
                                
                            </ul>
                        </div>
                    </div>
                </td>
              
                <li><b>Giá: ' . $cart['price'] . '</b></li>
                <li><b>số lượng: ' . $cart['quanlity'] . '</b></li>
                <td>' . $cart['thanhtien'] . '</td>
            </tr>';
            $i += 1;
        }
    }
    echo '
            <tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>' . $tong . '</td>
            </tr>';
}



// xóa đơn hàng 
function xoadh($id){
    $sql="DELETE FROM bill WHERE `bill`.`id` = $id";
    pdo_execute($sql);
    return;
}
// model của biểu đồ 


?>