<?php


namespace App\Models;


use App\Category;
use App\Database\Database;

class CategoryDB
{
    public $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getAllCategory(): array
    {
        $sql='SELECT * FROM Categories';
        $stmt=$this->conn->query($sql);
        $result=$stmt->fetchAll();

        $categories=[];
        foreach ($result as $data){
            $category = new Category($data);
            array_push($categories,$category);
        }
        return $categories;
    }
    public function getElementById($id): Category
    {
        $sql = 'SELECT * FROM `Categories` WHERE categoryId = :id;';
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $result=$stmt->fetchAll();

        return new Category($result[0]);
    }
}