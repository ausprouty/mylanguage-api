<?php

namespace MyLanguage\Database;
use Opis\Database\Connection;

class StandardConnection
{

    public function __construct(){
        return new Connection ( 'mysql:host=localhost;dbname=' . DATABASE  ,
            USERNAME,
            PASSWORD);
    }
}