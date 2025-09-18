<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        // Simulate sending email (in real project use mail() or PHPMailer)
        $user = explode("@", $email)[0];
        echo "Welcome, " . htmlspecialchars($user) . "! A welcome email has been sent to " . $email;
    }
}
?>
<form method="post">
    <input type="text" name="email" placeholder="Enter your email" required>
    <button type="submit">Sign Up</button>
</form>
