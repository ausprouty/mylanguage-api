<?php namespace App\MyLanguageApi\Database;

use Opis\Database\Connection;

class ApiConnect extends Connection implements Serializable
{
    public function __construct(){
        parent::__construct( 'mysql:host=localhost;dbname=' . DATABASE  ,
            USERNAME,
            PASSWORD);
    }

}