<?php

use App\Database\Database;
use App\Models\CategoryDB;

include_once '../../vendor/autoload.php';

$categories = new Database();
$conn=$categories->connect();

$id=$_REQUEST['id'];
$category= new CategoryDB();
$catObj=$category->getElementById($id);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<form action="../../actions/editCategory.php" method="post">
    <table>
        <tr>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category Code</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="code" value="<?php echo $catObj->code?>">
            </div>
        </tr>
        <tr>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?php echo $catObj->name?>">
            </div>
        </tr>
        <tr>
            <div class="col-12">
                <input type="hidden" name="id" value="<?php echo $catObj->code?>">
                <button type="submit" class="btn btn-primary">Edit Category</button>
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
