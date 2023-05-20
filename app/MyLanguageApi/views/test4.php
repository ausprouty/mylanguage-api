<?php

use Opis\Database\Database;


$db = new Database($connection);
$id = 'afr00';

$result = $db->from('hl_language')
    ->where('hl_id')->is($id)
    ->select()
    ->first();
print_r ($result);