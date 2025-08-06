<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - Aesthetic Haven</title>
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

    .dark-mode .card, .dark-mode .table {
      background-color: #333;
      color: #f1f1f1;
    }

    .navbar {
      transition: background-color 0.3s;
    }

    .dark-mode .navbar {
      background-color: #444 !important;
    }

    .brand span {
      font-weight: bold;
      background: linear-gradient(to right, #ff6ec4, #7873f5);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .toggle-btn {
      border: none;
      background: none;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
    <a class="navbar-brand brand" href="index.php"><span>Aesthetic ADMIN</span></a>
    <div class="ms-auto">
      <button id="modeToggle" class="toggle-btn">
        <i class="bi bi-moon fs-4"></i>
      </button>
    </div>
  </nav>

  <div class="container py-4">
    <h2 class="text-center mb-4">Dashboard Summary</h2>
    <div class="row mb-4">
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm p-3">
          <h5>Total Users</h5>
          <p class="fs-4">240</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm p-3">
          <h5>Total Orders</h5>
          <p class="fs-4">120</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm p-3">
          <h5>Total Revenue</h5>
          <p class="fs-4">$4,500</p>
        </div>
      </div>
    </div>

    <h4 class="mb-3">Recent Orders</h4>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Item</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#1001</td>
            <td>Jane Doe</td>
            <td>Wall Poster</td>
            <td><span class="badge bg-success">Delivered</span></td>
          </tr>
          <tr>
            <td>#1002</td>
            <td>John Smith</td>
            <td>LED Lights</td>
            <td><span class="badge bg-warning text-dark">Pending</span></td>
          </tr>
          <!-- More rows -->
        </tbody>
      </table>
    </div>

    <h4 class="mt-5 mb-3">Manage Products</h4>
    <button class="btn btn-primary mb-3"><i class="bi bi-plus-circle me-1"></i> Add New Product</button>
    <!-- More features can be added -->
  </div>

  <!-- Bootstrap JS & Dark Mode Toggle -->
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
