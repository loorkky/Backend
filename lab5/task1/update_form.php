<?php
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];

$current_username = "";
$current_email = "";

$conn = new mysqli('localhost', 'root', '', 'lab5');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $current_username = $row['username'];
    $current_email = $row['email'];
}

$conn->close();
?>

<h2>Update Your Information:</h2>
<form action="" method="post">
    <label for="new_username">New Username:</label>
    <input type="text" id="new_username" name="new_username" value="<?php echo htmlspecialchars($current_username); ?>" required>
    <br><br>
    <label for="new_email">New Email:</label>
    <input type="email" id="new_email" name="new_email" value="<?php echo htmlspecialchars($current_email); ?>" required>
    <br><br>
    <input type="submit" value="Update">
</form>
