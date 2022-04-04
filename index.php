<?php

require_once dirname(__DIR__).'Rest_Client/vendor/autoload.php';

use App\Class\Client;
use App\Class\User;
use App\Class\ToDo;

$client = new Client('http://127.0.0.1:8000');
echo ($client->download_file('17(1).txt'));


