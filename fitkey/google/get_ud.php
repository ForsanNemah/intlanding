<?php
// Get the visitor's IP address
$ip_address = $_SERVER['REMOTE_ADDR'];

// Get the visitor's user agent
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Get the current timestamp in Unix format
$timestamp = time();

// Output the results
echo "IP Address: " . $ip_address . "\n";
echo "User Agent: " . $user_agent . "\n";
echo "Timestamp (Unix): " . $timestamp . "\n";
?>