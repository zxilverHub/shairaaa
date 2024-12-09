<?php
include("./config.php");

$client_name = $_POST["client_name"];
$review = $_POST["review"];
$rating = $_POST["rating"];

$s = "insert into reviews (id, client_name, review, rating, date_posted) values (null, '$client_name', '$review', $rating, now())";

$conn->query($s);

header("Location: http://localhost/shairaeulalio-ws101-3b-website/index.php#reviews");
