<?php
// admin_activities.php

// Fetch all activities
$query = "SELECT * FROM activities";
$result = $pdo->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Activities - Admin</title>
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
        <h1>Manage Activities</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Activity Type</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['activity_type']; ?></td>
                        <td><?php echo $row['activity_description']; ?></td>
                        <td>
                            <a href="edit_activity.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                            <form action="delete_activity.php" method="POST" style="display:inline;">
                                <input type="hidden" name="activity_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_activity" class="btn btn-danger">Delete</button>
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
