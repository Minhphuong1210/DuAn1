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



// $listmotsp=one_sp($id);
// var_dump($listmotsp);
$listspct = spct();

// $spView= loadAll_sp_view();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'spct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {

                $id = $_GET['idsp'];

                $listmotsp = one_sp($id);
                extract($listmotsp);
                // $sp_cung_loai = load_sanpham_cungloai($id, $iddm);

                include "view/spct.php";
            } else {
                include "view/home.php";
            }
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
                $id = $_POST['id'];
                $img = $_POST['img'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $mau = $_POST['mau'];
                $size = $_POST['size'];
                $soluong = 1;
                $ttien = intval($soluong) * intval($price);
                $spadd = [$id, $name, $img, $price, $soluong, $ttien, $mau, $size];
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
                if(isset($_POST['quenmk']) && ($_POST['quenmk'])){
                    $email=$_POST['email'];
                    $checkemail=checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao= "Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongbao= "Email không tồn tại";
                    }
                }
                include "view/user/quenmk.php";
                break;

        default:
            include "view/home.php";
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>