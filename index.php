<?php

namespace App;

include './vendor/autoload.php';
require_once 'BotAuth.php';

use DanySpin97\PhpBotFramework\Bot;

$auth = new BotAuth();
$bot = new Bot($auth->getAuth());

echo "test";

?>