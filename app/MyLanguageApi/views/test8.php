<?php

use MyLanguageApi\Languages\Language as Language;

$language = new Language();
$result = $language->findByHL('afr00');
echo ($result);