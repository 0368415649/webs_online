<?php
    $conn = new mysqli("localhost","root","","dinhduy");
    if(isset($_POST["remove_cart"])){
                $sqlx ="DELETE FROM `cart` WHERE id = '".$_POST["remove_cart"]."'";
                mysqli_query($conn,$sqlx);
    }
    // if(isset($_POST["more-link"])){
    //     echo $_POST["more-link"].'</br>'.$_POST["more-name"].'</br>'.$_POST["more-price"].'</br>'.$_POST["more-category"].'</br>'.$_POST["more-quantily"];
    // }else{
    //     echo "!";
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,152;0,500;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/gird.css">   
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Document</title>
</head>
<?php
    // $sql ="SELECT * FROM `cart` where 1";
    // $result = mysqli_query($conn,$sql);
    // $data  = mysqli_fetch_all($result,1);
    // $count = count($data);
    if(isset($_POST["more-link"]) && isset($_POST["more-name"]) && isset($_POST["more-price"]) && isset($_POST["more-category"]) && isset($_POST["more-quantily"])  ){
        // $more_id = $_POST["more-name"];
        $more_name = $_POST["more-name"];
        $more_link =$_POST["more-link"];
        $more_price =$_POST["more-price"];
        $more_quantily =$_POST["more-quantily"];
        $more_category =$_POST["more-category"];
        $sql4 ="INSERT INTO `cart`(`name`, `link`, `price`, `quantily`, `category`) VALUES  ('".$more_name."','".$more_link."','".$more_price."','".$more_quantily."','".$more_category."')";
        mysqli_query($conn,$sql4);
        echo '<script>';  
        echo  ' alert("b???n ???? th??m th??nh c??ng >.<")';  
        // echo  ' window.location = "http://localhost/hoc%20html/"';  

        
        echo '</script>';  
    }
