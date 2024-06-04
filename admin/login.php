<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login Page</title>
</head>
<body class="bg-dark text-white">

<?php include '../navbar.php'; ?>

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <form action="login_getter.php" method="POST" class="p-5 bg-light rounded shadow-lg text-dark text-center" style="width: 100%; max-width: 400px;">
        <!-- Logo -->
        <div class="mb-4">
            <img src="images/logo.png" alt="Logo" class="img-fluid mb-3" style="max-width: 150px;">
        </div>
        
        <!-- Username input -->
        <div class="mb-4">
            <label for="form2Example1" class="form-label">User Name</label>
            <input type="text" id="form2Example1" class="form-control" name="username" required>
        </div>

        <!-- Password input -->
        <div class="mb-4">
            <label for="form2Example2" class="form-label">Password</label>
            <input type="password" id="form2Example2" class="form-control" name="password" required>
        </div>

        <!-- Forgot password link -->
        <div class="mb-4">
            <a href="#" class="text-decoration-none">Forgot password?</a>
        </div>

        <!-- Submit button -->
        <div class="d-flex justify-content-center mb-4">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>

        <!-- Register buttons -->
        <div class="text-center">
            <p class="mb-3">Not a member? <a href="#" class="text-decoration-none">Register</a></p>
            <p>or sign up with:</p>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-light me-1"><i class="fab fa-facebook-f"></i></button>
                <button type="button" class="btn btn-light me-1"><i class="fab fa-google"></i></button>
                <button type="button" class="btn btn-light me-1"><i class="fab fa-twitter"></i></button>
                <button type="button" class="btn btn-light"><i class="fab fa-github"></i></button>
            </div>
        </div>
    </form>
</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>