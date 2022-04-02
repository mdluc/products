<?php
require 'connection.php';

$id = $_GET['updateId'];
$sql = "select * from `products` where id=$id";
$result = $connect->query($sql) or die($connect->error());
$row = $result->fetch_assoc();
$name = $row['name'];
$price = $row['price'];
$description = $row['description'];

require 'validateData.php';

if (isset($_POST['submit'])) {
    if ($nameError == "" && $priceError == "" && $descriptionError == "") {
        $sql = "update `products`
          set name=?, price=?, description=?
          where id=?";
        $result = $connect->prepare($sql);
        $result->bind_param('sisi', $name, $price, $description, $id);
        //$connect->query($sql) or die($connect->error());
        $result->execute() or die($result->error());
        header('location:/');
    } else {
        $submitError = "you didnt enter data corectly";
    }
}

require 'update.view.php';
