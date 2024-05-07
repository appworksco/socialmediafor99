<?php

// Start session management and output buffering
session_start(); // Commence session management
ob_start(); // Activate output buffering

// Array to store invalid and success messages
$success = array(); // Array to hold success messages
$danger = array(); // Array to hold danger messages
$warning = array(); // Array to hold warning messages
$info = array(); // Array to hold info messages

// Include necessary files for database connectivity and facade classes
include(__DIR__ . '/../../db/connector.php'); // Include file for database connectivity
include(__DIR__ . '/../models/users-facade.php');
include(__DIR__ . '/../models/call-schedule-facade.php');
include(__DIR__ . '/../models/crud-facade.php');

// Initialize classes
$dbConnection = new DBConnection(); // Initialize database connection class
$usersFacade = new UsersFacade(); // Initialize users facade class
$callScheduleFacade = new CallScheduleFacade(); // Initialize call schedule facade class
$crudFacade = new CRUDFacade(); // Initialize call schedule facade class

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Appworks Co.">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="dist/css/custom.css">
    <!-- Template Fonts -->
    <link rel="stylesheet" href="../../vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <!-- Template CSS -->
    <link rel="stylesheet" href="dist/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="vendor/datetimepicker/jquery.datetimepicker.css">
    <link rel="stylesheet" href="../../dist/css/sb-admin-2.min.css">
    <title>socialmediafor99</title>
</head>

<body onload="requestFullScreen()">