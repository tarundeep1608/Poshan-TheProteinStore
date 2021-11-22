<?php
    session_start();
    require 'config.php';

    if (isset($_POST['pid']) && $_POST['removepfc'] == true){
        $proId = $_POST['pid'];
        $username = $_SESSION['username'];

        $dfc = "DELETE FROM `cart` WHERE `cart`.`username` = '$username' AND `cart`.`id` = '$proId'";
        $rdfc = mysqli_query($connection, $dfc);

        if($dfc)
        {
            echo "Product deleted from the cart";
        }
        else{
            echo "Error in deleting product from the cart";
        }
    }
?>