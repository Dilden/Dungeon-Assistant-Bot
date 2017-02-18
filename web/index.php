<?php

require_once '../vendor/autoload.php';

use Telegram\Bot\Api;
use Telegram\Bot\Commands\HelpCommand;
use derp\BotAuth;
use derp\commands\StartCommand;

$auth = new BotAuth();
$telegram = new Api($auth->getAuthToken());

$telegram->addCommand([HelpCommand::class, StartCommand::class]);

$update = $telegram->commandsHandler(true);

$updates = $telegram->getWebHookUpdates();


// echo "test";

// $response = $telegram->getMe();

// $botId = $response->getId();
// $firstName = $response->getFirstName();
// $username = $response->getUsername();

// echo "ID: " .$botId . "<br>";
// echo "firstName: " .$firstName . "<br>";
// echo "username: " .$username . "<br>";

?>