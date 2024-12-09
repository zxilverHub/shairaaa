<?php
session_start();
include 'config.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "UPDATE inquiries SET is_read = 1 WHERE id = $id";
    $conn->query($sql);
}

header("Location: admin_inquiries.php");
exit();