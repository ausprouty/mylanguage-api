<?php

require_once __DIR__.'./router.php';
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'./.env.local.php';
##################################################
// see https://opis.io/orm/1.x/quick-start.html

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/mylanguage-api', 'app/MyLanguageApi/views/index.php');
get('/mylanguage-api/test', 'app/MyLanguageApi/views/test.php');
get('/mylanguage-api/test2', 'app/MyLanguageApi/views/test2.php');
get('/mylanguage-api/test3', 'app/MyLanguageApi/views/test3.php');
get('/mylanguage-api/test4', 'app/MyLanguageApi/views/test4.php');
get('/mylanguage-api/test5', 'app/MyLanguageApi/views/test5.php');
get('/mylanguage-api/test6', 'app/MyLanguageApi/views/test6.php');
get('/mylanguage-api/test7', 'app/MyLanguageApi/views/test7.php');

// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','app/MyLanguageApi/views/404.php');
