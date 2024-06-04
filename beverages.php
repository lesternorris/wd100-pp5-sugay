<?php
session_start();
include "admin/user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="uistyle.css">
    <title>Gourmet Haven</title>
</head>
<body>
    
    <?php include 'navbar.php'; ?>

<div class="container mt-5">
    <div class="row ">
        <h1 class="text-white  text-center starterh1">Beverages</h1>
    <?php
    include "admin/pp5_db.php";
    
    $starterStmt = "SELECT * FROM product_tbl WHERE product_category = 'Beverages'";
    $starterResult = mysqli_query($conn, $starterStmt);
    while ($starterShow=mysqli_fetch_assoc($starterResult)) {
        echo "
        <form action='' method='POST' class=' mt-4 col-3'>
        <div class='card  mb-5' style='width: 18rem;'>
        <img class='card-img-top' src='admin/$starterShow[product_image]' alt='Card image cap'>
        <div class='card-body'>
          <h6 class='card-title'>$starterShow[product_name]</h6>
          
          <h2 class='card-text'>&#36;$starterShow[product_price]</h2>
          <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal-$starterShow[product_id]'>
            Buy Now
            </button>
        </div>
      </div>
        </form>


        <!-- Button trigger modal -->
            

            <!-- Modal -->

            <div class='modal fade' id='exampleModal-$starterShow[product_id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                <div class='modal-header'>
                    <h1 class='modal-title fs-5' id='exampleModalLabel'>$starterShow[product_name]</h1>
                    
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                <img class='w-100' src='admin/$starterShow[product_image]' alt='Card image cap'>
                
                <h1 class='modal-title fs-5' id='exampleModalLabel'>&#36;$starterShow[product_price]</h1>
                <p class='card-text'>$starterShow[product_description]</p>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <form action='order_getter.php' method='POST'>
                <input type='hidden' name='id' value='$starterShow[product_id]'>
                    <button type='Submit' class='btn btn-primary'>Add to Cart</button>
                </form>
                </div>
                </div>
            </div>
            </div>
        
        
        ";
    }

    ?>
    </div>
</div>

    

    <?php include "cart.php"; ?>
    <?php include 'footer.php'; ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>