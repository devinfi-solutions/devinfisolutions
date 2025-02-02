
<?php
session_start();

// Define the correct password
$correctPassword = "mypassword";

// Check if the submitted password matches the correct one
if (isset($_POST['password']) && $_POST['password'] === $correctPassword) {
    $_SESSION['authenticated'] = true;
    header("Location: index1.html");
    exit();
} else {
    header("Location: password.php?error=1");
    exit();
}
?>
