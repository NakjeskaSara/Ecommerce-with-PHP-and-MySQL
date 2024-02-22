<?php 
include('header.php');

if(isset($_GET['product_id'])){

    $product_id = $_GET['product_id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id=? ");
    $stmt->bind_param('i',$product_id);
    $stmt->execute();

    $products = $stmt->get_result();
    
} else if(isset($_POST['edit_btn'])) {

    $product_id = $_POST['product_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $offer = $_POST['offer'];
    $color = $_POST['color'];
    $category = $_POST['category'];

    $stmt = $conn->prepare("UPDATE products SET product_name=?, product_description=?, product_price=?,  
    product_special_offer=?, product_color=?, product_category=? WHERE product_id=?");

$stmt->bind_param('ssssssi', $title,  $description, $price, $offer, $color, $category, $product_id);

    if($stmt->execute()) {
        header('location: products.php?edit_success_message=Product has been updated successfully');
    } else {
        header('location: products.php?edit_failure_message=Error occurred, try again');
    }
   
}
?>



   <style>
      

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        form > div {
            margin-bottom: 10px;
            width: 50%;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        button {
            padding: 8px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

     <div class="mx-auto container"> 
        <form id="edit-form" method="POST" action="edit_product.php">
        <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error']; } ?></p>
          <div class="form-group mt-2">

            <?php foreach($products as $product){ ?>

                <input type="hidden" name="product_id" value="<?php echo $product['product_id'];?>"/>

                <div>
                    <label for="title">Title:</label>
                    <input type="text" id="product-name" value="<?php echo $product['product_name'] ?>" name="title" placeholder="Title" required>
                </div>
            <div>
                <label for="description">Description:</label>
                <textarea id="product-desc" name="description" rows="6" placeholder="Description"><?php echo $product['product_description']; ?></textarea>
            </div>
            <div>
                <label for="price">Price:</label>
                <input type="text" id="product-price" name="price" value="<?php echo $product['product_price'] ?>"  placeholder="Price">
            </div>
            <div>
                <label>Category:</label>
                <select class="form-select" required name="category">
                    <option value="Bags">Bags</option>
                    <option value="Watch">Watch</option>
                    <option value="Coat">Coat</option>
                </select>
            </div>
            <div>
                <label for="color">Color:</label>
                <input type="text" id="color" value="<?php echo $product['product_color'] ?>"  name="color" placeholder="Color">
            </div>
            <div>
                <label for="offer">Special Offer/Sale:</label>
                <input type="text" id="color" value="<?php echo $product['product_special_offer']; ?>" name="offer" placeholder="Sale %">
            </div>
            <div>
            <?php } ?>
     
           
            <br>

                <input type="submit" class="btn btn-primary" name="edit_btn" value="Edit"/>
            </div>
        </div>
    </form>
</body>
</html>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>