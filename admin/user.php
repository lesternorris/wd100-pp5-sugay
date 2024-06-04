<?php
if (!isset($_SESSION['level'])) {
    header("Location: ../wd100_pp5_sugay/admin/login.php");
    
} elseif ($_SESSION['level'] != 0) {
    header("Location: ../wd100_pp5_sugay/admin/login.php");
    
}
?>