


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
    <h2 class="text-white">Contact Us:</h2>
    <form action="process_contact.php" method="post">
        <div class="form-group mb-3">
            <label for="name" class="form-label text-white">Name:</label>
            <input type="text" class="form-control bg-dark text-white" id="name" name="name" required>
        </div>
        <div class="form-group mb-3">
            <label for="email" class="form-label text-white">Email:</label>
            <input type="email" class="form-control bg-dark text-white" id="email" name="email" required>
        </div>
        <div class="form-group mb-3">
            <label for="subject" class="form-label text-white">Subject:</label>
            <input type="text" class="form-control bg-dark text-white" id="subject" name="subject" required>
        </div>
        <div class="form-group mb-3">
            <label for="message" class="form-label text-white">Message:</label>
            <textarea class="form-control bg-dark text-white" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>




<?php include 'footer.php'; ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>