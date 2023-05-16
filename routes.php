<?php

require_once __DIR__.'./router.php';
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'./.env.local.php';
##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/mylanguage-api', 'app/MyLanguageApi/views/index.php');
get('/mylanguage-api/test', 'app/MyLanguageApi/views/test.php');

// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','app/MyLanguageApi/views/404.php');
