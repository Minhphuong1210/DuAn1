<!-- HIẾU -->
<?php
    function insert_dm($tenloai){
        $sql="insert into categories(name) values('$tenloai')";
        pdo_execute($sql);
        return;     
    }
    function load_all_danhmuc(){
        $sql="SELECT * FROM categories ORDER BY id DESC";
        $listdm=pdo_query($sql);
        return $listdm;
    }
    function xoadm($id){
        $sql="DELETE FROM categories WHERE `categories`.`id` = $id";
        pdo_execute($sql);
        return;
    }
    function load_one_dm($id){
        $sql="SELECT * FROM categories WHERE id=".$id;
        $suaDm=pdo_query_one($sql);
        return $suaDm;
    }

    function update_dm($id,$tenloai){
        $sql="UPDATE categories SET NAME='".$tenloai."' WHERE id=".$id;

        pdo_execute($sql);
    }
?>