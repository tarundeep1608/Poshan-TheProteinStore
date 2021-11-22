<?php
    session_start();
    require 'config.php';

    if (isset($_POST['pid']) && $_POST['addptc'] == true){
        $proId = $_POST['pid'];
        $pqn=1;
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
        {
            $username = $_SESSION['username'];

            $pexists = "SELECT * FROM `cart` WHERE `username`='$username' AND `id` = '$proId'";
            $rpexists = mysqli_query($connection, $pexists);

            $num = mysqli_num_rows($rpexists);
            if($num == 1)
            {
                $row = mysqli_fetch_assoc($rpexists);
                $pqne = $row['quantity'];
                $pqn = $pqn + $pqne;

                $upqn = "UPDATE `cart` SET `quantity` = '$pqn' WHERE `cart`.`username` = '$username' AND `cart`.`id`='$proId'";
                $rupqn = mysqli_query($connection, $upqn);

                if($rupqn)
                {
                    echo "Product quantity updated";
                }
                else{
                    echo "Error in updating product quantity";
                }
            }
            else{
                $sql = "INSERT INTO `cart` (`id`, `username`, `quantity`) VALUES ('$proId', '$username', '$pqn')";
                $result = mysqli_query($connection, $sql);

                if($result)
                {
                    echo 'Product Successfully Added to Cart';
                }
                else{

                    echo "The product not added successfully because of this error --> ".mysqli_error($conn);
                }
            }
        }
        else{
            echo 'You must have to Login First';
        }
    }

?>