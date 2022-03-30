<?php

require_once dirname(__DIR__).'/client/vendor/autoload.php';

use Client\Client;

$user = new Client('http://127.0.0.1:8000');

echo ($user->createUser("Sophia", "1111"));


