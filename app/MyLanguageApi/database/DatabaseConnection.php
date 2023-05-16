<?php namespace MyLanguageApi\Database;

use Opis\Database\Database;
use Opis\Database\Connection;
use Opis\Database\Schema\CreateTable;
use Opis\Database\SQL\Select;

class DatabaseConnection
{
    protected $connection;

    public function __construct()
    {
        echo (DATABASE);
        echo (USERNAME);
        $this->connection = new Connection([
            'driver' => 'mysql',
            'host' => DBHOST,
            'database' => DATABASE,
            'username' => USERNAME,
            'password' => PASSWORD,
            'charset' => CHARSET,
            'collation' => COLLATION,
            'prefix' =>PREFIX
        ]);

        Database::setConnection($this->connection);
    }

    public function getConnection()
    {
        return $this->connection;
    }
}