?>
<body>
<div class="app">
    <header class="header">  
        <div class="grid wide">
            <nav class="header__navbar">
                <ul class="header__navbar-list">
                    <li  class="header__navbar-item header__navbar-item--space" >
                        V??o c???a h??ng ????nh Duy
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
                    <span class='header__navbar-title--no-pointer'>K???t n???i</span> 
                    <a href="https://www.facebook.com/tatsu.michio.5/" class='header__navbar-icon-link'><i class="header__navbar-icon fab fa-facebook"></i></a>
                    <a href="" class='header__navbar-icon-link'><i class="header__navbar-icon fab fa-instagram-square"></i></a>
                    <a href="" class='header__navbar-icon-link'><i class="header__navbar-icon fab fa-facebook-messenger"></i></a>
                    </li>
                </ul>
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <a href="" class="click header__navbar-item-link">
                        <i class="header__navbar-icon fas fa-bell"></i>
                        Th??ng b??o
                    </a>
                        <div class="header__notify">
                            <div  class="header__notify-triangle"></div>

                            <header class="header__notify-header">
                            <h3 class='hh'>Th??ng B??o???</h3>
                            </header>
                        <ul class='header__notify-list'>
                            <div class="not_anunsu">Ch??a c?? th??ng b??o</div>
                            <!-- <li class='header__notify-item'>
                                <a href="" class='header__notify-link header__notify-link-view'>
                                    <img class='header__notify-img' src="./assets/img/242770391_3026110897660861_4932416643685271442_n.jpg" alt="" width="40px" height="30px">
                                    <div class="header__notify-info">
                                        <span class="header__notify-name"><div class='fontz'>Gi??y Dior si??u c???p</div></span>
                                        <span class="header__notify-descr">Ch???t v???i m???m min, ??m ch??n</span>
                                    </div>
                                </a>
                            </li>
                            <li class='header__notify-item'>
                                <a href="" class='header__notify-link header__notify-link-view'>
                                    <img class='header__notify-img' src="./assets/img/ao mtp.jpg" alt="">
                                    <div class="header__notify-info">
                                        <span class="header__notify-name"><div class='fontz'>Gi??y Dior si??u c???p</div></span>
                                        <span class="header__notify-descr">Ch???t v???i m???m min, ??m ch??n</span>
                                    </div>
                                </a>
                            </li> -->
                        </ul>
                        <div class="header__notify-all">
                            <a href="" class='header__notify-font'>xem t???t c???</a>  
                        </div>
                        </div> 
                    </li>  
                    <li class="header__navbar-item">
                    <a href="" class="header__navbar-item-link">
                    <i class="header__navbar-icon fas fa-question"></i>
                    Tr??? gi??p</a>
                    </li>
                    <label for="name" class="header__navbar-item header__navbar-item--strong header__navbar-item--space header__navbar-item-registration">????ng k??</label>
                    <label  for="name2" class="header__navbar-item header__navbar-item--strong header__navbar-item-login">????ng nh???p</label>
                    <!-- <li class="header__navbar-item  login_user">
                    <a href="" class="header__navbar-item-link">
                        <img class='login_user-img' src="./assets/img/dinh duy.jpg" alt="">
                        <span class="login_user-name">Nguy???n ????nh Duy</span>
                        <ul class="list_login">
                            <li class="list_login-item">
                                T??i kho???n c???a t??i
                            </li>
                            <li class="list_login-item">
                                ?????a ch??? c???a t??i
                            </li>
                            <li class="list_login-item">
                                ????n mua
                            </li>
                            <li class="list_login-item font-width">
                                ????ng xu???t
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
                    <input type="text" class="header_logo-serach" placeholder="Nh???p ????? t??m s???n ph???m ...">
                    <div class="search-history">
                        <div class="search-history-title">L???ch s??? t??m ki???m</div>
                        <a class='a' href=""><p class="search-history-content">qu???n ??o gucci</p></a>
                        <a class='a' href=""><p class="search-history-content">gi??y jordan</p></a>

                    </div>
                    </div>
                    <span class="space2"></span>
                    <!-- <div class="header_logo-select">
                        <span class="header_logo-select-font">Trong shop</span>
                        <i class=" fas fa-check"></i>
                        <ul class="header_logo-select-item">
                            <li class="select-item">
                                <a href="" class="">Trong shop <i  style='color:orange'class=" fas fa-check" ></i>
                                </a>
                            </li>
                            <li class="select-item" >
                                <a href="" class="">Ngo??i shop <i style='color:orange' class=" fas fa-check"></i>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <a href="" class="search-enter">                       
                            <i class="search__edit fas fa-search"></i>

                    </a>
                </div>
                <div class="header_logo-cart">
                            <div class="cart-height-model">
                                <i class="cart-height fas fa-baby-carriage"></i>    
                                <span  class="cart-quantity"></span>
                                <!-- <div class="no-cart">
                                         <h3>Ch??a c?? s???n ph???m</h3>
                                        <img src="./assets/img/no-cartttt.png" alt="" class="no-cart-img">
                                </div> -->
                                    <div  id="cart_model" class="cart_model">
                                        <div class="cart_model-header">
                                            <span class="cart_model-font">S???n Ph???m ???? Th??m</span>
                                        </div>
                                       
                                       
                                        <div class="cart_model-body">

                                            <!-- <div class="cart_model-body-item">
                                                <img class=' cart_model-body-item-size   ' src="./assets/img/gh???.png " alt="">
                                                <div class="cart_model-body-content">
                                                    <div class="cart_top">
                                                        <h5 class="top-content">Gh??? gaming cao c???p</h5>
                                                        <span class="top-price">1.000.000</span>
                                                    </div>

                                                    <div class="cart_bottom">
                                                            <span class="bottom-content">Ph??n lo???i h??ng : Cao c???p</span>
                                                            <a class="remove_cart" href="">X??a</a>
                                                    </div>
                                                </div>
                                                <span class="quantity">x <m class="quantity-font">2</m></span>
                                            </div> -->

                                            

                                            


                                        </div>

                                        <div class="cart_model-show">
                                            <a class="cart_model-show-button" href="">Xem Gi??? H??ng </a>
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
                                <div class="col l-2 c-2 pr">
                                        <div class="gird2">
                                            <h3 class="gird2_font">Danh M???c S???n Ph???m</h3>
                                            <ul class="gird2_list">
                                                    <li class="gird2_item gird2_item-trousers">Qu???n</li>
                                                    <li class="gird2_item gird2_item-shirt">??o</li>
                                                    <!-- <li class="gird2_item">Gi??y</li>
                                                    <li class="gird2_item">Th???t L??ng</li>
                                                    <li class="gird2_item">M??</li>
                                                    <li class="gird2_item">T???t</li> -->
                                                </ul>
                                        </div>
                            
                                    </div>
                            

                                <div class="col l-10  c-10">
                                            <div class="row">                                     
                                                    <div class="gird10_header_left col l-12  c-12">
                                                            <ul class="gird10_header_left-list">   
                                                                <li class="gird10_header_left-item gird10_none">S???p x???p theo</li>
                                                                <li class="gird10_header_left-item"><a class='gird10_header_left-item-link' href="">  Ph??? bi???n</a>  </li>
                                                                <li class="gird10_header_left-item"><a class='gird10_header_left-item-link' href="">   M???i Nh???t</a></li>
                                                                <li class="gird10_header_left-item gird10_header_left-item-1"><div class='gird10_header_left-item-link '   onclick=show_sold()>  B??nch???y</div> </li>
                                                                <li class="gird10_header_left-item gia">  Gi?? <i class="down-icon fas fa-angle-down"></i></a>
                                                                <div class="gird10_header_left-item-price">
                                                                    <a class="gird10_header_left-item-price-item" href="">Gi??:Th???p ?????n cao</a>
                                                                    <a class="gird10_header_left-item-price-item" href="">Gi??:cao ?????n Th???p</a>

                                                                </div>
                                                                </li>
                                                                <div class="gird10_header_right">
                                                                <!-- <span class="qualyti">1</span>/14 -->
                                                                <div class="link_buy link_buy-1"  href=""> <i class="fas fa-angle-left"></i></div>
                                                                <div class="link_buy link_buy-2"  href=""> <i class="fas fa-angle-right"></i></div>

                                                            </div>
                                                                </ul>

                                                        </div>
                                                    <div class="main col  l-12  c-12">
                                                            <div class="row x">
                                                            </div>
                                                        </div>
                                             </div>

                                    </div>
                            </div>
                    </div>
                <div class="gird wide color2">
                        <div class="row" id="show">
                         </div>
                </div>
    
