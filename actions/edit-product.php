<?php

require_once "../classes/Product.php"; 

$product = new Product;

$product->update($_POST,$_GET['product_id']);

?>