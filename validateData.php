<?php

$nameError = $priceError = $descriptionError = $submitError = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameError = "Please enter name<br>";
    } else {
      //validate function  
      $name = $_POST['name'];

        if ($name == false) {
            $nameError = "Please enter a valid name";
        }
    }

    if (empty($_POST['price'])) {
        $priceError = "Please enter price<br>";
    } else {
        $price = $_POST['price'];

        if ($price == false  || $_POST['price'] < 0) {
            $descriptionError = "Please enter a valid price";
        }
    }

    if (empty($_POST['description'])) {
        $descriptionError = "Please enter description<br>";
    } else {
        $description = $_POST['description'];

        if ($description == false) {
            $description = "Please enter a valid description";
        }
    }
}