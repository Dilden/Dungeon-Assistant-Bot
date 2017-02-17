<?php

require_once '../vendor/autoload.php';

use Telegram\Bot\Api;
use Classes\BotAuth;
use Classes\commands\StartCommand;

// $auth = new BotAuth();
// $telegram = new Api($auth->getAuthToken());

// $telegram->addCommand(StartCommand::class);

// $updates = $telegram->getWebHookUpdates();

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

echo __FILE__ . "<br>";
echo $vendorDir . "<br>";
echo $baseDir . "<br>";

// $response = $telegram->getMe();

// $botId = $response->getId();
// $firstName = $response->getFirstName();
// $username = $response->getUsername();

// echo "ID: " .$botId . "<br>";
// echo "firstName: " .$firstName . "<br>";
// echo "username: " .$username . "<br>";

?>