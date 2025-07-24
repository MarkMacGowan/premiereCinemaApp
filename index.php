<?php
// Open SQLite3 DB (will create it if it doesn't exist)
$db = new SQLite3('data.sqlite3');

// Create table
$db->exec("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)");

// Insert a user
$db->exec("INSERT INTO users (username, password) VALUES ('admin', '1234')");

// Query users
$result = $db->query("SELECT * FROM users");

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "User: " . $row['username'] . "<br>";
}




?>