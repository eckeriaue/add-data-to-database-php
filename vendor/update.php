<?php
require_once "../config/connect.php";
$title = $_POST["title"];
$id = $_POST["id"];
$discription = $_POST["discription"];
$price = $_POST["price"];


mysqli_query(
  $connect,
  "UPDATE `products` SET 
  `tiltle` = '$title',
  `price` = '$price',
  `discription` = '$discription'
  WHERE `products`.`id` = $id"
  );

header('Location: ../products.php');