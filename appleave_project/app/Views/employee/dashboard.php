<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4 sidebar p-0">
                <div class="d-flex flex-column h-100 p-4">
                    <div class="text-center mb-4">
                        <img src="assets/img/profile.jpg" alt="Employee Picture" class="profile-img rounded-circle mb-3">
                        <h4>Nathaiel Manio Jr.</h4>
                        <p class="text-muted mb-4">Software Engineer</p>
                    </div>
                    
                    <hr class="my-2">
                    
                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </li>
                    </ul>
                    
                    <div class="mt-auto text-center text-muted small">
                        <p>© 2025 Redline Vanguard</p>
                    </div>
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
                                        <p class="card-text">Per month: <strong>1.25</strong></p>
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
                                        <p class="card-text">Per month: <strong>1.25</strong></p>
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
                                        <h5 class="card-title text-success">CTO Leave</h5>
                                        <p class="card-text">Per month: <strong>1.25</strong></p>
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
                                        <h5 class="card-title text-success">Special Privilege Leave</h5>
                                        <p class="card-text">Per month: <strong>1.25</strong></p>
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
                                        <h5 class="card-title text-dark">Number of Working Days</h5>
                                        <p class="card-text">Per month: <strong>1.25</strong></p>
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
                                    <label for="leaveType" class="form-label">Type of Leave</label>
                                    <select class="form-select" id="leaveType" name="leaveType" required onchange="showLeaveFields()">
                                        <option value="" disabled selected>Select Leave Type</option>
                                        <option value="vacation">Vacation Leave</option>
                                        <option value="vacation">Mandatory/Forced Leave</option>
                                        <option value="sick">Sick Leave</option>
                                        <option value="maternity">Maternity/Paternity Leave</option>
                                        <option value="">Special Privilege Leave</option>
                                        <option value="solo">Solo Parent Leave</option>
                                        <option value="study">Study Leave</option>
                                        <option value="">10-Day VAWC</option>
                                        <option value="">Rehabilitation Privilege</option>
                                        <option value="special">Special Leave Benefits for Women</option>
                                        <option value="emergency">Special Emergency</option>
                                        <option value="adaption">Adaption Leave</option>

                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="leaveDate" class="form-label">Date of Filling</label>
                                    <input type="date" class="form-control" id="leaveDate" name="leaveDate" required>
                                </div>
                            </div>
                            
                            <!-- Sick Leave Specific Fields -->
                            <div id="sickLeaveFields" class="leave-type-fields">
                            <div class="mb-3">
                            <label for="incase" class="form-label">In case Sick Leave</label>
                            <select class="form-select" id="incase" name="incase">
                                <option value="">In Hospital</option>
                                <option value="">Out Patient</option>
                            </select>
                            </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="doctorNote" class="form-label">Doctor's Note Required?</label>
                                        <select class="form-select" id="doctorNote" name="doctorNote">
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="illnessType" class="form-label">Type of Illness</label>
                                        <input type="text" class="form-control" id="illnessType" name="illnessType" placeholder="e.g. Flu, Injury, etc.">
                                    </div>
                                </div>
                                <div class="mb-3" id="doctorNoteAttachment" style="display: none;">
                                    <label for="leaveAttachment" class="form-label">Upload Doctor's Note</label>
                                    <input type="file" class="form-control" id="leaveAttachment" name="leaveAttachment" accept=".pdf,.doc,.docx,.jpg,.png">
                                </div>
                            </div>
                            
                            <!-- Vacation Leave Specific Fields -->
                            <div id="vacationLeaveFields" class="leave-type-fields">
                                <div class="row">
                                <label for="vacationLocation" class="form-label">Vacation Location</label>
                                    <div class="col-md-6 mb-3">
                                        <select class="form-select" id="vacationLocation" name="vacationLocation">
                                            <option value="">Select location</option>
                                            <option value="local">Within the Philippines</option>
                                            <option value="abroad">Abroad</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="vacationLocation" name="vacationLocation" placeholder="Where are you going?">
                                        </div>
                                    </div>
                                </div>
                                                        
                            <!-- Special Leave Benefits for Women Specific Fields -->
                            <div id="specialLeaveBenefitFields" class="leave-type-fields">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="doctorNote" class="form-label">Doctor's Note Required?</label>
                                        <select class="form-select" id="doctorNote" name="doctorNote">
                                            <option value="yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="illnessType" class="form-label">Type of Illness</label>
                                        <input type="text" class="form-control" id="illnessType" name="illnessType" placeholder="e.g. Flu, Injury, etc.">
                                    </div>
                                </div>
                                <div class="mb-3" id="doctorNoteAttachment" style="display: block;">
                                    <label for="leaveAttachment" class="form-label">Upload Doctor's Note</label>
                                    <input type="file" class="form-control" id="leaveAttachment" name="leaveAttachment" accept=".pdf,.doc,.docx,.jpg,.png">
                                </div>
                            </div>
                            
                            
                            <!-- Maternity/Paternity Leave Specific Fields -->
                            <div id="maternityLeaveFields" class="leave-type-fields">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="expectedDate" class="form-label">Expected Date of Birth</label>
                                        <input type="date" class="form-control" id="expectedDate" name="expectedDate">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="leaveDuration" class="form-label">Requested Leave Duration (days)</label>
                                        <input type="number" class="form-control" id="leaveDuration" name="leaveDuration" min="1" max="12">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Study Leave Specific Fields -->
                            <div id="studyLeaveFields" class="leave-type-fields">
                                    <div class="mb-3">
                                        <label for="expectedDate" class="form-label">In case of Study Leave</label>
                                        <select class="form-select" id="vacationLocation" name="vacationLocation">
                                            <option value="">Select Study Leave Field</option>
                                            <option value="local">Completion of Master's Degree</option>
                                            <option value="abroad">BAR/Board Examination Review</option>
                                        </select>
                                    </div>
                                </div>

                            <!-- Personal Leave Specific Fields -->
                            <div id="personalLeave" class="personalLeave">
                            <div class="row">
                                <label class="form-label">Leave Date Selection</label>

                                <!-- Radio buttons to choose selection type -->
                                <div class="col-12 mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="leaveType" id="singleDay" value="single" checked>
                                        <label class="form-check-label" for="singleDay">Single Day</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="leaveType" id="multipleDays" value="multiple">
                                        <label class="form-check-label" for="multipleDays">Multiple Days</label>
                                    </div>
                                </div>

                                <!-- Single day selection with AM/PM (shown by default) -->
                                <div class="col-md-12 mb-3" id="singleDaySection">
                                    <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="leaveDateSingle" class="form-label">Leave Date</label>
                                        <input type="date" class="form-control" id="leaveDateSingle" name="leaveDateSingle" min="">
                                    </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Time Period</label>
                                            <div class="d-flex m-1">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="timePeriod" id="amPeriod" value="AM" checked>
                                                    <label class="form-check-label" for="amPeriod">AM (Morning)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="timePeriod" id="pmPeriod" value="PM">
                                                    <label class="form-check-label" for="pmPeriod">PM (Afternoon)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Multiple days selection (hidden by default) -->
                                <div class="col-md-12 mb-3" id="multipleDaysSection" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="leaveDateStart" class="form-label">From Date</label>
                                            <input type="date" class="form-control" id="leaveDateStart" name="leaveDateStart" min="">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="leaveDateEnd" class="form-label">To Date</label>
                                            <input type="date" class="form-control" id="leaveDateEnd" name="leaveDateEnd">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script src="assets/js/script.js"></script>
</body>
</html>