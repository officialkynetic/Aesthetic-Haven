<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shop - Aesthetic Haven</title>

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

    .nav-link.active {
      font-weight: bold;
      color: #0d6efd !important;
    }

    .card img,
    .card video {
      border-radius: 10px;
    }

    .badge.sold-out {
      background-color: #dc3545;
    }

    .btn[disabled] {
      opacity: 0.6;
      cursor: not-allowed;
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
        <li class="nav-item"><a class="nav-link active" href="shop.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
        <li class="nav-item"><a class="nav-link" href="wishlist.php">Wishlist</a></li>
        <li class="nav-item"><a class="nav-link" href="orders.php">Orders</a></li>
        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
      </ul>

      <button id="modeToggle" class="toggle-btn ms-3">
        <i class="bi bi-moon fs-5"></i>
      </button>
    </div>
  </nav>

  <!-- Shop Section -->
  <div class="container py-5">
    <h2 class="mb-4 text-center">Shop Our Aesthetic Collection</h2>

    <div class="row g-4">

      <!-- Item 1 - In Stock -->
      <div class="col-md-4">
        <div class="card shadow-sm">
          <img src="poster1.jpg" class="card-img-top" alt="Poster">
          <div class="card-body">
            <h5 class="card-title">Wall Poster</h5>
            <p class="card-text">Minimalist design to style your room.</p>
            <span class="badge bg-success mb-2">₦3,500</span>
            <button class="btn btn-outline-primary w-100 btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Item 2 - Sold Out -->
      <div class="col-md-4">
        <div class="card shadow-sm">
          <video class="card-img-top" muted controls>
            <source src="led-demo.mp4" type="video/mp4" />
          </video>
          <div class="card-body">
            <h5 class="card-title">LED String Lights</h5>
            <p class="card-text">Warm glow for cozy night vibes.</p>
            <span class="badge sold-out mb-2">Sold Out</span>
            <button class="btn btn-outline-primary w-100 btn-sm" disabled>Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Item 3 - In Stock -->
      <div class="col-md-4">
        <div class="card shadow-sm">
          <img src="organizer1.jpg" class="card-img-top" alt="Organizer">
          <div class="card-body">
            <h5 class="card-title">Makeup Organizer</h5>
            <p class="card-text">Elegant organizer for your vanity.</p>
            <span class="badge bg-success mb-2">₦4,200</span>
            <button class="btn btn-outline-primary w-100 btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS & Dark Mode Script -->
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
