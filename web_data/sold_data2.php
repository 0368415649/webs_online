<?php
    $conn = new mysqli("localhost","root","","dinhduy");
    $sql ="SELECT * FROM `shirt` ORDER by sold DESC";
    include("data_main.php");
    ?>