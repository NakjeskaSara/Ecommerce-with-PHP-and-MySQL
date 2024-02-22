<?php
session_start();
?>

<?php
include('../server/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa; /* бела позадина */
        }
        .navbar {
            background-color: wheat; /* црна позадина */
            color: black; /* бела боја на текстот */
        }
        .navbar-brand {
            color: black; /* бела боја на текстот */
            margin-right: auto; /* го позиционира логото во левиот дел */
        }
        .sign-out-btn {
            color: black; /* бела боја на текстот */
        }
        .dashboard-title {
            text-align: center; /* го центрира текстот */
            margin-top: 50px; /* маргина одгоре */
        }

        .section-title {
            text-align: right; /* го позиционира текстот во десниот дел */
            margin-top: 20px; /* маргина одгоре */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container-fluid">
        <span class="navbar-brand">Oragins</span>
            <?php if(isset($_SESSION['admin_logged_in'])){ ?>
            
            <a class="nav-link px-3" style="color:black" href="logout.php?logout=1">Sign out</a>
            <?php } ?>
        </div>
    </nav>
