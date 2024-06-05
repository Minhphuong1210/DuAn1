<?php
session_start();
if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];
include "model/pdo.php";
include "model/products_detail.php";
include "model/user.php";
include "model/cart.php";
include "global.php";
include "view/header.php";


$list_color = color();
$list_size = size();
// $listmotsp=one_sp($id);
// var_dump($listmotsp);
$listspct = spct();

// $spView= loadAll_sp_view();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {

                $id = $_GET['idsp'];

                $listmotsp = one_sp($id);
                $one=loadOne_sp($id);
                extract($one);
                // extract($listmotsp);
                $sp_cung_loai = load_sp_cungloai($id,$id_cat);

                include "view/spct.php";
            } else {
                include "view/home.php";
            }
            break;

        case 'ao':
           
            include "view/ao.php";
            break;

        case 'quan':
            $listsanpham = loadall_sanphamquan();
            include "view/quan.php";
            break;
        
        case 'phukien':
            $listsanpham = loadall_sanphamphukien();
            include "view/phukien.php";
            break;

        case 'search':
            if (isset($_POST['timkiem'])) {
                $name = $_POST['name'];
                $timkiem_sp = search($name);
            }
            include 'view/sanphamSearch.php';
            break;

        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky']) != "") {
                $user = $_POST['user'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_user($user, $sdt, $email, $pass);
                $thongbao = "Đăng ký thành công";
            }
            include "view/user/dangky.php";
            break;

        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check = checkuser($user, $pass);
                if (is_array($check)) {
                    $_SESSION['user'] = $check;
                    header("Location: index.php?act=dangnhap");
                } else {
                    $thongbao = "Tài khoản không tồn tại";
                }
            }
            include "view/user/dangnhap.php";
            break;

        case "suatk":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $id = $_POST['id'];
                update_user($id, $user, $sdt, $email, $pass);
                $_SESSION['user'] = checkuser($user, $pass);
                header("Location: index.php?act=suatk");
            }
            include "view/user/suatk.php";
            break;

        case "thoat":
            session_unset();
            header("Location: index.php?act=dangnhap");
            break;
        // case 'viewCart':
        //     include "view/giohang/viewCart.php";
        //     break;
        case 'viewCart':
            include "view/giohang/viewCart.php";
            break;

        case "addcart":
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                foreach($list_color as $color){
                    if ($color['id'] == $_POST['id_color']) {
                        $name_color = $color['mau'];
                        break;
                    }
                }
                foreach($list_size as $size){
                    if ($size['id'] == $_POST['id_size']) {
                        $name_size = $size['size'];
                        break;
                    }
                }
                $id = $_POST['id'];
                $img = $_POST['img'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $id_mau = $_POST['id_color'];
                $id_size = $_POST['id_size'];
                $soluong = $_POST['soluong'];
                $ttien = intval($soluong) * intval($price);
                $spadd = [$id, $name, $img, $price, $soluong, $ttien, $id_mau, $id_size,$name_color, $name_size];
                array_push($_SESSION['mycart'], $spadd);

            }

            include "view/giohang/viewCart.php";
            break;


        case 'delCart':
            if (isset($_GET['idCart'])) {
                array_splice($_SESSION['mycart'], $_GET['idCart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            // include "view/giohang/viewCart.php";
            header('Location:index.php?act=viewCart');
            break;
        case "quenmk":
            if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email không tồn tại";
                }
            }
            include "view/user/quenmk.php";
            break;
        case "bill":
            include "view/giohang/bill.php";
            break;
        case "billcomfirm":
            if (isset($_POST["dongydathang"]) && ($_POST["dongydathang"])) {
                if (isset($_SESSION['user'])) {
                    $id_user = $_SESSION['user']['id'];
                } else {
                    $id_user = 0;
                }
                $email = $_POST["email"];
                $name = $_POST["name"];
                $address = $_POST["address"];
                $tel = $_POST['phone'];
                $ngaydathang = date('d/m/Y');
                $total = tongdonhang();
                $pttt = $_POST['pttt'];
                $idbill = insert_bill($id_user, $name, $email, $address, $tel, $pttt, $ngaydathang, $total);

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
                // xóa ssesion ;
                $_SESSION['cart'] = [];
                $billct = loadone_cart($idbill);
                $listbill = loadone_bill($idbill);
                //    $hienbill=bill_chi_tiet($listbilll);
                //insert into cái bảng card lấy id là $session['mycart']
            }
            include "view/giohang/billcomfirm.php";
            break;
        case "mybill":
            $_SESSION['user'];

            $id_user = $_SESSION['user']['id'];
            // var_dump($_SESSION['user']['id']);
            $listbill = loadall_bill($id_user);

            include "view/giohang/mybill.php";
            break;
            //đang sửa
        case "suadhus":
            if (isset($_GET['id']) && isset($_GET['id_user']) && ($_GET['id'] > 0)) {
                $list_tt_bill = load_tt_bill($_GET['id'], $_GET['id_user']);
            }
            include "view/giohang/updategh.php";
            break;
        case "capnhatbill":
            
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $bill_status = $_POST['bill_status'];
                $id = $_POST['id'];
                $id_user=$_POST['id_user'];
                capnhattt($id,$bill_status);
            }
            // include "view/giohang/mybill.php";
            header('Location:index.php?act=mybill');
            break;
        default:
            include "view/home.php";
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>