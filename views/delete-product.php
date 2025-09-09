
<?php
session_start();
require_once "../classes/Product.php";

$product_obj = new Product;
$product = $product_obj->getProduct($_GET['product_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete User</title>

  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<main class="container">
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="text-center mb-4">
                <i class="fa-solid fa-triangle-exclamation text-warning display-4"></i>
                <h2 class="fw-light mb-3 text-danger">Delete Product</h2>
                <p class="fw-bold mb-0">
                    Are you sure you want to delete 
                    "<span class="text-primary"><?= $product['product_name'] ?></span>"?
                </p>
            </div>
            <div class="row">
                <div class="col">
                    <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                </div>
                <div class="col">
                    <form action="../actions/delete-product.php?product_id=<?= $product['id'] ?>" method="post">
                        <button type="submit" class="btn btn-outline-danger w-100" name="btn_delete">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>



  
</body>
</html>