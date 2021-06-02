<?php

use App\Database\Database;

include_once "../vendor/autoload.php";
$categories = new Database();
$conn = $categories->connect();
$id=$_REQUEST['id'];
$code=$_REQUEST['code'];
$name=$_REQUEST['name'];
$sql='UPDATE `Categories` 
      SET `categoryId` = :code,
          `categoryName` = :name
      WHERE `categoryId` = :id;';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':code', $code);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location:../views/categories/listCategory.php');