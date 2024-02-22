
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
        .sidebar {
            background-color: wheat; /* сина позадина */
            color: black; /* бела боја на текстот */
        }
        .sidebar-item {
            color: black; /* бела боја на текстот */
            text-align: left;
        }
        .sidebar-button {
          font-weight: bold;
          text-decoration: none;
          color:black; /* сина боја за текстот */
          padding: 0;
          margin: 0;
}
        .section-title {
            text-align: right; /* го позиционира текстот во десниот дел */
            margin-top: 20px; /* маргина одгоре */
        }
        .custom-link {
    color: black; /* Црна боја на текстот */
    font-weight: bold; /* Болд стил на текстот */
}

    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="container">
    <div class="row">
        <div class="col-md-12 sidebar">
            <ul class="list-unstyled d-flex">
                <a class="nav-link flex-grow-1 custom-link" href="index.php">Dashboard</a>
                <a class="nav-link flex-grow-1 custom-link" href="index.php">Orders</a>
                <a class="nav-link flex-grow-1 custom-link" href="products.php">Products</a>
                <a class="nav-link flex-grow-1 custom-link" href="account.php">Account</a>
                <a class="nav-link flex-grow-1 custom-link" href="add_product.php">Add New Product</a>
                <a class="nav-link flex-grow-1 custom-link" href="help.php">Help</a>
            </ul>
        </div>
    </div>
</div>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>