<?php
ob_start(); // Start output buffering

// Start the session if it hasn't been started yet
session_start();

// Set success message to 0
$_SESSION['success'] = '0';

// Redirect the user to index.html
header('Location: index.html');
header('Location: ' . $_SERVER['REQUEST_URI']);
exit;

ob_end_flush(); // Flush output buffer
?>
