<?php

use App\Database\Database;

include_once "../../vendor/autoload.php";
$database = new Database();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = 'INSERT INTO `Categories`(`categoryId`, `categoryName`) VALUES (?,?)';
    $stmt = $database->connect()->prepare($sql);

    $stmt->bindParam(1, $_REQUEST['code']);
    $stmt->bindParam(2, $_REQUEST['name']);

    $stmt->execute();

    header('Location: listCategory.php');


}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Add Category</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category Code</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="code" placeholder="code">
            </div>
        </tr>
        <tr>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name">
            </div>
        </tr>
        <tr>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Category</button>
            </div>
        </tr>
    </table>
</form>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
</body>
</html>
