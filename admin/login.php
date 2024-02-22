
<?php include('header.php');?>
<?php

include('../server/connection.php');


if(isset($_SESSION['admin_logged_in'])){
    header('location: index.php'); 
    exit;
}


if(isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT admin_id, admin_name, admin_email, admin_password FROM admins WHERE admin_email=? AND admin_password = ? LIMIT 1");
    $stmt->bind_param('ss', $email, $password);

if($stmt->execute()){
    $stmt->bind_result($admin_id, $adminname, $admin_email, $admin_password);
    $stmt->store_result();

    if($stmt->num_rows() == 1){
        $stmt->fetch();

        $_SESSION['admin_id'] = $admin_id;
        $_SESSION['admin_name'] = $admi_name; 
        $_SESSION['admin_email'] = $admin_email;
        $_SESSION['admin_logged_in'] = true;

        header('location: index.php?login_success=logged in successfuly');

    } else {
        header('location: login.php?error=could not verify your account');
    }
} else {
    header('location: login.php?error=something went wrong');
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
      <!--Bootstrap-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--Css-->
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
    
       <!--Login-->
   <section class="my-5 py-5">
    <div class="container text-center mt3 pt-5">
        <h2 class="form-weight-bold">Login</h2>
        <hr class="mx-auto">
    </div>
    <div class="mx-auto container">
        <form id="login-form" method="POST" action="login.php">
            <p style="color: red;" class="text-center"></p>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="login-email" name="email" placeholder="Email" required/>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" required/>
            </div>
            <div class="form-group text-center">
            <input type="Submit" class="btn btn-primary" id="login-btn" name="login_btn" value="Login"/>
            </div>

         
        </form>
    </div>
   </section>


</body>
</html>