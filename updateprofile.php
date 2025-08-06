<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update-Profile - Aesthetic Haven</title>
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

    .dark-mode .card,
    .dark-mode .form-control {
      background-color: #333;
      color: #f1f1f1;
      border-color: #555;
    }

    .dark-mode .navbar {
      background-color: #444 !important;
    }

    .toggle-btn {
      border: none;
      background: none;
    }

    .profile-pic {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #ccc;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
    <a class="navbar-brand" href="dashboard.php">Aesthetic Haven</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item me-3">
        <a class="nav-link" href="shop.php"><i class="bi bi-shop"></i> Shop</a>
      </li>
      <li class="nav-item me-3">
        <a class="nav-link" href="orders.php"><i class="bi bi-bag-check"></i> Orders</a>
      </li>
      <li class="nav-item me-3">
        <a class="nav-link" href="cart.php"><i class="bi bi-cart"></i> Cart</a>
      </li>
      <li class="nav-item me-3">
        <a class="nav-link" href="wishlist.php"><i class="bi bi-heart"></i> Wishlist</a>
      </li>
      <li class="nav-item me-3">
        <a class="nav-link active" href="profile.php"><i class="bi bi-person"></i> Profile</a>
      </li>
      <li class="nav-item">
        <button id="modeToggle" class="toggle-btn">
          <i class="bi bi-moon fs-4"></i>
        </button>
      </li>
    </ul>
  </nav>

  <!-- Profile Section -->
  <div class="container py-5">
    <h2 class="mb-4 text-center">My Profile</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm p-4">
          <form>
            <div class="text-center mb-4">
              <img id="previewPic" src="user-placeholder.jpg" alt="Profile Picture" class="profile-pic" />
              <div class="mt-2">
                <input type="file" accept="image/*" class="form-control w-50 mx-auto" id="uploadPic">
              </div>
            </div>

            <div class="mb-3">
              <label for="fullname" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullname" value="Jane Doe">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" value="jane@example.com">
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" value="+234 812 345 6789">
            </div>

            <div class="mb-3">
              <label for="address" class="form-label">Delivery Address</label>
              <textarea class="form-control" id="address" rows="3">123 Aesthetic Avenue, Lagos</textarea>
            </div>

            <div class="text-end">
              <button type="submit" class="btn btn-primary">Update Profile</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS & Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Theme Toggle
    const toggleBtn = document.getElementById('modeToggle');
    const icon = toggleBtn.querySelector('i');
    toggleBtn.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      icon.classList.toggle('bi-moon');
      icon.classList.toggle('bi-sun');
    });

    // Profile Pic Preview
    const uploadInput = document.getElementById('uploadPic');
    const previewPic = document.getElementById('previewPic');

    uploadInput.addEventListener('change', function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          previewPic.src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>

</html>
