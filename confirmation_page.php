<?php
include "admin/pp5_db.php";
session_start();
$id = $_SESSION['id'];
$orderQuery = "SELECT * FROM user_tbl INNER JOIN order_tbl ON user_tbl.User_ID = order_tbl.order_user_id WHERE order_tbl.order_user_id = $id";
$orderResult = mysqli_query($conn, $orderQuery);

$totalPrice = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Order Confirmation</title>
</head>
<body class="bg-dark text-white">


<div class="container my-5">
    <div class="card bg-light text-dark">
        <div class="card-header">
            <h2>Order Confirmation</h2>
        </div>
        <div class="card-body">
            <?php while ($orderShow = mysqli_fetch_assoc($orderResult)) {
                $totalPrice += $orderShow['product_price'];
                echo "
                <div class='row align-items-center mb-3'>
                  <div class='col-4'><img class='w-100' src='admin/{$orderShow['product_image']}' alt='Product image'></div>
                  <div class='col-6'>
                    <h5>{$orderShow['product_name']}</h5>
                    <p class='mb-1'>&#36;{$orderShow['product_price']}</p>
                  </div>
                </div>
                <hr>";
            } ?>
            <div class="row">
                <div class="col-12 text-end">
                    <h4>Total Price: $<?php echo $totalPrice; ?></h4>
                </div>
            </div>
            
            <!-- Payment Method Selection -->
            <div class="row mt-4">
                <div class="col-12">
                    <h5>Select Payment Method:</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="gcash" value="Gcash" required>
                        <label class="form-check-label" for="gcash">
                            Gcash
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="bankTransfer" value="Bank Transfer" required>
                        <label class="form-check-label" for="bankTransfer">
                            Bank Transfer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="cash" value="Cash" required>
                        <label class="form-check-label" for="cash">
                            Cash
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="index.php" class="btn btn-secondary">Back to Cart</a>
            <form action="complete_order.php" method="POST" class="d-inline">
                <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>">
                <input type="hidden" name="userId" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-primary">Confirm Order</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>