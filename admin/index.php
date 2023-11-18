<?php
include "../model/pdo.php";
include "../model/categories.php";

include "../model/products_detail.php";
include "header.php";

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
                    echo "The file " . htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }

                $desc = $_POST['desc'];
                $price = $_POST['price'];
                insert_sp($name, $img, $price, $desc, $id_cat);
                $thongbao = "Thêm thành công";
            }

            include "products/addsp.php";
            break;



        case "addColor":
            if (isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                $name = $_POST['name'];
                insert_color($name);
                $thongbao = "Thêm thành công";
            }

            include "products/addColor.php";
            break;

        case "addSize":
            if (isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                $name = $_POST['name'];
                insert_Size($name);
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
            $listsp = sp();
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
            include "products/listSize.php";
            break;

        case "xoasp":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoasp($_GET['id']);
            }
            $listsp = sp();
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
                $name = $_POST['name'];
                $id = $_POST['id'];
                updateColor($name, $id);
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
                $name = $_POST['name'];
                $id = $_POST['id'];
                updateSize($name, $id);
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
                $id_cat = $_POST['id_cat'];
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
                $id = $_POST['id'];
                updatesp($name, $img, $price, $desc, $id_cat, $id);
                $thongbao = "Thêm thành công";
            }
            include "products/listsp.php";
            break;



    }
} else {
    include "home.php";
}
include "footer.php";
?>