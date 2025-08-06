<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Cart - Aesthetic Haven</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      transition: background-color 0.3s, color 0.3s;
      font-family: 'Segoe UI', sans-serif;
    }

    .dark-mode {
      background-color: #222;
      color: #f1f1f1;
    }

    .dark-mode .card {
      background-color: #333;
      color: #f1f1f1;
    }

    .dark-mode .navbar {
      background-color: #444 !important;
    }

    .toggle-btn {
      border: none;
      background: none;
      color: inherit;
    }

    .cart-item img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 8px;
    }

    .btn-remove {
      border: none;
      background: none;
      color: red;
      font-size: 1.2rem;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-3 shadow-sm">
    <a class="navbar-brand fw-bold" href="#">Aesthetic Haven</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link active" href="cart.php">Cart</a></li>
        <li class="nav-item"><a class="nav-link" href="wishlist.php">Wishlist</a></li>
        <li class="nav-item"><a class="nav-link" href="orders.php">Orders</a></li>
        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
      </ul>

      <button id="modeToggle" class="toggle-btn ms-3">
        <i class="bi bi-moon fs-5"></i>
      </button>
    </div>
  </nav>

  <!-- Cart Section -->
  <div class="container py-5">
    <h2 class="mb-4 text-center">My Cart</h2>

    <!-- Cart Items -->
    <div class="card mb-3 shadow-sm">
      <div class="card-body d-flex align-items-center justify-content-between cart-item">
        <div class="d-flex align-items-center">
          <img src="poster1.jpg" alt="Item" class="me-3">
          <div>
            <h6 class="mb-0">Wall Poster</h6>
            <small>₦3,500</small>
          </div>
        </div>
        <button class="btn-remove" title="Remove from Cart"><i class="bi bi-x-circle"></i></button>
      </div>
    </div>

    <div class="card mb-3 shadow-sm">
      <div class="card-body d-flex align-items-center justify-content-between cart-item">
        <div class="d-flex align-items-center">
          <img src="led-light.jpg" alt="Item" class="me-3">
          <div>
            <h6 class="mb-0">LED String Lights</h6>
            <small>₦2,000</small>
          </div>
        </div>
        <button class="btn-remove" title="Remove from Cart"><i class="bi bi-x-circle"></i></button>
      </div>
    </div>

    <!-- Total -->
    <div class="text-end my-4">
      <h5>Total: ₦5,500</h5>
    </div>

    <!-- Checkout -->
    <div class="text-center">
      <a href="checkout.html" class="btn btn-primary px-4">Proceed to Checkout</a>
    </div>
  </div>

  <!-- Bootstrap JS + Toggle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const toggleBtn = document.getElementById('modeToggle');
    const icon = toggleBtn.querySelector('i');

    toggleBtn.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      icon.classList.toggle('bi-moon');
      icon.classList.toggle('bi-sun');
    });
  </script>
</body>

</html>
