<?php
    $conn = new mysqli("localhost","root","","dinhduy");
    $sql ="SELECT * FROM `item` where 1";
    $sql2 ="SELECT * FROM `shirt` where 1";

    $result = mysqli_query($conn,$sql);
    $data  = mysqli_fetch_all($result,1);

    $result2 = mysqli_query($conn,$sql2);
    $data2  = mysqli_fetch_all($result2,1);

    // if(!isset($_GET["registration-email"])){
        
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,152;0,500;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/gird.css">   
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
<div class="app">
    <header class="header">  
        <div class="grid wide">
            <nav class="header__navbar">
                <ul class="header__navbar-list">
                    <li  class="header__navbar-item header__navbar-item--space" >
                        Vào cửa hàng Đình Duy
                    <div class="header__qr">
                        <img src="./assets/img/prr-code.png" alt="Qr code" class='header__qr-img'>
                        <div class="header__qr-app">
                            <a href="">
                                <img class='header__qr-app-link' src="./assets/img/pr-goole.png" alt="google-app">
                            </a>
                            <a href="">
                                <img class='header__qr-app-link' src="./assets/img/pr-apple.png" alt="ios">
                            </a>
                        </div>
                    </div>
                    </li>
                    <li  class="header__navbar-item">
                    <span class='header__navbar-title--no-pointer'>Kết nối</span> 
                    <a href="https://www.facebook.com/tatsu.michio.5/" class='header__navbar-icon-link'><i class="header__navbar-icon fab fa-facebook"></i></a>
                    <a href="" class='header__navbar-icon-link'><i class="header__navbar-icon fab fa-instagram-square"></i></a>
                    <a href="" class='header__navbar-icon-link'><i class="header__navbar-icon fab fa-facebook-messenger"></i></a>
                    </li>
                </ul>
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <a href="" class="click header__navbar-item-link">
                        <i class="header__navbar-icon fas fa-bell"></i>
                        Thông báo
                    </a>
                        <div class="header__notify">
                            <div  class="header__notify-triangle"></div>

                            <header class="header__notify-header">
                            <h3 class='hh'>Thông Báo　</h3>
                            </header>
                        <ul class='header__notify-list'>
                            <li class='header__notify-item'>
                                <a href="" class='header__notify-link header__notify-link-view'>
                                    <img class='header__notify-img' src="./assets/img/242770391_3026110897660861_4932416643685271442_n.jpg" alt="" width="40px" height="30px">
                                    <div class="header__notify-info">
                                        <span class="header__notify-name"><div class='fontz'>Giày Dior siêu cấp</div></span>
                                        <span class="header__notify-descr">Chất vải mềm min, êm chân</span>
                                    </div>
                                </a>
                            </li>
                            <li class='header__notify-item'>
                                <a href="" class='header__notify-link header__notify-link-view'>
                                    <img class='header__notify-img' src="./assets/img/ao mtp.jpg" alt="">
                                    <div class="header__notify-info">
                                        <span class="header__notify-name"><div class='fontz'>Giày Dior siêu cấp</div></span>
                                        <span class="header__notify-descr">Chất vải mềm min, êm chân</span>
                                    </div>
                                </a>
                            </li>
                            <li class='header__notify-item'>
                                <a href="" class='header__notify-link header__notify-link-view'>
                                    <img class='header__notify-img' src="./assets/img/ao phong.jpg" alt="">
                                    <div class="header__notify-info">
                                        <span class="header__notify-name"><div class='fontz'>Giày Dior siêu cấp Giày Dior siêu cấp Dior siêu cấp</div></span>
                                        <span class="header__notify-descr">Chất vải mềm min, êm chân</span>
                                    </div>
                                </a>
                            </li>
                                                        <li class='header__notify-item'>
                                <a href="" class='header__notify-link header__notify-link-view'>
                                    <img class='header__notify-img' src="./assets/img/qao gucci.jpg" alt="">
                                    <div class="header__notify-info">
                                        <span class="header__notify-name"><div class='fontz'>Giày Dior siêu cấp</div></span>
                                        <span class="header__notify-descr">Chất vải mềm min, êm chân</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="header__notify-all">
                            <a href="" class='header__notify-font'>xem tất cả</a>  
                        </div>
                        </div> 
                    </li>  
                    <li class="header__navbar-item">
                    <a href="" class="header__navbar-item-link">
                    <i class="header__navbar-icon fas fa-question"></i>
                    Trợ giúp</a>
                    </li>
                    <label for="name" class="header__navbar-item header__navbar-item--strong header__navbar-item--space header__navbar-item-registration">Đăng ký</label>
                    <label  for="name2" class="header__navbar-item header__navbar-item--strong header__navbar-item-login">Đăng nhập</label>
                    <!-- <li class="header__navbar-item  login_user">
                    <a href="" class="header__navbar-item-link">
                        <img class='login_user-img' src="./assets/img/dinh duy.jpg" alt="">
                        <span class="login_user-name">Nguyễn Đình Duy</span>
                        <ul class="list_login">
                            <li class="list_login-item">
                                Tài khoản của tôi
                            </li>
                            <li class="list_login-item">
                                Địa chỉ của tôi
                            </li>
                            <li class="list_login-item">
                                Đơn mua
                            </li>
                            <li class="list_login-item font-width">
                                Đăng xuất
                            </li>
                        </ul>
                    </a>
                    </li> -->
                </ul>
            </nav>
            <div class="header_logo" >
                <div class="header_logo-icon">
                    <img src="./assets/img/logo.png.crdownload" alt="" width="100px" height="80px">
                </div>
                <div class="header_logo-input">
                    <div class="header_logo-serach-model">
                    <input type="text" class="header_logo-serach" placeholder="Nhập để tìm sản phẩm ...">
                    <div class="search-history">
                        <div class="search-history-title">Lịch sử tìm kiếm</div>
                        <a class='a' href=""><p class="search-history-content">quần áo gucci</p></a>
                        <a class='a' href=""><p class="search-history-content">giày jordan</p></a>

                    </div>
                    </div>
                    <span class="space2"></span>
                    <div class="header_logo-select">
                        <span class="header_logo-select-font">Trong shop</span>
                        <i class=" fas fa-check"></i>
                        <ul class="header_logo-select-item">
                            <li class="select-item">
                                <a href="" class="">Trong shop <i  style='color:orange'class=" fas fa-check" ></i>
                                </a>
                            </li>
                            <li class="select-item" >
                                <a href="" class="">Ngoài shop <i style='color:orange' class=" fas fa-check"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="search-enter">                       
                            <i class="search__edit fas fa-search"></i>

                    </a>
                </div>
                <div class="header_logo-cart">
                            <div class="cart-height-model">
                                <i class="cart-height fas fa-baby-carriage"></i>    
                                <span class="cart-quantity">3</span>
                                <!-- <div class="no-cart">
                                         <h3>Chưa có sản phẩm</h3>
                                        <img src="./assets/img/no-cartttt.png" alt="" class="no-cart-img">
                                </div> -->
                                    <div class="cart_model">
                                        <div class="cart_model-header">
                                            <span class="cart_model-font">Sản Phẩm Đã Thêm</span>
                                        </div>
                                       
                                       
                                        <div class="cart_model-body">

                                            <!-- <div class="cart_model-body-item">
                                                <img class=' cart_model-body-item-size   ' src="./assets/img/ghế.png " alt="">
                                                <div class="cart_model-body-content">
                                                    <div class="cart_top">
                                                        <h5 class="top-content">Ghế gaming cao cấp</h5>
                                                        <span class="top-price">1.000.000</span>
                                                    </div>

                                                    <div class="cart_bottom">
                                                            <span class="bottom-content">Phân loại hàng : Cao cấp</span>
                                                            <a class="remove_cart" href="">Xóa</a>
                                                    </div>
                                                </div>
                                                <span class="quantity">x <m class="quantity-font">2</m></span>
                                            </div> -->

                                            

                                            


                                        </div>

                                        <div class="cart_model-show">
                                            <a class="cart_model-show-button" href="">Xem Giỏ Hàng </a>
                                        </div>

                                    </div>

                            </div>           
                </div>
            </div>
        </div>
    </header>
<div class="content">
                <div class="gird wide color hiden">
                        <div class="row">
                            </div>
                </div>
    
</div>
       <footer class="footer">

       </footer>

   </div>
