<?php
session_start();

require_once "../classes/User.php";
require_once "../classes/Product.php";

$product_obj = new Product;
$product = $product_obj->getProduct($_GET['product_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">
   <div style="height:100vh;">
      <div class="row h-100 m-0">
        <div class="card w-25 my-auto mx-auto">
          <div class="card-header bg-white border-0 py-3">
            <h1 class="text-center">EDIT PRODUCT</h1>
          </div>

          <div class="card-body">
            <form action="../actions/edit-product.php?product_id=<?= $product['id'] ?>" method="post">
              <div class="mb-3">
                <label for="product-name" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="product-name" class="form-control" value="<?=$product['product_name']?>" required autofocus>
              </div>

              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="<?=$product['price']?>" required >
              </div>

               <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="<?=$product['quantity']?>"  required>
               </div>

               <button type="submit" class="btn btn-success w-100">EDIT</button>
            </form>
          </div>
        </div>
      </div>

   </div>


  
</body>
</html>