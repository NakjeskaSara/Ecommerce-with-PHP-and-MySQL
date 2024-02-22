<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='Watch' LIMIT 4");

$stmt->execute();

$watch = $stmt->get_result();

?>