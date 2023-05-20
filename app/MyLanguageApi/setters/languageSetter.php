$result = $db->insert(array(
    'name' => 'John Doe',
    'email' => 'john.doe@example.com'
))
->into('languages');