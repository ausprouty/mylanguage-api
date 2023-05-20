<?php

use Opis\Database\Connection;
use Opis\Database\Database;
class ApiConnect extends Connection implements Serializable
{
    public function __construct(){
        parent::__construct( 'mysql:host=localhost;dbname=' . DATABASE  ,
            USERNAME,
            PASSWORD);
    }

}

$connection= new ApiConnect();
$db = new Database($connection);
$id = 'afr00';

$result = $db->from('hl_language')
    ->where('hl_id')->is($id)
    ->select()
    ->first();
print_r ($result);
