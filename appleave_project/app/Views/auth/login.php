<!-- app/Views/auth/login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Linking Bootstrap for responsive design -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom style for elegant design */
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
    </style>
    <script>
        // Password validation function
        function validateLoginForm() {
            const password = document.getElementById('password').value;
            const regex = /^(?=(?:.*[A-Za-z]){6,})(?=(?:.*\d){2,}).+$/;

            if (!regex.test(password)) {
                alert('Password must contain at least 6 letters and 2 numbers.');
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <!-- Card container for the form -->
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <!-- Display any error or success messages if present -->
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                        <?php elseif (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                        <?php endif; ?>

                        <!-- Login form starts here -->
                        <form action="/authenticate" method="POST" onsubmit="return validateLoginForm();">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" required class="form-control" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" required class="form-control" placeholder="Enter your password">
                            </div>

                            <!-- Submit button with full width -->
                            <button type="submit" class="btn btn-success w-100">Login</button>

                            <!-- Link to register page if user doesn't have an account -->
                            <p class="mt-3 text-center">Don't have an account? <a href="/register">Register</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
