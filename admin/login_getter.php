<?php
include "pp5_db.php";

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Check if user is an admin

// Check if user is a regular user
$checkUserStmt = "SELECT * FROM user_tbl WHERE User_Name = '$username' AND User_Password = '$password' AND User_Level = 0";
$checkUserQuery = mysqli_query($conn, $checkUserStmt);

$checkAdminStmt = "SELECT * FROM user_tbl WHERE User_Name = '$username' AND User_Password = '$password' AND User_Level = 1";
$checkAdminQuery = mysqli_query($conn, $checkAdminStmt);


if (mysqli_num_rows($checkUserQuery)) {
    $userShow = mysqli_fetch_assoc($checkUserQuery);

    $_SESSION['id'] = $userShow['User_ID'];
    $_SESSION['level'] = $userShow['User_Level'];
    $_SESSION['username'] = $userShow['User_Name'];

    header("Location: ../index.php");
    

} elseif (mysqli_num_rows($checkAdminQuery)) {
    $adminShow = mysqli_fetch_assoc($checkAdminQuery);

    $_SESSION['id'] = $adminShow['User_ID'];
    $_SESSION['level'] = $adminShow['User_Level'];
    $_SESSION['username'] = $adminShow['User_Name'];

    header("Location: ../admin/admin_add_remove.php");
    

} else {
    echo "Invalid login credentials";
}
?>