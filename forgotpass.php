<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Forgot Password - Aesthetic Haven</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('girlybg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Raleway', sans-serif;
            color: #333;
            background-color: #fff;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.4);
            z-index: -1;
        }

        .login-card {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #ff7e94;
            border: none;
            border-radius: 30px;
            padding: 10px 30px;
            color: white;
            font-weight: bold;
            width: 100%;
        }

        .form-link {
            display: block;
            margin-top: 10px;
            text-align: center;
            color: #555;
        }

        .form-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <h2 class="text-center mb-4">Forgot Password</h2>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Enter your email to reset password</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <button type="submit" class="btn btn-custom">Send Reset Link</button>

            <a href="login.php" class="form-link">Back to Login</a>
        </form>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
