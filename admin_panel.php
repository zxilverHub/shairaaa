<?php
session_start();
include 'config.php';

if (!isset($_SESSION['adminlog'])) {
    header("Location: admin_login.php");
    exit();
}

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
            <a href="admin_panel.php">Inquiries </a>
            <a href="admin_reviews.php">Reviews</a>
            <a href="admin_logout.php">Logout</a>
        </nav>
    </header>

    <main class="admin-main">
        <h2>Welcome, to admin Dashboard!</h2>
        <table class="reviews-table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>

            <?php
            $s = "select * from inquiries";
            $result = $conn->query($s);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["message"]; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </main>

    <footer class="admin-footer">
        <p>&copy; <?php echo date('Y'); ?> CDE Services. All rights reserved.</p>
    </footer>
</body>

</html>