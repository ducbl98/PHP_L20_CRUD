<?php

include_once "../vendor/autoload.php";

use App\Database\Database;
$categories = new Database();
$conn = $categories->connect();

$id=$_REQUEST['id'];
$sql='DELETE FROM `Categories` WHERE categoryId = :id;';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location:../views/categories/listCategory.php');
