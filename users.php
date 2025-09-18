<?php
// Simulate DB connection and users
$users = [
    ["id" => 1, "name" => "Alice", "email" => "alice@example.com"],
    ["id" => 2, "name" => "Bob", "email" => "bob@example.com"],
    ["id" => 3, "name" => "Charlie", "email" => "charlie@example.com"]
];

echo "<h2>Registered Users</h2><ol>";
foreach ($users as $user) {
    echo "<li>" . htmlspecialchars($user['name']) . " (" . htmlspecialchars($user['email']) . ")</li>";
}
echo "</ol>";
?>
