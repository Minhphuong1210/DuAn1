<div class="container m-5">
  <h1 class="titleAD">DANH MỤC</h1>
        <form action="">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td>MÃ DANH MỤC</td>
                <td>TÊN DANH MỤC</td>
                <td>CHÚC NĂNG</td>
              </tr>
            </thead>
            <tbody>
            <?php
              $listdm= load_all_danhmuc();
              foreach ($listdm as $dm){
                $suadm="index.php?act=suadm&id=".$dm['id'];
                $xoadm="index.php?act=xoadm&id=".$dm['id'];
                ?>
                <tr>
                <th><?php echo $dm['id']?></th>
                <th><?php echo $dm['name']?></th>
                <th><button type="button" class="btn btn-primary"><a href="<?php echo $suadm ?>">SỬA</a></button>
                  <button type="button" class="btn btn-primary"><a href="<?php echo $xoadm ?>">XÓA</a></button></th>
                </tr>
                
                <?php
              }
              ?>
            </tbody>
          </table>
          
          <a href="index.php?act=adddm"> <input type="button"class="btn btn-primary input" name="" id="" value="Nhập thêm"></a>

          
        </form>
  </div>