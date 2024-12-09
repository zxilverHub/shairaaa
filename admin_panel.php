<?php
session_start();
include 'config.php';

if (!isset($_SESSION['adminlog'])) {
    header("Location: admin_login.php");
    exit();
}

$unread_inquiries = $conn->query("SELECT COUNT(*) as count FROM inquiries WHERE is_read = 0")->fetch_assoc()['count'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - CDE Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <header class="admin-header">
        <h1>Admin Panel</h1>
        <nav>
            <a href="admin_panel.php">Inquiries <?php if ($unread_inquiries > 0) echo "($unread_inquiries)"; ?></a>
            <a href="admin_reviews.php">Reviews</a>
            <a href="admin_logout.php">Logout</a>
        </nav>
    </header>

    <main class="admin-main">
        <h2>Welcome, to admin Dashboard!</h2>
        <p>You have <?php echo $unread_inquiries; ?> unread inquiries.</p>
    </main>

    <footer class="admin-footer">
        <p>&copy; <?php echo date('Y'); ?> CDE Services. All rights reserved.</p>
    </footer>
</body>

</html>