<?php
if (!isset($_SESSION['level'])) {
    header("Location: ../admin/login.php");
    
} elseif ($_SESSION['level'] != 1) {
    header("Location: ../admin/login.php");
    
}
?>