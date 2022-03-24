<?php
    $conn = new mysqli("localhost","root","","dinhduy");
    $sql ="SELECT * FROM `cart` where 1";
    include("cart_show_data.php");
    ?>
   