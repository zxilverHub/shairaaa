<?php
session_start();
$logstatus = "";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin@cde.com" && $password == "cdeadmin") {
        $_SESSION["adminlog"] = true;
        header("Location: http://localhost/shairaeulalio-ws101-3b-website/admin_panel.php");
        exit();
    } else {
        $logstatus = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>

<body>
    <form action="" method="post" class="login">
        <h1>Admin Log in</h1>
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <div class="status">
            <?php echo $logstatus; ?>
        </div>
        <input type="submit" value="login" name="login" class="log-btn">
    </form>
</body>

</html>