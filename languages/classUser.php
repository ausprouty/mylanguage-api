<?php

require 'vendor/autoload.php'; // Assuming you have Opis ORM installed via Composer

use Opis\Database\Database;
use Opis\Database\Connection;
use Opis\Database\Schema\CreateTable;
use Opis\Database\SQL\Select;

class User
{
    protected $connection;

    public function __construct()
    {
        $this->connection = new Connection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'your_database',
            'username' => 'your_username',
            'password' => 'your_password',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => ''
        ]);

        Database::setConnection($this->connection);
    }

    public function findById($id)
    {
        return $this->connection->from('users')
            ->where('id', '=', $id)
            ->first();
    }

    public function findByName($name)
    {
        return $this->connection->from('users')
            ->where('name', '=', $name)
            ->first();
    }
}

// Usage example

$user = new User();
$userById = $user->findById(1); // Find user by ID
$userByName = $user->findByName('John'); // Find user by name

// Output user data
echo "User by ID:\n";
print_r($userById);

echo "User by Name:\n";
print_r($userByName);
