<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" class="navbar-logo" style="width:100px ; height:100px ;">
                Gourmet Haven
            </a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="menuDropdown">
                            <li><a class="dropdown-item text-white" href="starters.php">Starters</a></li>
                            <li><a class="dropdown-item text-white" href="B&S.php">Burgers & Sandwiches</a></li>
                            <li><a class="dropdown-item text-white" href="main_courses.php">Main Courses</a></li>
                            <li><a class="dropdown-item text-white" href="desserts.php">Desserts</a></li>
                            <li><a class="dropdown-item text-white" href="beverages.php">Beverages</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="contact_us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-shopping-cart"></i>
            </button>
                <a href="admin/logout.php" class="nav-link text-white ms-3">Log Out</a>
            </div>
        </div>
    </nav>