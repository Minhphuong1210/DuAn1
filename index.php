<?php
    include "model/pdo.php";
    include "model/products_detail.php";
    include "global.php";
    include "view/header.php";
    // $listmotsp=one_sp($id);
    // var_dump($listmotsp);
    $listspct=spct();
  
    // $spView= loadAll_sp_view();
    if(isset($_GET['act']) && ($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case'spct':
              
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



            
            default:
                include "view/home.php";
        }
    }else{
    include "view/home.php";
    }
    include "view/footer.php";
?>