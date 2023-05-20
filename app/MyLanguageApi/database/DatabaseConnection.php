<?php namespace App\MyLanguageApi\Database;

use Opis\Database\Database;
use Opis\Database\Connection;
use Opis\Database\Schema\CreateTable;
use Opis\Database\SQL\Select;

class DatabaseConnection
{
    protected $connection;

    public function __construct()
    {
        $this->connection = new Connection(
            'mysql:host=localhost;dbname=' . DATABASE  ,
            USERNAME,
            PASSWORD
        );
        //print_r ($this->connection);
        DatabaseConnection::setConnection($this->connection);
    }

    public function getConnection()
    {
        return $this->connection;
    }
}