</div>

  
       <div class="grid wide grid-link_buy">
           <!-- <a class="link_buy"  href="">
                    <i class="fas fa-angle-left"></i>
                </a> -->

           <!-- <div class="link_buy"  href="">3</div>
                <div class="link_buy"  href="">4</div>
                <div class="link_buy"  href="">5</div>
                <div class="link_buy"  href="">...</div>
                <div class="link_buy"  href="">6</div>
                <div class="link_buy"  href="">7</div>
                <a class="link_buy"  href="">        
                            <i class="fas fa-angle-right"></i>
                </a> -->
        </div>
        
        <div class="b-example-divider"></div>

        <div class="container">
            <footer class="py-3 my-4 color">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                </ul>
                <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
            </footer>
        </div>

   </div>

   <script>

       // ???n hi???n trang qu???n ??o
       var  shirt= document.querySelector(".gird2_item-shirt");
       var  trousers   = document.querySelector(".gird2_item-trousers");

       var shirt_item = document.querySelector(".gird__row-shirt");
       var trousers_item = document.querySelector(".gird__row-trousers");

       var shirt_item2 = document.querySelector(".gird__row-shirt2");
       var trousers_item2 = document.querySelector(".gird__row-trousers-2");

       var  main   = document.querySelector(".main");
       var  check_x   = document.querySelector(".x");

       var  check_show_sold   = document.querySelector(".gird10_header_left-item-1");   
        // ph???n ????ng k?? ????ng nh???p nhaa
      


    //    var show_item = document.querySelector(".gird__row-trousers2");

       var link_buy1 = document.querySelector(".link_buy-1");
       var link_buy2 = document.querySelector(".link_buy-2");

//    link_buy1
link_buy1.onclick = function(){


        if( check_show_sold.classList.value == "gird10_header_left-item gird10_header_left-item-1 orange" && trousers.classList.value === "gird2_item gird2_item-trousers gird2_item-clicked" ){  
            document.querySelector(".main").style.display= "none";      
            show_sold_1();


         }

        if(  check_show_sold.classList.value == "gird10_header_left-item gird10_header_left-item-1 orange" &&  shirt.classList.value === "gird2_item gird2_item-shirt gird2_item-clicked" ){  
            document.querySelector(".main").style.display= "none";
            show_sold3();
         }

        if(trousers.classList.value === "gird2_item gird2_item-trousers gird2_item-clicked" && check_show_sold.classList.value != "gird10_header_left-item gird10_header_left-item-1 orange" ){
            show_main_trousers();
                    /* link_buy1.classList.add("link_buy-color");
                        link_buy2.classList.remove("link_buy-color");
                        trousers_item.style.display = "flex";
                        shirt_item.style.display = "none";
                        trousers_item2.style.display = "none";
                        shirt_item2.style.display = "none";
                        document.querySelector(".main").style.display = "none";*/


            
            
            
            
            
            
        }

        if(shirt.classList.value === "gird2_item gird2_item-shirt gird2_item-clicked" && check_show_sold.classList.value != "gird10_header_left-item gird10_header_left-item-1 orange"){
            show_main_shirt();
            /*link_buy1.classList.add("link_buy-color");
              link_buy2.classList.remove("link_buy-color");

                trousers_item.style.display = "none";
                shirt_item.style.display = "flex";
                trousers_item2.style.display = "none";
                shirt_item2.style.display = "none";
                document.querySelector(".main").style.display = "none";*/

        }
        // link_buy1.style.display ="none";
        // link_buy2.style.display ="block";

    }

       // link_buy2

