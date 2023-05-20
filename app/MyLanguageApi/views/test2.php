<?php

use Opis\Database\Database;
use Opis\Database\Connection;

echo(DATABASE . "<br>");
echo(USERNAME. "<br>");
echo(PASSWORD. "<br>");

 $connection = new Connection(
            'mysql:host=localhost;dbname=' . DATABASE  ,
            USERNAME,
            PASSWORD
        );

$db = new Database($connection);
$id = 'afr00';

$result = $db->from('hl_language')
    ->where('hl_id')->is($id)
    ->select()
    ->first();
print_r ($result);