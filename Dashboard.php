<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.ibb.co/zb1QCRC/Screenshot-24.png" type="image/x-icon">
    <title>User Dashboard - FDTC</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dashboard-header {
            background-color: #0056b3;
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 30px 30px 0 0;
        }

        .dashboard-sidebar {
            background-color: #f8f9fa;
            padding-top: 30px;
            border-radius: 0 30px 30px 0;
        }

        .dashboard-sidebar a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            display: block;
            margin-bottom: 15px;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .dashboard-sidebar a:hover {
            background-color: #ddd;
            transform: translateX(5px);
        }

        .dashboard-main {
            background-color: #f0f4f8;
            padding: 30px;
            border-radius: 0 30px 30px 0;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card-header {
            background-color: #0056b3;
            color: white;
            border-radius: 20px 20px 0 0;
        }

        .card-body {
            background-color: #ffffff;
            border-radius: 0 0 20px 20px;
        }

        .welcome-text {
            color: #0056b3;
            font-weight: bold;
        }

        .notification-list {
            list-style-type: none;
            padding: 0;
        }

        .notification-list li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            background-color: #f9f9f9;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }

        .notification-list li:hover {
            background-color: #e1f3ff;
        }

        .unread {
            background-color: #f0f8ff;
        }

        @media (max-width: 576px) {
            .dashboard-header h1 {
                font-size: 1.5rem;
            }

            .dashboard-sidebar {
                padding-top: 20px;
            }

            .dashboard-sidebar a {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>

    <!-- Dashboard Layout -->
    <div class="container-fluid">
        <!-- Header -->
        <div class="dashboard-header">
            <h1>Welcome to your Dashboard, <span id="username">Naga</span></h1>
            <p class="lead">Member since: President</p>
            <!-- Logout Button (simulate logout action) -->
            <button id="logoutBtn" class="btn btn-light">Logout</button>
        </div>

        <!-- Sidebar and Main Content -->
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 dashboard-sidebar">
                <div class="container">
                    <h4>Member Menu</h4>
                    <a href="profile.html">Profile Overview</a>
                    <a href="activity.html">Recent Activity</a>
                    <a href="notifications.html">Notifications</a>
                    <a href="settings.html">Settings</a>
                    <a href="#" id="logoutLink">Logout</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 dashboard-main">
                <div class="container">
                    <!-- Profile Overview Card -->
                    <div class="card">
                        <div class="card-header">
                            Profile Overview
                        </div>
                        <div class="card-body">
                            <h5 class="welcome-text">Hello, <span id="profileName">Naga</span>!</h5>
                            <p><strong>Email:</strong> john.doe@example.com</p>
                            <p><strong>Membership Type:</strong> Premium Member</p>
                            <p><strong>Location:</strong> New York, USA</p>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#updateProfileModal">Update
                                Profile</button>
                        </div>
                    </div>

                    <!-- Recent Activity Card -->
                    <div class="card">
                        <div class="card-header">
                            Recent Activity
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Completed a course on Ethical Data Practices (November 2024)</li>
                                <li>Joined the "Data Science Innovations" group (October 2024)</li>
                                <li>Submitted research paper on AI Ethics (September 2024)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Notifications Card -->
                    <div class="card">
                        <div class="card-header">
                            Notifications
                        </div>
                        <div class="card-body">
                            <ul class="notification-list" id="notificationList">
                                <li class="unread"><strong>New Event:</strong> Join our upcoming webinar on 'Future of
                                    AI' - December 15, 2024</li>
                                <li><strong>Reminder:</strong> Complete your membership renewal before January 1st.</li>
                                <li><strong>Special Offer:</strong> Get 20% off on all training programs this month!</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Settings Card -->
                    <div class="card">
                        <div class="card-header">
                            Account Settings
                        </div>
                        <div class="card-body">
                            <p><a href="#">Change Password</a></p>
                            <p><a href="#">Update Profile Information</a></p>
                            <p><a href="#">Manage Notifications</a></p>
                            <p><a href="#">Privacy Settings</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Profile Modal -->
    <div class="modal fade" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="updateProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateProfileModalLabel">Update Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateProfileForm">
                        <div class="form-group">
                            <label for="profileNameInput">Full Name</label>
                            <input type="text" class="form-control" id="profileNameInput" value="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="profileEmailInput">Email</label>
                            <input type="email" class="form-control" id="profileEmailInput" value="john.doe@example.com"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="profileLocationInput">Location</label>
                            <input type="text" class="form-control" id="profileLocationInput" value="New York, USA"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS & jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Simulating logout (for demonstration purposes)
        document.getElementById('logoutBtn').addEventListener('click', function () {
            alert('You have been logged out.');
            // Redirect to login page or reset the session
            window.location.href = 'login.html'; // Placeholder for actual login page
        });

        // Simulate updating profile info
        document.getElementById('updateProfileForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form submission

            // Get input values
            const name = document.getElementById('profileNameInput').value;
            const email = document.getElementById('profileEmailInput').value;
            const location = document.getElementById('profileLocationInput').value;

            // Update profile details dynamically
            document.getElementById('profileName').innerText = name;
            document.getElementById('profileEmailInput').value = email;
            document.getElementById('profileLocationInput').value = location;

            alert('Profile updated successfully!');
            $('#updateProfileModal').modal('hide');
        });
    </script>

</body>

</html>
