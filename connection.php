<?php

$host='localhost';
$user='root';
$password='';
$db='products';

$connect = new mysqli($host, $user, $password, $db) or die($mysqli->error());