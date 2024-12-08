<?php
// admin_users.php

// Include database connection
include('db_connect.php');

// Fetch all users
$query = "SELECT * FROM users";
$result = $pdo->query($query);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_user'])) {
    $userId = $_POST['user_id'];

    // Delete user and associated profile, activities, notifications
    $pdo->beginTransaction();
    try {
        $pdo->exec("DELETE FROM notifications WHERE user_id = $userId");
        $pdo->exec("DELETE FROM activities WHERE user_id = $userId");
        $pdo->exec("DELETE FROM profiles WHERE user_id = $userId");
        $pdo->exec("DELETE FROM users WHERE id = $userId");
        $pdo->commit();
        echo "User deleted successfully!";
    } catch (Exception $e) {
        $pdo->rollBack();
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users - Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-white text-center">Admin Dashboard</h3>
        <a href="admin_dashboard.html">Dashboard</a>
        <a href="admin_activities.php">Manage Activities</a>
        <a href="admin_notifications.php">Manage Notifications</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        <h1>Manage Users</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Membership</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['membership_type']; ?></td>
                        <td>
                            <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                            <form action="admin_users.php" method="POST" style="display:inline;">
                                <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_user" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
