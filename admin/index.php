<?php
    include "../model/pdo.php";
    include "../model/categories.php";
    include "../model/products.php";
    include "header.php";
 
    if (isset($_GET["act"])) {
        $act=$_GET["act"];
        switch ($act) {
// Danh muc
            case "adddm":
                if(isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                    $tenloai=$_POST['tenloai'];
                    insert_dm($tenloai);
                    $thongbao="Thêm thành công";
                }
                
                include "categories/add.php";
                break;

            case "list":  
                $listdm=load_all_danhmuc();
                    include "categories/list.php";
                    break;
            case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    xoadm($_GET['id']);
                }
                $listdm=load_all_danhmuc();
                include "categories/list.php";
                break;
        
            case 'suadm':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $suaDm=load_one_dm($_GET['id']);
                    }
                    include "categories/update.php";
                    break;    
                
            case 'updatedm':
                    if(isset($_POST['capnhat']) && $_POST['capnhat']){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_dm($id,$tenloai);
                        $thongbao="Thêm thành công";
                    }
                    $listdm=load_all_danhmuc();
                    include "categories/list.php";
                    break;
            case 'addsp':
                    if(isset($_POST['themmoi']) && $_POST["themmoi"]){
                        $id_cat=$_POST['id_cat'];
                        $name=$_POST['name'];
                        $target_dir = "upload/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        $img=$_FILES['img']['name'];
                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }

                        $desc =$_POST['desc'];
                       
                        insert_sp($name,$img,$desc,$id_cat);
                        $thongbao="Thêm thành công";
                        }
                    
                        include "products/addsp.php";
                        break;



            case "addColor":
                if(isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                    $mau=$_POST['mau'];
                
                    insert_color($mau);
                     $thongbao="Thêm thành công";
                    }
                        
                        include "products/addColor.php";
                        break;

             case "addSize":
                if(isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                     $so=$_POST['so'];
                    insert_Size($so);
                    $thongbao="Thêm thành công";
                    }
                                    
                    include "products/addSize.php";
                     break;
         }
               
        }

     else{
    include "home.php";
    }
    include "footer.php";
?>