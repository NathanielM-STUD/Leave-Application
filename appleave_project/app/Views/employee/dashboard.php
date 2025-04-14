<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-light vh-100 p-4">
                <div class="text-center mb-4">
                    <img src="https://via.placeholder.com/150" alt="Employee Picture" class="img-fluid rounded-circle mb-3">
                    <h4>John Doe</h4>
                    <p class="text-muted">Software Engineer</p>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <div class="container mt-5">
                    <h1 class="text-center mb-4">Employee Dashboard</h1>
                    
                    <div class="row">
                        <!-- Sick Leave Card -->
                        <div class="col-md-6">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Sick Leave</h5>
                                    <p class="card-text">Number of Sick Leaves: <strong>5</strong></p>
                                </div>
                            </div>
                        </div>
                        <!-- Vacation Leave Card -->
                        <div class="col-md-6">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Vacation Leave</h5>
                                    <p class="card-text">Number of Vacation Leaves: <strong>10</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Leave Application Form -->
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Apply for Leave</h5>
                            <form action="/submit-leave" method="POST">
                                <div class="mb-3">
                                    <label for="leaveType" class="form-label">Type of Leave</label>
                                    <select class="form-select" id="leaveType" name="leaveType" required>
                                        <option value="" disabled selected>Select Leave Type</option>
                                        <option value="sick">Sick Leave</option>
                                        <option value="vacation">Vacation Leave</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="leaveReason" class="form-label">Reason for Leave</label>
                                    <textarea class="form-control" id="leaveReason" name="leaveReason" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>