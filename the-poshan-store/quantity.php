<?php
    session_start();
    require 'config.php';

    if(isset($_POST['pid']))
    {
        echo "decreasing quantity";

        $username = $_SESSION['username'];
        $proId = $_POST['pid'];
        $pqn = $_POST['pqn'];

        $upqn = "UPDATE cart SET quantity = '$pqn' WHERE cart.username = '$username' AND cart.id='$proId'";
        $rupqn = mysqli_query($connection, $upqn);
        if($rupqn)
        {
            echo "Product quantity updated";
        }
        else{
            echo "Error in updating product quantity";
        }
    }

?>