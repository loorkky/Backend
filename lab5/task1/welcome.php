<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
<p>You have successfully logged in.</p>

<?php include 'update_form.php'; ?>

<br>
<form action="delete_profile.php" method="post" onsubmit="return confirm('Are you sure you want to delete your profile?');">
    <input type="hidden" name="delete_profile" value="1">
    <input type="submit" value="Delete Profile">
</form>
<br>
<a href="logout.php">Logout</a>
</body>
</html>
