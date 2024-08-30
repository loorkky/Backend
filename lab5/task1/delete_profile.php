<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: index.php");
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'lab5');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_SESSION['username'];

$delete_query = "DELETE FROM users WHERE username='$username'";

if ($conn->query($delete_query) === TRUE) {
    echo "Profile deleted successfully";

    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();

    header("Location: index.html");
    exit();
} else {
    echo "Error deleting profile: " . $conn->error;
}

$conn->close();
