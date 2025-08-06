<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wishlist - Aesthetic Haven</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      transition: background-color 0.3s, color 0.3s;
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
    }

    .wishlist-icon {
      color: red;
    }

    .btn-remove {
      font-size: 0.875rem;
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

  <!-- Wishlist Section -->
  <div class="container py-5">
    <h2 class="mb-4 text-center">My Wishlist</h2>

    <div class="row g-4">
      <!-- Item 1 -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="poster1.jpg" class="card-img-top" alt="Wishlist Item">
          <div class="card-body">
            <h5 class="card-title">Wall Poster</h5>
            <p class="card-text">₦3,500</p>
            <div class="d-flex justify-content-between">
              <button class="btn btn-outline-primary btn-sm">Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-remove"><i class="bi bi-x-circle"></i> Remove</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="led-light.jpg" class="card-img-top" alt="Wishlist Item">
          <div class="card-body">
            <h5 class="card-title">LED String Lights</h5>
            <p class="card-text">₦2,000</p>
            <div class="d-flex justify-content-between">
              <button class="btn btn-outline-primary btn-sm">Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-remove"><i class="bi bi-x-circle"></i> Remove</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="organizer1.jpg" class="card-img-top" alt="Wishlist Item">
          <div class="card-body">
            <h5 class="card-title">Makeup Organizer</h5>
            <p class="card-text">₦4,200</p>
            <div class="d-flex justify-content-between">
              <button class="btn btn-outline-primary btn-sm">Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-remove"><i class="bi bi-x-circle"></i> Remove</button>
            </div>
          </div>
        </div>
      </div>

      <!-- More items can be added similarly -->
    </div>
  </div>

  <!-- Bootstrap JS & Toggle Script -->
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
