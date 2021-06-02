<?php


namespace App;


class Category
{
    public string $code;
    public string $name;


    public function __construct($data)
    {
        $this->code = $data['categoryId'];
        $this->name = $data['categoryName'];
    }
}