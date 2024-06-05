<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


<div class="container-fluid">
    <div class="container mt-4">
        <h2 style="text-align: center;">THỐNG KÊ ĐƠN HÀNG</h2>
    </div>
    <div class="container-fluid box1">
        <div class="row">
          <?php
         $load_tongsanpham=load_tongsanpham();
         foreach ($load_tongsanpham as $tongsp) {
          extract($tongsp);
         }
          ?>
          
        
            <div class="col-md-1 "></div>
            <div class="col-md-3 bg-light m-1 card">
                <div class="box1">
                <h3 style="text-align: center;color:#3081D0">Tổng sản phẩm</h3>
                <h1 style="text-align: center;color:#EEC759"><?php echo $tongsp['tongsanpham']?></h1>
                </div>
            </div>
            <?php
            $load_tongsanphamdaban=load_tongsanphamdaban();
            foreach ($load_tongsanphamdaban as $tong){
              extract($tong);
            }
            ?>
            <div class="col-md-4 bg-light box1 m-1 card">
                <div class="box1">
                <h3 style="text-align: center;color:#3081D0">Tổng sản phẩm đã bán</h3>
                <h1 style="text-align: center;color:#EEC759"><?php echo $tong['tongsanpham']?></h1>
                </div>
                
            </div>
            <?php
            $load_tongtien=load_tongtien();
            foreach ($load_tongtien as $tongtien){
                      
              ?>
              <div class="col-md-3 bg-light box1 m-1 card">
                <div class="box1">
                <h3 style="text-align: center;color:#3081D0">Tổng tiền</h3>
                <h1 style="text-align: center;color:#EEC759"><?php echo $tongtien['tongtien'];            
                ?></h1>
                </div>
                
              </div>
              <?php
                          
                        };
            
            
            ?>
            
          
        </div>
    </div>
    <div id="chart" style="height: 250px; "></div>

    <script>
        $(document).ready(function(){
            var sampleData=[
                <?php 
            $load_thongke=load_thongke();
                foreach ($load_thongke as $a) :
                    extract($a);
                    // var_dump($a);
                    ?>
                    {
                        year: '<?php echo $ngaydathang;?>',
                        value: ' <?php echo $tongtien;?>',
                        danhthu: '<?php echo $soluongban;?>',
                    },
                <?php endforeach; ?>
            ];

            Morris.Bar({
                element: 'chart',
                data: sampleData,
                xkey: 'year', 
                ykeys: ['value','danhthu'],
                labels: ['Giá bán', 'Số lượng đã bán'],
                hover: 'auto'
            });
        });
    </script>
</div>