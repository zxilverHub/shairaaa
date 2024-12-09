<?php
session_start();
include 'config.php';

if (!isset($_SESSION['adminlog'])) {
    header("Location: admin_login.php");
    exit();
}

$result = $conn->query("SELECT * FROM reviews ORDER BY date_posted DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Reviews - CDE Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <header class="admin-header">
        <h1>Admin Reviews</h1>
        <nav>
            <a href="admin_panel.php">Inquiries</a>
            <a href="admin_reviews.php">Reviews</a>
            <a href="admin_logout.php">Logout</a>
        </nav>
    </header>

    <main class="admin-main">
        <h2>Reviews</h2>
        <table class="reviews-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Review</th>
                    <th>Rating</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['client_name']}</td>";
                    echo "<td>{$row['review']}</td>";
                    echo "<td>{$row['rating']}</td>";
                    echo "<td>{$row['date_posted']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <footer class="admin-footer">
        <p>&copy; <?php echo date('Y'); ?> CDE Services. All rights reserved.</p>
    </footer>
</body>

</html>