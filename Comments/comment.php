<?php
session_start();
include '../config.php';

if (!isset($_SESSION["user_id"])) {
    echo "Unauthorized access.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION["user_id"];
    $comment = $conn->real_escape_string($_POST["comment"]);

    $conn->query("INSERT INTO comments (user_id, comment, created_at) VALUES ('$user_id', '$comment', NOW())");

    // Redirect back to index.php after submission
    header("Location: index.php");
    exit();
}
?>
