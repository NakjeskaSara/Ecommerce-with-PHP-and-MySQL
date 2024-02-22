   <?php 
   
   session_start();
      include('../server/connection.php');
   ?>
   
   <?php 
     if(!isset($_SESSION['admin_logged_in'])){
        header('location: login.php');
        exit();
     }

     if(isset($_GET['product_id'])){

           $product_id = $_GET['product_id'];

           $stmt2 = $conn->prepare("DELETE FROM products WHERE product_id=?");

           $stmt2->bind_param('i',$product_id);

          if($stmt2->execute()){

           header('location: products.php?deleted_succesffuly=Product has been deleted successfully');
    
        }else{
            header('location: products.php?deleted_failure=Could not deleted product');
     }

    }
   ?>