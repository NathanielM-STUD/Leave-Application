<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --sidebar-bg: #f8f9fa;
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --dark-color: #5a5c69;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fc;
        }
        
        .sidebar {
            background-color: var(--sidebar-bg);
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            transition: all 0.3s;
        }
        
        .sidebar .profile-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }
        
        .sidebar .nav-link {
            color: var(--dark-color);
            border-radius: 0.35rem;
            margin-bottom: 0.5rem;
        }
        
        .sidebar .nav-link:hover {
            background-color: rgba(78, 115, 223, 0.1);
            color: var(--primary-color);
        }
        
        .sidebar .nav-link.active {
            background-color: var(--primary-color);
            color: white !important;
        }
        
        .sidebar .nav-link i {
            margin-right: 0.5rem;
        }
        
        .card {
            border: none;
            border-radius: 0.35rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1.5rem 0 rgba(58, 59, 69, 0.2);
        }
        
        .card-header {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            background-color: #f8f9fc;
            font-weight: 600;
        }
        
        .dashboard-title {
            color: var(--dark-color);
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        
        .stat-card {
            border-left: 0.25rem solid;
        }
        
        .stat-card.primary {
            border-left-color: var(--primary-color);
        }
        
        .stat-card.success {
            border-left-color: var(--secondary-color);
        }
        
        .stat-card .card-text {
            font-size: 1.1rem;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #3a5bd9;
            border-color: #3a5bd9;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                height: auto;
                padding-bottom: 20px;
            }
            
            .profile-img {
                width: 80px !important;
                height: 80px !important;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4 sidebar p-0">
                <div class="d-flex flex-column h-100 p-4">
                    <div class="text-center mb-4">
                        <img src="" alt="Employee Picture" class="profile-img rounded-circle mb-3">
                        <h4>Nathaniel Mamucod</h4>
                        <p class="text-muted mb-4">Software Engineer</p>
                    </div>
                    
                    <hr class="my-2">
                    
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-md-8 p-4">
                <h1 class="dashboard-title mb-4">Employee Dashboard</h1>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card stat-card primary h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title text-primary">Sick Leave</h5>
                                        <p class="card-text">Available: <strong>5 days</strong></p>
                                    </div>
                                    <div class="bg-primary bg-opacity-10 p-3 rounded">
                                        <i class="bi bi-thermometer-snow text-primary" style="font-size: 1.5rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card stat-card success h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title text-success">Vacation Leave</h5>
                                        <p class="card-text">Available: <strong>10 days</strong></p>
                                    </div>
                                    <div class="bg-success bg-opacity-10 p-3 rounded">
                                        <i class="bi bi-umbrella text-success" style="font-size: 1.5rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title text-dark">Total Leave Taken</h5>
                                        <p class="card-text">This year: <strong>7 days</strong></p>
                                    </div>
                                    <div class="bg-warning bg-opacity-10 p-3 rounded">
                                        <i class="bi bi-calendar-week text-warning" style="font-size: 1.5rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Leave Application Card -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Apply for Leave</h5>
                    </div>
                    <div class="card-body">
                        <form action="/submit-leave" method="POST">
                        
                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="commutation" class="form-label">Commutation</label>
                            <input type="text" class="form-control" id="commutation" name="commutation" required>
                        </div>
                        <div class="col-md-6 mb-3">
                           <label for="inclusivedate" class="form-label">Inclusive Date/label>
                            <input type="date" class="form-control" id="inclusivedate" name="inclusivedate" required>
                        </div>
                        </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="leaveType" class="form-label">Type of Leave</label>
                                    <select class="form-select" id="leaveType" name="leaveType" required>
                                        <option value="" disabled selected>Select Type of Leave</option>
                                        <option value="sick">Sick Leave</option>
                                        <option value="vacation">Vacation Leave</option>
                                        <option value="personal">Personal Leave</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="leaveDate" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="leaveDate" name="leaveDate" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="startTime" class="form-label">Start Time</label>
                                    <input type="time" class="form-control" id="startTime" name="startTime">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="endTime" class="form-label">End Time</label>
                                    <input type="time" class="form-control" id="endTime" name="endTime">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="leaveReason" class="form-label">Reason for Leave</label>
                                <textarea class="form-control" id="leaveReason" name="leaveReason" rows="3" required placeholder="Please provide details about your leave request"></textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-send-fill me-2"></i>Submit Request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Leave Requests</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Duration</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2023-06-15</td>
                                        <td>Sick Leave</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                        <td>1 day</td>
                                        <td><a href="#" class="btn btn-sm btn-outline-secondary">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>2023-05-28</td>
                                        <td>Vacation</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                        <td>3 days</td>
                                        <td><a href="#" class="btn btn-sm btn-outline-secondary">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>2023-05-10</td>
                                        <td>Personal</td>
                                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                                        <td>0.5 day</td>
                                        <td><a href="#" class="btn btn-sm btn-outline-secondary">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple script to highlight active nav item
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>
</html>