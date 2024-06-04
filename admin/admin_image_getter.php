<?php
include "pp5_db.php";

$category = $_POST["category"];
$name = $_POST["name"];
$desc = $_POST["desc"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$directory = "images/";
$image = $directory . basename($_FILES['img']['name']);


move_uploaded_file($_FILES['img']['tmp_name'], $image);
$storeProductStmt = "INSERT INTO product_tbl (product_category, product_name, product_image, product_description, product_price, product_stock) VALUES ('$category', '$name', '$image', '$desc', '$price', '$stock')";
mysqli_query($conn, $storeProductStmt);
echo "$category <br> $name <br> $desc <br> $price <br> $stock <br> $image";
header("Location: admin_add_remove.php");

?>
    