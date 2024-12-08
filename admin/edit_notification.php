<?php
// edit_notification.php

// Include database connection
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $notificationId = $_GET['id'];

    // Fetch notification details
    $stmt = $pdo->prepare("SELECT * FROM notifications WHERE id = ?");
    $stmt->execute([$notificationId]);
    $notification = $stmt->fetch();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_notification'])) {
    $notificationId = $_POST['notification_id'];
    $message = $_POST['message'];
    $isRead = isset($_POST['is_read']) ? 1 : 0;

    // Update notification details
    $stmt = $pdo->prepare("UPDATE notifications SET message = ?, is_read = ? WHERE id = ?");
    $stmt->execute([$message, $isRead, $notificationId]);

    echo "Notification updated successfully!";
    header("Location: admin_notifications.php"); // Redirect back to the notification list page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Notification - Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-white text-center">Admin Dashboard</h3>
        <a href="admin_dashboard.html">Dashboard</a>
        <a href="admin_users.php">Manage Users</a>
        <a href="admin_activities.php">Manage Activities</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        <h1>Edit Notification</h1>
        <form action="edit_notification.php" method="POST">
            <input type="hidden" name="notification_id" value="<?php echo $notification['id']; ?>">
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" required><?php echo $notification['message']; ?></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="is_read" name="is_read" <?php echo ($notification['is_read']) ? 'checked' : ''; ?>>
                <label class="form-check-label" for="is_read">Mark as Read</label>
            </div>
            <button type="submit" name="update_notification" class="btn btn-primary">Update Notification</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
