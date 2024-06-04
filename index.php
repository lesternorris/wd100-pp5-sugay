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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Gourmet Haven</title>
</head>
<body>
    
    <?php include "navbar.php"; ?>
    

        <div class="container-fluid text-center m-auto">
            <div class="video-container">
            <video class="video-blur w-100" autoplay muted loop>
                <source src="video/videoBanner.mp4" type="video/mp4">
            </video>
            <h1 class="video-text">Gourmet Haven</h1>
            <p class="banner-text">"Savor the Art of Culinary Delights"</p>
            </div>
        </div>

        <!-- Start of the container -->

        <div class="container text-center text-white mt-5">
                    <div class="row">
                        <h1>Best Seller</h1>
                        <div class="col-3">
                            <div class="card mb-5" style="width: 18rem;">
                                <img src="img/Stuffed_Mushrooms.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Starters</h5>
                                    <p class="card-text"></p>
                                    <a href="starters.php" class="btn btn-primary">See More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card mb-5" style="width: 18rem;">
                                <img src="img/Double Cheeseburger.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Burgers</h5>
                                    <p class="card-text"></p>
                                    <a href="B&S.php" class="btn btn-primary">See More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card mb-5" style="width: 18rem;">
                                <img src="img/BBQ Ribs.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Main Course</h5>
                                    <p class="card-text"></p>
                                    <a href="main_courses.php" class="btn btn-primary">See More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card mb-5" style="width: 18rem;">
                                <img src="img/Crème Brûlée.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Dessert</h5>
                                    <p class="card-text"></p>
                                    <a href="desserts.php" class="btn btn-primary">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            <!-- End of the container -->





        <!-- Start of the container -->

        <div class="container text-center text-white mt-5">
    <div class="row">
        <h1 style="margin-bottom: 20px;">Must Try!</h1>

        <div class="col-3 mb-5" style="width: 20rem; height: 300px;">
            <a href="main_courses.php">
                <img src="img/BBQ Ribs.jpg" class="img-fluid hover-img" alt="BBQ Ribs" style="width: 100%; height: 100%; object-fit: cover;">
            </a>
        </div>
        <div class="col-3 mb-5" style="width: 20rem; height: 300px;">
            <a href="B&S.php">
                <img src="img/Bacon_Burger.jpg" class="img-fluid hover-img" alt="BBQ Ribs" style="width: 100%; height: 100%; object-fit: cover;">
            </a>
        </div>
        <div class="col-3 mb-5" style="width: 20rem; height: 300px;">
            <a href="desserts.php">
                <img src="img/Bruschetta.jpg" class="img-fluid hover-img" alt="BBQ Ribs" style="width: 100%; height: 100%; object-fit: cover;">
            </a>
        </div>
        <div class="col-3 mb-5" style="width: 20rem; height: 300px;">
            <a href="starters.php">
                <img src="img/Crème Brûlée.jpg" class="img-fluid hover-img" alt="BBQ Ribs" style="width: 100%; height: 100%; object-fit: cover;">
            </a>
        </div>
    </div>
</div>
        
            <!-- End of the container -->
        
    
    

    <?php include "cart.php"; ?>
    <?php include "footer.php"; ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>