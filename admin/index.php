<?php
include "../model/pdo.php";
include "../model/categories.php";
include "../model/user.php";
include "../model/products_detail.php";
include "../model/thongke.php";
include "../model/cart.php";
include "header.php";
$listsp = sp();
$load_tongsanpham = load_tongsanpham();
$load_tongsanphamdaban = load_tongsanphamdaban();
$load_tongtien = load_tongtien();
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        // Danh muc
        case "adddm":
            if (isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                $tenloai = $_POST['tenloai'];
                insert_dm($tenloai);
                $thongbao = "Thêm thành công";
            }

            include "categories/add.php";
            break;

        case "list":
            $listdm = load_all_danhmuc();
            include "categories/list.php";
            break;
        case "xoadm":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoadm($_GET['id']);
            }
            $listdm = load_all_danhmuc();
            include "categories/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $suaDm = load_one_dm($_GET['id']);
            }
            include "categories/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_dm($id, $tenloai);
                $thongbao = "Thêm thành công";
            }
            $listdm = load_all_danhmuc();
            include "categories/list.php";
            break;
        // sp
        case 'addsp':
            if (isset($_POST['themmoi']) && $_POST["themmoi"]) {
                $id_cat = $_POST['id_cat'];
                $name = $_POST['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                $img = $_FILES['img']['name'];
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                $desc = $_POST['desc'];
                $price = $_POST['price'];
                $quality = $_POST['quality'];
                // $price =$_POST['price'];

                $id_color = $_POST['id_color'];
                $id_size = $_POST['id_size'];
                insert_sp($name, $img, $price, $desc, $id_cat, $quality, $id_size, $id_color);
                // insert_sp($name,$img,$price,$desc ,$id_cat);
                // add_spct($quality,$price,$id_size,$id_color);
                $thongbao = "Thêm thành công";
            }

            include "products/addsp.php";
            break;



        case "addColor":
            if (isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                $mau = $_POST['mau'];
                insert_color($mau);
                $thongbao = "Thêm thành công";
            }

            include "products/addColor.php";
            break;

        case "addSize":
            if (isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                $size = $_POST['size'];
                insert_Size($size);
                $thongbao = "Thêm thành công";
            }

            include "products/addSize.php";
            break;
        case "listColor":
            $listcolor = color();
            include "products/listColor.php";
            break;
        case "listSize":
            $listSize = size();
            include "products/listSize.php";
            break;
        case "listsp":
            // $listsp =sp();
            $listspct = spct();
            include "products/listsp.php";
            break;
        case "xoacolor":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoacolor($_GET['id']);
            }
            $listColor = color();
            include "products/listColor.php";
            break;


        case "xoasize":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoasize($_GET['id']);
            }
            $listSize = size();

        case "xoasp":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoasp($_GET['id']);
            }

            $listspct = spct();
            include "products/listsp.php";
            break;

        case 'suacolor':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $listmotcolor = one_color($_GET['id']);

            }
            include "products/updateColor.php";
            break;


        case "updateColor":
            if (isset($_POST["capnhat"]) && $_POST["capnhat"]) {
                $mau = $_POST['mau'];
                $id = $_POST['id'];
                updateColor($mau, $id);
                $thongbao = "Thêm thành công";
            }

            include "products/listColor.php";
            break;

        // sủa kích thước
        case 'suasize':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $listmotsize = one_size($_GET['id']);

            }
            include "products/updatesize.php";
            break;

        case "updateSize":
            if (isset($_POST["capnhat"]) && $_POST["capnhat"]) {
                $size = $_POST['size'];
                $id = $_POST['id'];
                updateSize($size, $id);
                $thongbao = "Thêm thành công";
            }

            include "products/listSize.php";
            break;
        // sủa sản phẩm

        case "suasp":
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $listmotsp = one_sp($_GET['id']);

            }
            include "products/updatesp.php";
            break;

        case "updatesp":
            if (isset($_POST["capnhat"]) && $_POST["capnhat"]) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                $img = $_FILES['img']['name'];
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }

                $desc = $_POST['desc'];
                $price = $_POST['price'];
                $id_cat = $_POST['iddm'];
                updatesp($id, $name, $img, $price, $desc, $id_cat);
                $thongbao = "Sửa thành công";
            }
            // header("location:products/listsp.php");
            include "products/listsp.php";
            break;
        case "suaspct":
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $listmotsp = one_sp($_GET['id']);
            }
            include "products/updatespct.php";
            break;
        // sủa sản phẩm chi tiết
        case "updatespct":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $quality = $_POST['quality'];
                $price = $_POST['price'];
                $id_pro = $_POST['id_pro'];
                $id_color = $_POST['idcolor'];
                $id_size = $_POST['idsize'];
                updatespct($quality, $price, $id_pro, $id_size, $id_color);
            }
            include "products/listsp.php";
            break;

        case "listkh":
            $listkh = load_kh();
            include "users/listkh.php";
            break;
        case "listdh":
            $hiendh = hien_bill();
            $bill_detail = bill_detail();
            include "giohang/listdh.php";
            break;
        case "xoatk":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoatk($_GET['id']);

            }
            $listkh = load_kh();
            include "users/listkh.php";
            break;
        case "xoadh":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoadh($_GET['id']);

            }
            $hiendh = hien_bill();
            include 'giohang/listdh.php';
            break;
        case "suadh":
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $hien1bill = hien1bill($_GET['id']);
            }
            include "giohang/update.php";
            break;
        case "capnhat":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $bill_status = $_POST['bill_status'];
                $id = $_POST['id'];
                capnhattt($id, $bill_status);
            }
            include 'giohang/listdh.php';
            break;
        case "thongke":
            $thongke = thongke();

            include "thongke/bang.php";
            break;
        case "bieudo":
            $load_thongke = load_thongke();
            include "thongke/bieudo.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
?>