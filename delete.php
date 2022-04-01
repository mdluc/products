<?php
require 'connection.php';

if(isset($_GET['deleteId'])){
  $deleteId = $_GET['deleteId'];
  
  $sql = "delete from `products` where id=$deleteId";

  $connect->query($sql) or die($connect->error());
  header('location: /');
}