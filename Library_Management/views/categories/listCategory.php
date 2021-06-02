<?php
include_once "../../vendor/autoload.php";
use App\Models\CategoryDB;

$categoryDB= new CategoryDB();
$categories=$categoryDB->getAllCategory();
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

    <title>Category List</title>
</head>
<body>
<div class="container">
    <a href="../../index.php"><button type="button" class="btn btn-outline-primary">Back</button></a><br>
    <a href="addCategory.php"><button type="button" class="btn btn-outline-primary">Add Category</button></a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Numeric Order</th>
            <th scope="col">Code</th>
            <th scope="col">Category Name</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $key =>$category): ?>
        <tr>
            <th scope="row"><?php echo $key + 1?></th>
            <td><?php echo $category->code?></td>
            <td><?php echo $category->name?></td>
            <td><a href="editCategory.php?id=<?php echo $category->code?>"><button type="button" class="btn btn-primary">Edit</button></a></td>
            <td><a onclick="return confirm('Do you want to delete')" href="../../actions/deleteCategory.php?id=<?php echo $category->code?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>


<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
</body>
</html>

