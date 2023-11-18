<?php
    include "model/pdo.php";
    include "model/products_detail.php";
    include "global.php";

    include "view/header.php";

    $spView= loadAll_sp_view();
    if(isset($_POST['act']) && ($_POST['act']!="")){
        $act=$_POST['act'];
        switch($act){
            case'':
                //code
                break;
            default:
                include "view/home.php";
        }
    }else{
    include "view/home.php";
    }
    include "view/footer.php";
?>