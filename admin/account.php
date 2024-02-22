
<?php
ob_start(); // Start output buffering
include('header.php');
include('sidemenu.php');
?>

<?php 
   if(!isset($_SESSION['admin_logged_in'])){
             header('location: login.php');
             exit();
   }
?>
<div class="container-fluid">
    <div class="row" style="min-height: 1000px;">

 <main class="col-md-9 ms-sm-auuto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowarp aling-items-center">
        <h1 class="h2">Admin Account</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
        </div>
    </div>

    <div class="container">
        <p>Id: <?php echo $_SESSION['admin_id'];?></p>
        <p>Name: <?php echo $_SESSION['admin_name'];?></p>
        <p>Email: <?php echo $_SESSION['admin_email'];?></p>
    </div>

    </div>
 </main>
</div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>