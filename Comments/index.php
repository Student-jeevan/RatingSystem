<?php
session_start();
include '../config.php';
if (!isset($_SESSION["user_id"])) {
    echo "Please <a href='../Authentication/login.php'>login</a> to comment.";
    exit();
}

$user_id = $_SESSION["user_id"];
$name = $_SESSION["name"];

// Fetch comments
$result = $conn->query("SELECT comments.comment, users.name FROM comments 
                        JOIN users ON comments.user_id = users.user_id 
                        ORDER BY comments.created_at DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($name); ?>!</h2>

<form method="POST" action="comment.php">
    <textarea name="comment" placeholder="Write your comment..." required></textarea>
    <button type="submit">Submit</button>
</form>

<h3>Comments</h3>
<ul>
    <?php while ($row = $result->fetch_assoc()): ?>
        <li><strong><?php echo htmlspecialchars($row["name"]); ?>:</strong> 
            <?php echo htmlspecialchars($row["comment"]); ?>
        </li>
    <?php endwhile; ?>
</ul>

</body>
</html>
