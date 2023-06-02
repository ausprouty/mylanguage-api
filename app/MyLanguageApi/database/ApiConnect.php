<?php namespace App\MyLanguageApi\Database;

use Opis\Database\Connection;

class ApiConnect extends Connection implements Serializable
{
    public function __construct(){
        parent::__construct( 'mysql:host=localhost;dbname=' . DATABASE  ,
            USERNAME,
            PASSWORD);
    }
    /**
     * Implementation of Serializable::serialize
     *
     * @return  string
     */
    public function serialize()
    {
       parent::serialize();
    }
    /**
     * Implementation of Serializable::unserialize
     *
     * @param   string $data Serialized data
     */
    public function unserialize($data)
    {
         parent::unserialize($data);
    }

}