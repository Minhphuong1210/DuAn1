<?php
    include "model/pdo.php";
    include "model/products_detail.php";
    include "global.php";

    include "view/header.php";

    $spView= loadAll_sp_view();
    if(isset($_POST['act']) && ($_POST['act']!="")){
        $act=$_POST['act'];
        switch($act){
            case'spct':
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $id = $_GET['idsp'];
                    $onesp = one_sp($id);
                    extract($onesp);
                    // $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                  
                    include "view/spct.php";
                } else {
                    include "view/home.php";
                }
                break;
            default:
                include "view/home.php";
        }
    }else{
    include "view/home.php";
    }
    include "view/footer.php";
?>