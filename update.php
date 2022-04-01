<?php
require 'connection.php';

$id = $_GET['updateId'];
$sql = "select * from `products` where id=$id";
$result = $connect->query($sql) or die($connect->error());
$row = $result->fetch_assoc();
$name = $row['name'];
$price = $row['price'];
$description = $row['description'];

if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $price=$_POST['price'];
  $description=$_POST['description'];

  $sql = "update `products`
          set name='$name', price='$price', description='$description'
          where id=$id";
  $connect->query($sql) or die($connect->error());
  header('location:/');
}

require 'update.view.php';
