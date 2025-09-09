<?php
session_start();

require_once "../classes/Product.php"; //import Product class

$product_obj = new Product;
$all_products = $product_obj->getAllProducts();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- custom css -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom:80px;" >
  <div class="container">
    <a href="dashboard.php" class="navbar-brand">
      <h1 class="h3">The sales</h1>
    </a>
    <div class="navbar-nav">
      <span class="navbar-text"><?=$_SESSION['full_name']?> <?=$_SESSION['id']?></span>
      <form action="../actions/logout.php" method="post" class="d-flex ms-2">
        <button type="submit" class="text-danger bg-transparent border-0">
          Log out
        </button>
      </form>
    </div>
  </div>
  </nav>

  <div class="container row justify-content-center gx-0">
   <div class="col-8 text-end">
    <button class="btn btn-success">
    <a href="../views/add-product.php" class="text-white text-decoration-none">
      ADD PRODUCT <i class="fa-solid fa-square-plus"></i>
    </a>
    </button>
  </div>
  </div>


  <main class="row justify-content-center gx-0">
    <div class="col-6">
      <h2 class="text-center">PRODUCTS LIST</h2>
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th><!-- for action bottuns --></th>
          </tr>
        </thead>

        <tbody>
          <!-- display all data -->
           <?php
           while($product = $all_products->fetch_assoc()){
           ?>
           <tr>
           </td>
           <td><?=$product['id']?></td>
           <td><?=$product['product_name']?></td>
           <td><?=$product['price']?></td>
           <td><?=$product['quantity']?></td>
           <td>
            <!-- for action bottuns -->
              <a href="edit-product.php?product_id=<?= $product['id'] ?>" class="btn btn-outline-warning" title="Edit">
                 <i class="fa-solid fa-pen-to-square"></i>
              </a>
              <a href="delete-product.php?product_id=<?= $product['id'] ?>" class="btn btn-outline-danger" title="Delete">
                <i class="fa-solid fa-trash-can"></i>
              </a>
           </td>
           </tr>
           <?php
           }
           ?>
        </tbody>


      </table>
    </div>
  </main>



</body>
</html>