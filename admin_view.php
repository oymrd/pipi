<?php
// Ensure only you can access this page
session_start();
$authorized_user = 'your_username';
$authorized_pass = 'your_password';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    if ($_POST['username'] === $authorized_user && $_POST['password'] === $authorized_pass) {
        $_SESSION['logged_in'] = true;
    } else {
        echo '<form method="post"><input type="text" name="username" placeholder="Username"><input type="password" name="password" placeholder="Password"><input type="submit" value="Login"></form>';
        exit;
    }
}

// Read the IP addresses from the file
$file = 'ip_log.txt';
if (file_exists($file)) {
    $ip_addresses = file($file, FILE_IGNORE_NEW_LINES);
} else {
    $ip_addresses = array();
}

// Display the IP addresses
echo "<h1>Logged IP Addresses</h1><ul>";
foreach ($ip_addresses as $ip) {
    echo "<li>$ip</li>";
}
echo "</ul>";
?>
<?php
// Ensure only you can access this page
session_start();
$authorized_user = 'oymrd';
$authorized_pass = 'hi';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    if ($_POST['username'] === $authorized_user && $_POST['password'] === $authorized_pass) {
        $_SESSION['logged_in'] = true;
    } else {
        echo '<form method="post"><input type="text" name="username" placeholder="Username"><input type="password" name="password" placeholder="Password"><input type="submit" value="Login"></form>';
        exit;
    }
}

// Read the IP addresses from the file
$file = 'ip_log.txt';
if (file_exists($file)) {
    $ip_addresses = file($file, FILE_IGNORE_NEW_LINES);
} else {
    $ip_addresses = array();
}

// Display the IP addresses
echo "<h1>Logged IP Addresses</h1><ul>";
foreach ($ip_addresses as $ip) {
    echo "<li>$ip</li>";
}
echo "</ul>";
?>
