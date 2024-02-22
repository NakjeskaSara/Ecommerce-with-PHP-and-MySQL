<?php
include('layouts/header.php');
?>
<?php


// Функција за додавање на производ во кошничка
if(isset($_POST['add_to_cart'])){
    // Проверка дали постои кошничката во сесијата
    if(isset($_SESSION['cart'])){
        // Добивање на идентификаторите на производите во кошничката
        $products_array_ids = array_column($_SESSION['cart'], "product_id");

        // Проверка дали производот веќе е додаден во кошничката
        if(!in_array($_POST['product_id'], $products_array_ids)){
            $product_id = $_POST['product_id'];
            $product_array = array(
                'product_id' => $_POST['product_id'],
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity']
            );

            // Додавање на новиот производ во кошничката
            $_SESSION['cart'][$product_id] = $product_array;
        } else {
            // Ако производот веќе е во кошничката, прикажи порака за грешка
            echo '<script>alert("Product was already added to cart");</script>';
        }
    } else {
        // Ако ова е првиот производ во кошничката, креирај нова кошничка
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        $product_array = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'product_quantity' => $product_quantity
        );

        // Додавање на новиот производ во празна кошничка
        $_SESSION['cart'][$product_id] = $product_array;
    }

    // Пресметување на вкупниот износ на кошничката
    calculateTotalCart();
}

// Функција за бришење на производ од кошничката
else if(isset($_POST['remove_product'])){
    $product_id = $_POST['product_id'];

    // Проверка дали производот постои во кошничката
    if(isset($_SESSION['cart'][$product_id])){
        // Ако производот постои, отстрани го од кошничката
        unset($_SESSION['cart'][$product_id]);

        // Пресметај го вкупниот износ на кошничката откако ќе биде отстранет производот
        calculateTotalCart();
    } else {
        // Ако производот не постои во кошничката, прикажи порака за грешка или обработи ја според потребите
        echo '<script>alert("Product not found in cart.");</script>';
    }
}

// Функција за пресметување на вкупниот износ на кошничката
function calculateTotalCart(){
    $total_price = 0; 
    $total_quantity = 0;

    foreach($_SESSION['cart'] as $key => $value){
        $product = $_SESSION['cart'][$key];
        $price = $product['product_price'];
        $quantity = $product['product_quantity'];

        $subtotal = $total_price + ($price * $quantity);
        $total_price += $subtotal;
        $total_quantity = $total_quantity + $quantity;

        // Дебагирај ги пресметките
        echo "Price: $price, Quantity: $quantity, Subtotal: $subtotal, Total so far: $total_price<br>";
    }

    // Зачувај го вкупниот износ во сесијата
    $_SESSION['total'] = $total_price;
    $_SESSION['quantity'] = $total_quantity;
    var_dump($_SESSION['quantity']);
}


?>


    <style>
     .product img{
        width: 100%;
        height: auto;
        box-sizing: border-box;
        object-fit: cover;
     }
     .pagination a{
        color: coral;
     }
     .pagination li:hover a{
        color: white;
        background-color: coral;
     }
    </style>

    <!--Cart-->
    <section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weigh-blode">Your Cart</h2>
            <hr>
        </div>

        <table class="mt-5 mt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php if(isset($_SESSION['cart'])){ ?>

         <?php foreach($_SESSION['cart'] as $key => $value) { ?> 

            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/<?php  echo $value['product_image']; ?>" alt=""/>
                        <div>
                            <p><?php  echo $value['product_name']; ?></p>
                            <small><span>$</span><?php echo $value['product_price']; ?></small>
                            <br>
                            <form method="POST" action="cart.php">
                                <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>"/>
                                <input type="submit" name="remove_product" class="remove-btn" value="Remove" />
                            </form>
                        </div>
                    </div>

                </td>
                <td>
                <form method="POST" action="cart.php">
                <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>"/>
                <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>"/>
                <input type="submit" class="edit-btn" value="Edit" name="edit_quantity"/>
</form>

                </td>

                <td>
                    <span>$</span>
                    <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price']; ?></span>
                </td>
            </tr>

            <?php } ?>

            <?php } ?>
       
       </table>
       


            <div class="cart-total">
                <table>
                    
                    <tr>
                        <td>Total</td>
                        <?php if(isset($_SESSION['cart'])){ ?>
                        <td>$ <?php echo $_SESSION['total']; ?></td>
                        <?php } ?>
                    </tr>
                </table>
            </div>
<div class="checkout-container">
    <form method="POST" action="checkout.php">
    <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout"/>
    </form>
</div>
    </section>

    <?php
include('layouts/footer.php');
?>