link_buy2.onclick = function(){

        if(trousers.classList.value === "gird2_item gird2_item-trousers gird2_item-clicked"  && check_show_sold.classList.value != "gird10_header_left-item gird10_header_left-item-1 orange" ){
            show_main_trousers2();
           /* link_buy2.classList.add("link_buy-color");
              link_buy1.classList.remove("link_buy-color");

                trousers_item.style.display = "none";
                shirt_item.style.display = "none";
                trousers_item2.style.display = "flex";
                shirt_item2.style.display = "none";
                document.querySelector(".main").style.display = "none";*/


        }
        if(shirt.classList.value === "gird2_item gird2_item-shirt gird2_item-clicked" && check_show_sold.classList.value != "gird10_header_left-item gird10_header_left-item-1 orange" ){
            show_main_shirt2();
            /* link_buy2.classList.add("link_buy-color");
              link_buy1.classList.remove("link_buy-color");

                trousers_item.style.display = "none";
                shirt_item.style.display = "none";
                trousers_item2.style.display = "none";
                shirt_item2.style.display = "flex";
                document.querySelector(".main").style.display = "none";*/
                

        }
        if( check_show_sold.classList.value == "gird10_header_left-item gird10_header_left-item-1 orange" && trousers.classList.value === "gird2_item gird2_item-trousers gird2_item-clicked" ){  
            document.querySelector(".main").style.display= "none";
            show_sold2();
        }
        if( check_show_sold.classList.value == "gird10_header_left-item gird10_header_left-item-1 orange" && shirt.classList.value === "gird2_item gird2_item-shirt gird2_item-clicked"){  
            document.querySelector(".main").style.display= "none";
            show_sold4();
        }
        // link_buy1.style.display ="block";
        // link_buy2.style.display ="none";
       }
       

//    shirt

shirt.onclick = function(){
 
        if( check_show_sold.classList.value == "gird10_header_left-item gird10_header_left-item-1 orange" ){  
            document.querySelector(".main").style.display = "none";

            show_sold3();
        }else{
            show_main_shirt();
        /* //     check_x.classList.remove("check");
            //   shirt.classList.add("gird2_item-clicked");
            //   trousers.classList.remove("gird2_item-clicked");

            //   trousers_item.style.display = "none";
            //   shirt_item.style.display = "flex";
            //   trousers_item2.style.display = "none";
            //   shirt_item2.style.display = "none";   

            //     link_buy1.classList.add("link_buy-color");
            //     link_buy2.classList.remove("link_buy-color");
            //   document.querySelector(".main").style.display = "none";*/
        }
    }

       //  trousers
trousers.onclick = function(){
          if( check_show_sold.classList.value == "gird10_header_left-item gird10_header_left-item-1 orange" ){  
            document.querySelector(".main").style.display = "none";

            show_sold_1();
            }else{
                show_main_trousers();
                /* // // check_x.classList.remove("check");
                        //   shirt.classList.remove("gird2_item-clicked");
                        //   trousers.classList.add("gird2_item-clicked");

                        //   trousers_item.style.display = "flex";
                        //   shirt_item.style.display = "none";
                        //   trousers_item2.style.display = "none";
                        //   shirt_item2.style.display = "none";

                        //   link_buy1.classList.add("link_buy-color");
                        //   link_buy2.classList.remove("link_buy-color");
                        //   document.querySelector(".main").style.display = "none";*/
            }  
    }

   </script>
    <script src="show_more.js"></script>
    <script src="js.js"></script>

   <script src="show_hiden.js"></script>

   <!-- modal -->
