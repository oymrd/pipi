<?php
// Get the visitor's IP address
$ip_address = $_SERVER['REMOTE_ADDR'];

// Log the IP address to a file
$file = 'ip_log.txt';
if (file_put_contents($file, $ip_address . "\n", FILE_APPEND | LOCK_EX) === false) {
    echo json_encode(array("status" => "error", "message" => "Error writing to file"));
} else {
    echo json_encode(array("status" => "success"));
}
?>
