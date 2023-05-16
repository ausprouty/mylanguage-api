<?php

use Opis\Database\Database;
use Opis\Database\Connection;

namespace

class Language
{
    protected $connection;

    public function __construct()
    {

        $databaseConnection = new DatabaseConnection();
        $this->connection = $databaseConnection->getConnection();
    }

    public function findByHL($id)
    {
        return $this->connection->from('hl_language')
            ->where('hl_id', '=', $id)
            ->first();
    }

    public function findByIso($iso)
    {
        return $this->connection->from('hl_language')
            ->where('language_iso', '=', $iso)
            ->all();
    }
}