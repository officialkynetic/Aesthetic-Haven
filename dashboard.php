<!-- User Dashboard Page -->
<?php
session_start();
if (isset($_SESSION["user"])) {
    
} else {
    # code...
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Aesthetic Haven</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
        }

        .dashboard-header {
            background: #8a545d;
            color: white;
            padding: 20px;
        }

        .dashboard-header h4 {
            margin: 0;
        }

        .nav-link {
            color: #555;
        }

        .nav-link.active {
            font-weight: bold;
            color: #ff7e94;
        }

        .card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .profile-pic {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

    </style>
</head>

<body>
    <!-- Header -->
    <div class="dashboard-header d-flex justify-content-between align-items-center">
        <h4 class="fw-bold">Welcome, <?= $_SESSION["name"]?></h4>
        <div>
            <a href="cart.php" class="text-white me-3"><i class="bi bi-cart"></i> <span class="badge bg-light text-dark">2</span></a>
            <a href="login.php" class="text-white"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 mb-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active"><i class="bi bi-house-door me-2"></i> Dashboard</a>
                    <a href="shop.php" class="list-group-item list-group-item-action"><i class="bi bi-shop me-2"></i> Shop</a>
                    <a href="orders.php" class="list-group-item list-group-item-action"><i class="bi bi-bag-check me-2"></i> Orders</a>
                    <a href="cart.php" class="list-group-item list-group-item-action"><i class="bi bi-cart3 me-2"></i> Cart</a>
                    <a href="profile.php" class="list-group-item list-group-item-action"><i class="bi bi-person me-2"></i> Profile</a>
                </div>
            </div>

            <!-- Dashboard Body -->
            <div class="col-md-9">
                <h5 class="mb-4">Your Overview</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card p-3">
                            <h6>Total Orders</h6>
                            <h3 class="text-success">5</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3">
                            <h6>Items in Cart</h6>
                            <h3 class="text-primary">2</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3">
                            <h6>Wishlist</h6>
                            <h3 class="text-warning">3</h3>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <h5>Recommended for You</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="test.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title">Aesthetic Poster</h6>
                                <p class="text-success">₦3,500</p>
                                <button class="btn btn-sm btn-outline-primary">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="test.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title">LED Lights</h6>
                                <p class="text-success">₦2,000</p>
                                <button class="btn btn-sm btn-outline-primary">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Footer -->
    <div class="footer text-center">
        <div class="mb-3">
            <a href="https://instagram.com/" target="_blank" class="text-white me-3">
                <i class="bi bi-instagram fs-4"></i>
            </a>
            <a href="https://facebook.com/" target="_blank" class="text-white me-3">
                <i class="bi bi-facebook fs-4"></i>
            </a>
            <a href="https://www.tiktok.com/@life_of_ig" target="_blank" class="text-white me-3">
                <i class="fab fa-tiktok fs-4"></i>
            </a>

            <a href="mailto:you@example.com" class="text-white">
                <i class="bi bi-envelope-fill fs-4"></i>
            </a>
        </div>
        &copy; 2025 Aesthetic Haven. All rights reserved.
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
