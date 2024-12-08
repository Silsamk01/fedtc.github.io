<?php
// edit_user.php

// Include database connection
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $userId = $_GET['id'];
    
    // Fetch user details
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $user = $stmt->fetch();

    // Fetch profile details
    $stmtProfile = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
    $stmtProfile->execute([$userId]);
    $profile = $stmtProfile->fetch();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_user'])) {
    $userId = $_POST['user_id'];
    $email = $_POST['email'];
    $membershipType = $_POST['membership_type'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    // Update user details
    $stmt = $pdo->prepare("UPDATE users SET email = ?, membership_type = ? WHERE id = ?");
    $stmt->execute([$email, $membershipType, $userId]);

    // Update profile details
    $stmtProfile = $pdo->prepare("UPDATE profiles SET first_name = ?, last_name = ? WHERE user_id = ?");
    $stmtProfile->execute([$firstName, $lastName, $userId]);

    echo "User details updated successfully!";
    header("Location: admin_users.php"); // Redirect back to the user list page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-white text-center">Admin Dashboard</h3>
        <a href="admin_dashboard.html">Dashboard</a>
        <a href="admin_users.php">Manage Users</a>
        <a href="admin_activities.php">Manage Activities</a>
        <a href="admin_notifications.php">Manage Notifications</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        <h1>Edit User</h1>
        <form action="edit_user.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="membership_type">Membership Type</label>
                <select class="form-control" id="membership_type" name="membership_type">
                    <option value="basic" <?php echo ($user['membership_type'] == 'basic') ? 'selected' : ''; ?>>Basic</option>
                    <option value="premium" <?php echo ($user['membership_type'] == 'premium') ? 'selected' : ''; ?>>Premium</option>
                    <option value="admin" <?php echo ($user['membership_type'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $profile['first_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $profile['last_name']; ?>" required>
            </div>
            <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
