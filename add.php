<?php
require 'connection.php';
require 'validateData.php';
require 'add.view.php';

if (isset($_POST['submit'])) {
    if ($nameError == "" && $priceError == "" && $descriptionError == "") {
        $sql = "INSERT INTO `products` (name,price,description) VALUES(?,?,?)";
        $result = $connect->prepare($sql);
        $result->bind_param('sis', $name, $price, $description);
        $result->execute();
        header("location: /");
    } else {
        $submitError = "you didnt enter data corectly";
    }
}
