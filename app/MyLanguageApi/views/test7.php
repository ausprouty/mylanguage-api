<?php

use Opis\Database\Connection;
use Opis\Database\Database;

$connection= new Connection ( 'mysql:host=localhost;dbname=' . DATABASE  ,
        USERNAME, PASSWORD);
$db = new Database($connection);
$id = 'afr00';

$result = $db->from('hl_language')
    ->where('hl_id')->is($id)
    ->select()
    ->first();
print_r ($result);
