<?php
//  $_SESSION['user'];
//  $id_user = $_SESSION['user']['id'];
//  $list_tt_bill = load_tt_bill($_GET['id'], $_GET['id_user']);

// if(is_array($list_tt_bill)) {
//    extract($list_tt_bill);
//     echo "<pre>";
//     print_r($list_tt_bill);
//     echo"</pre>";
// }




$hien1bill = hien1bill($_GET['id']);
if (is_array($hien1bill)) {
   extract($hien1bill);
   //  echo "<pre>";
   //  print_r($hien1bill);
   //  echo"</pre>";
}
?>


<div class="container">
<div class="row">
   <div class="row frmtitle">
      <h1>Cập nhật Trạng thái đơn hàng</h1>
   </div>
   <div class="row fromcontent">
      <form action="index.php?act=capnhatbill" method="post">
         <input type="hidden" name="id" id="" value="<?php echo $id ?>">
         <input type="hidden" name="id_user" value="<?php echo $id_user?>">
         <div class="row mb">
            Tên người dùng <br>
            <input type="text" name="maloai" value="<?php echo $bill_name ?>" disabled>
         </div>
         <div class="row mb">
            địa chỉ <br>
            <input type="text" name="size" id="" value="<?php echo $bill_address ?>" disabled>
         </div>
         <div class="row mb">
            email <br>
            <input type="text" name="size" id="" value="<?php echo $bill_email ?>" disabled>
         </div>
         <div class="row mb">
            Số điện thoại <br>
            <input type="text" name="size" id="" value="<?php echo $bill_tel ?>" disabled>
         </div>

         <div class="row mb">
            Ngày đặt hàng <br>
            <input type="text" name="size" id="" value="<?php echo $ngaydathang ?>" disabled>
         </div>
         <div class="row mb">
            Phương thức thanh toán <br>
            <input type="text" name="size" id="" value="<?php echo $bill_pttt ?>" disabled>
         </div>
         <div class="row mb">
            Trạng thái đơn hàng <br>
            <select name="bill_status" id="">
    <!-- <option value="">Đơn mới</option> -->
    <?php
    $bill_detail = bill_detail();
    foreach ($bill_detail as $detail) {
        $selected = ($detail['id'] == $bill_status) ? 'selected' : '';
        $disabled = ($detail['id'] == 1) ? 'disabled' : ''; 

        ?>
        <?php if($bill_status != ''):?>
        <option value="<?php echo $detail['id'] ?>" <?php echo $selected . ' ' . $disabled; ?>>
            <?php echo $detail['status'] ?>
        </option>
        <?php else: ?>
      <option value="" >Đơn hàng đang chờ xác nhận</option>
        <?php break; endif;
    }
    ?>
</select>
         </div>
         <div class="row mb">
            <input type="hidden" name="id_user" value="<?php if(isset($id_user) && ($id_user) > 0)
               echo $id; ?>">
            <input type="hidden" name="id" value="<?php if(isset($id) && ($id) > 0)
               echo $id; ?>">
            <input type="submit" name="capnhat" id="" value="Cập nhật">
            <input type="reset" name="" id="" value="Nhập lại">

         </div>
         <?php
         if(isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
         ?>
      </form>
   </div>
</div>
</div>
</div>