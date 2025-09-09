<?php

// This is a new code branch main
class Database{
    private $server_name = "localhost";
    private $username = "root";
    private $password ="";
    private $db_name ="sales_oop";
    protected $conn;  //このこだけチャイルドでも使う

    public function __construct()
    {
      $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
      // $this->conn holds yhe connection to the database

      // check the conection
      if($this->conn->connect_error){
        die("Unable to connect to the database: ". $this->conn->connect_error);
      }
    }


}


?>
