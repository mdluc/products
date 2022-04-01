<?php
require 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if ($price < 0) {
      echo "The price can't have a value less than 0";
    } else {
      $sql = "insert into `products` (name, price, description) values('$name','$price','$description')";
      $connect->query($sql) or die($connect->error());
      header("location: /");
    }
}

require "add.view.php";
