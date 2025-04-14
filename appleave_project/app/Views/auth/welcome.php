<!-- app/Views/auth/welcome.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
        <h1>Welcome, <?= session('user_name') ?>!</h1>
        <a href="/register" class="btn btn-primary mt-3">Register</a>
    </div>
</body>
</html>
