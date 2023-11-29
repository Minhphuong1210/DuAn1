<div class="container m-5">
  <form action="">
    <table class="table table-bordered">
      <tr>


        <th>Tài khoản</th>
        <th>Mật khẩu</th>
        <th>Email</th>
        <th>SĐT</th>
        <th>thao tác </th>


      </tr>
      <?php
      $listkh = load_kh();
      foreach ($listkh as $tk) {
        $xoatk="index.php?act=xoatk&id=".$tk['id'];
        // var_dump($tk);
        ?>
        <tr>
          <td>
            <?php echo $tk['name'] ?>
          </td>
          <td>
            <?php echo $tk['pass'] ?>
          </td>
          <td>
            <?php echo $tk['email'] ?>
          </td>
          <td>
            <?php echo $tk['phone'] ?>
          </td>
          <td>
            <a href="<?php echo $xoatk ?>"><input type="button" value="xóa"></a>
          </td>
        </tr>


        <?php
      }
      ?>
    </table>




  </form>
</div>