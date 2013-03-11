<?php


     $nav_to = $_POST['nav_to'];
    if ($nav_to=='view'){
        header("location: ../aasc-inventory-view.php");
        exit();
    }
    if ($nav_to=='add'){
        header("location: ../aasc-inventory-form.php");
        exit();
    }
?>