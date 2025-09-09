<?php
require_once "Database.php"; 

class Product extends Database
{
   public function store($request){  
      $product_name = $request['product_name']; 
      $price  = $request['price'];
      $quantity   = $request['quantity'];

      $sql = "INSERT INTO products(`product_name`, `price`, `quantity`)
      VALUES('$product_name','$price','$quantity')";

      if($this->conn->query($sql)){
          header('location:  ../views/dashboard.php');  
          exit;                         
      }
      else{
         die('Error creating the product: '. $this->conn->error);
      }
   }


   // READ
    public function getAllProducts(){
    $sql = "SELECT * FROM products";

    if($result = $this->conn->query($sql)){
      return $result;
    }
    else{
      die('Error retrieving all Products:  ' . $this->conn->error);
    }
}

   // READ
   public function getProduct($product_id){
      
    $sql = "SELECT * FROM products WHERE id = $product_id";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }
    else{
      die('Error retreiving the product: ' .$this->conn->error);
    }
  }

  //update
  public function update($request,$id){
      $product_name = $request['product_name'];
      $price = $request['price'];
      $quantity = $request['quantity'];

      $sql = "UPDATE products 
              SET product_name = '$product_name',
                  price = '$price',
                  quantity = '$quantity'
              WHERE id = $id";

      if($this->conn->query($sql)){
         header('location: ../views/dashboard.php');
         exit;
      }
      else{
         die('Error updating the product: ' . $this->conn->error);
      }
   }


  //delete
   public function delete($id){
    $sql = "DELETE FROM products WHERE id = $id";

    if($this->conn->query($sql)){
        header('location: ../views/dashboard.php');
        exit;
    }
    else{
        die('Error deleting the product: ' . $this->conn->error);
    }
}


  }