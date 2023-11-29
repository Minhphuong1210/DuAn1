<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
    <!-- thẻ này là để có kí tự phone -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
    integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- bt5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/bs5.js"></script>
</head>

<body>
  <!-- header  -->
    <div class="container-fluid ">
      <div class=" lienhe">
        <p><i class="fa-solid fa-phone-volume"></i> Hỗ trợ khách hàng: </p>
        <span>1900888</span>
      </div>
    </div>
    <!-- nav -->
    <div class="container ">
        <div class="row mt-3 mb-3 ">
            <div class="col-md-2">
                <div class="logo">
                    <a href="index.php">MALESUITE</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="menu">  
                    <ul>
                     
                        <li><a href="index.php?act=ao">ÁO</a></li>
                        <li><a href="index.php?act=quan">QUẦN</a></li>
                        <li><a href="index.php?act=mybill">ĐƠN HÀNG ĐÃ MUA </a></li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-search">
                <form action="index.php?act=search" method="post" class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Bạn tìm gì..." name="name" />
                    <button class="btn btn-primary" type="submit" name="timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="icons">
                    <ul>
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li> 
                        <li><a href="index.php?act=dangnhap"><i class="fa-regular fa-user"></i></a></li>
                        <li><a href="index.php?act=addcart"><i class="fa-brands fa-opencart"></i></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>

    <div class="line">
      <b>CHÀO MỪNG BẠN ĐẾN VỚI <span>MALESUITE</span> </b>
    </div>