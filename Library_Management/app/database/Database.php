<?php


namespace App\Database;


class Database
{
    protected string $dsn;
    protected string $username;
    protected string $password;


    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=library_management';
        $this->username = 'root';
        $this->password = 'Leduc1998*';
    }

    public function connect(): \PDO
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $PDOException) {
            echo $PDOException->getMessage();
            die();
        }
    }
}