<div class="main">
    <div class="container-fluid lineTT  ">
        <div class="container bg-white">
            <div class="row rowTT">
                <div class="col-md-6 boxLeft ">

                    <div class="box-TT">
                        <h3>Cảm ơn đã mua hàng </h3>
                    </div>
                    <?php
                    //  $listbill= loadone_bill($id_bill);
                    if (isset($listbill) && is_array($listbill)) {

                        extract($listbill);
                    }

                    ?>


                    <div class="form-dn">
                        <form action="index.php?act=billcomfirm" method="post">
                            <b>Thông tin đặt hàng</b>


                            <div class="dong dongtt">
                                <label>Họ tên
                                    <?php $listbill['bill_name'] ?>
                                </label><br>

                            </div>

                            <div class="dong">
                                <label>Địa chỉ
                                    <?php $listbill['bill_address'] ?>
                                </label><br>

                            </div>

                            <div class="dong">
                                <label>Email
                                    <?php $listbill['bill_email'] ?>
                                </label><br>

                            </div>
                            <div class="dong">
                                <label>Điện thoại
                                    <?php $listbill['bill_tel'] ?>
                                </label><br>

                            </div>
                            <b>2.Thông tin đơn hàng</b>
                            <div class="dong">
                                <p>mã đơn hàng
                                    <?php $listbill['id'] ?>
                                </p>
                            </div>
                            <div class="dong">
                                <p>ngày đặt hàng
                                    <?php $listbill['ngaydathang'] ?>
                                </p>
                            </div>
                            <div class="dong">
                                <p>Tổng đơn hàng
                                    <?php $listbill['total'] ?>
                                </p>
                            </div>
                            <div class="dong">
                                <p>Phương thức thanh toán
                                    <?php $listbill['bill_pttt'] ?>
                                </p>
                            </div>

                            <div class="thanhtien">
                                <div class="text">
                                    <span>THÀNH TIỀN</span>
                                </div>
                                <div class="price">
                                    <span></span>
                                </div>
                            </div>

                            <div class="dong">
                                <input type="submit" value="ĐẶT HÀNG" class="submit" name="dongydathang">
                            </div>


                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ttdh">
                        <h4 class="title-TT">Chi tiết đơn hàng </h4>
                        <table class="table">
                            <thead>

                            </thead>
                            <tbody>
                                <tr>
                                    <th>Stt</th>
                                    <th>Hình </th>
                                    <th>Sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                                <?php bill_chi_tiet($listbilll); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>