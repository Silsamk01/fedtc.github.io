<?php
// edit_activity.php

// Include database connection
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $activityId = $_GET['id'];

    // Fetch activity details
    $stmt = $pdo->prepare("SELECT * FROM activities WHERE id = ?");
    $stmt->execute([$activityId]);
    $activity = $stmt->fetch();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_activity'])) {
    $activityId = $_POST['activity_id'];
    $activityType = $_POST['activity_type'];
    $activityDescription = $_POST['activity_description'];

    // Update activity details
    $stmt = $pdo->prepare("UPDATE activities SET activity_type = ?, activity_description = ? WHERE id = ?");
    $stmt->execute([$activityType, $activityDescription, $activityId]);

    echo "Activity updated successfully!";
    header("Location: admin_activities.php"); // Redirect back to the activity list page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity - Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-white text-center">Admin Dashboard</h3>
        <a href="admin_dashboard.html">Dashboard</a>
        <a href="admin_users.php">Manage Users</a>
        <a href="admin_notifications.php">Manage Notifications</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        <h1>Edit Activity</h1>
        <form action="edit_activity.php" method="POST">
            <input type="hidden" name="activity_id" value="<?php echo $activity['id']; ?>">
            <div class="form-group">
                <label for="activity_type">Activity Type</label>
                <input type="text" class="form-control" id="activity_type" name="activity_type" value="<?php echo $activity['activity_type']; ?>" required>
            </div>
            <div class="form-group">
                <label for="activity_description">Activity Description</label>
                <textarea class="form-control" id="activity_description" name="activity_description" rows="3" required><?php echo $activity['activity_description']; ?></textarea>
            </div>
            <button type="submit" name="update_activity" class="btn btn-primary">Update Activity</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
