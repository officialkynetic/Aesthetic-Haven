<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Dashboard - Aesthetic Haven</title>
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

    .dark-mode .navbar {
      background-color: #444 !important;
    }

    .toggle-btn {
      border: none;
      background: none;
    }

    .brand-name {
      font-family: 'Pacifico', cursive;
      font-size: 3rem;
      background: linear-gradient(to right, #ff7e94, #ffb7c5, #ffd6e0);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: float 4s ease-in-out infinite;
      letter-spacing: 1.2px;
      text-transform: capitalize;
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

  <!-- Profile Display Section -->
  <div class="container py-5">
    <h2 class="mb-4 text-center">My Profile</h2>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm p-4">
          <div class="text-center mb-4">
            <img src="user-placeholder.jpg" alt="User Photo" class="profile-pic mb-3">
            <h4>Jane Doe</h4>
            <p class="text-muted">jane@example.com</p>
          </div>

          <hr>

          <div class="row mb-3">
            <div class="col-sm-4 fw-bold">Phone</div>
            <div class="col-sm-8">+234 812 345 6789</div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-4 fw-bold">Delivery Address</div>
            <div class="col-sm-8">123 Aesthetic Avenue, Lagos</div>
          </div>

          <div class="text-end mt-4">
            <a href="updateprofile.php" class="btn btn-outline-primary">Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>


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