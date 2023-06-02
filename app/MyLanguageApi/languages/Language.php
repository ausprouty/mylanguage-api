<?php namespace App\MyLanguageApi\Languages;

use Opis\ORM\{
    Entity,
    IEntityMapper,
    IMappableEntity
};

use Opis\Database\Connection;
use Opis\Database\Database;


class Language extends Entity implements IMabbableEntity
{

    protected $connection;

    public function __contruct(){
    $this->connection = new Connection ( 'mysql:host=localhost;dbname=' . DATABASE  ,
            USERNAME, PASSWORD);
        Database::setConnection($this->connection);

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