<!--  
<input type="checkbox" class="nav2" id="name2">
<input type="checkbox" class="nav" id="name">   -->
<?php
    
//     function show_span($value){
//     if(isset($_GET[$value]) && $_GET[$value] == "" ){
//         echo "Vui l??ng nh???p tr?????ng n??y!";
//     }else{
//         echo "";
//     }
// }
// value="<?php show_span("registration-email")?>
<div class="modal" id="modal">
             <label for="name" class="modal__overlay">

             </label>

                <div class="modal__body modal__body-registration">
                <div class="modal__inner">
                        <form action="" method="GET" class="form">
                            <div class="modal__inner-heard">
                                <div class="modal__inner-heard-register">????ng k??</div>
                                    <label for="name" class="modal__inner-heard-login">????ng Nh???p</label>
                            </div>
                            <div class="modal__inner-content">
                                <div class="modal__inner-content-model">
                                    <input type="input" class="modal__inner-content-input"   id="registration-email" name="registration-email" placeholder='Email c???a b???n'>                             
                                            <div class="">
                                                <span class="regex registration-email-span"></span>
                                            </div>
                                    
                                    <input type="password" class="modal__inner-content-input" id="registration-password" name="registration-password" placeholder='Password c???a b???n'>
                                   
                                            <div class="">
                                                <span class="regex registration-password-span"></span>
                                            </div>

                                    <input type="password" class="modal__inner-content-input" id="registration-passwordAgin" name="registration-passwordAgin" placeholder='Nh???p l???i password c???a b???n'>
                                    
                                            <div class="">
                                                <span class="regex registration-passwordAgin-span">   </span>
                                            </div>               
                                
                                </div>
                                <div class="rules">
                                    B???ng vi???c ????ng k?? , b???n ???? ?????ng ?? v???i <a href="" class="rules-content">??i???u Kho???n d???ch v???</a> & <a href="" class="rules-content"> Ch??nh s??ch b???o m???t</a>
                                </div>
                                <div class="btn-location">
                                        <label for="name" class="btn btn--hover">Tr??? l???i</label>
                                        <div class="btn btn--register btn-login">????ng k??</div>
                                </div>
                            </div>
                        </form>

                </div>
                <div class="controls">
                    <a href="" class="controls-fb">
                            <i class="icon-fb fab fa-facebook-square"></i> K???t n???i ?????n facebook
                    </a>
                    <a href="" class="controls-gg">
                        <i class="icon-gg fab fa-google"></i>    K???t n???i ?????n google
                    </a>
                </div>  
                </div>
        <div class="modal__body modal__body-login">
                    <div class="modal__inner">
                        <div class="form2">
                            <div class="modal__inner-heard">
                                <div class="modal__inner-heard-register">????ng Nh???p</div>
                                <label for="name2"  class="modal__inner-heard-registration">????ng k??</label>
                            </div>
                            <div class="modal__inner-content">
                                <div class="modal__inner-content-model">
                                    <input type="email" id="login-email" name="login-email" class="modal__inner-content-input" placeholder='Email c???a b???n'>
                                    <span class="regex login-email-span"></span>

                                    <input type="password" id="login-password" name="login-password" class="modal__inner-content-input" placeholder='Password c???a b???n'>
                                    <span class="regex login-password-span"></span>

                                </div>
                            <div class="modal__inner-help">
                                <a href="" class="modal__inner-help-link1">Qu??n m???t kh???u</a>
                                <span class="space"></span>
                                <a href="" class="modal__inner-help-link2">C???n tr??? gi??p</a>

                            </div>
                                <div class="btn-location">
                                        <label for="name2" class="btn btn--hover btn--hover-back ">Tr??? l???i</label>
                                        <div class="btn btn--register btn-registration">????ng nh???p</div>
                                </div>
                            </div>
                        </div>
        
            </div>
            <div class="controls">
                <a href="" class="controls-fb">
                     <i class="icon-fb fab fa-facebook-square"></i> K???t n???i ?????n facebook
                </a>
                <a href="" class="controls-gg">
                 <i class="icon-gg fab fa-google"></i>    K???t n???i ?????n google
                </a>
         </div>  
         </div>
        
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body >

</html>
<script src="modal_login.js"></script>
<script src="validate.js"></script>
<script src="cart.js"></script>