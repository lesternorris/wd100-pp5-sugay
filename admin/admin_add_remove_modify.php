<?php
include "pp5_db.php";

$id = $_POST['id'];
if (isset($_POST['DELETE'])) {
    
    echo "$id";

    $productDelete = "DELETE FROM product_tbl WHERE product_id = $id";
    mysqli_query($conn, $productDelete);
    header("Location: admin_add_remove.php");
}

if (isset($_POST['UPDATE'])) {

    $category = $_POST['category'];
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    echo "$id";

    $productDelete = "UPDATE product_tbl SET product_category = '$category', product_name = '$name', product_description = '$desc', product_price = '$price', product_stock = '$stock' WHERE product_id = $id";
    mysqli_query($conn, $productDelete);
    header("Location: admin_add_remove.php");
}

?>

