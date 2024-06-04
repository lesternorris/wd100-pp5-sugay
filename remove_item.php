<?php
include "admin/pp5_db.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['id'];

    echo "$user_id";

    $deleteQuery = "DELETE FROM order_tbl WHERE order_user_id = $user_id AND order_id = $product_id";
    mysqli_query($conn, $deleteQuery);

    header("Location: index.php");
    // if () {
        
    //     header("Location: cart.php"); 
    // } else {
        
    //     echo "Error removing item: " . mysqli_error($conn);
    // }
}
?>