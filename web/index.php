<?php
namespace web;

$loader = require_once '../vendor/autoload.php';
$loader->addPsr4('App', '../classes/');

use Telegram\Bot\Api;
use App\BotAuth;
use App\commands\StartCommand;


$auth = new BotAuth();
$telegram = new Api($auth->getAuthToken());


$telegram->addCommand(StartCommand::class);

$updates = $telegram->getWebHookUpdates();

echo "test";

// $response = $telegram->getMe();

// $botId = $response->getId();
// $firstName = $response->getFirstName();
// $username = $response->getUsername();

// echo "ID: " .$botId . "<br>";
// echo "firstName: " .$firstName . "<br>";
// echo "username: " .$username . "<br>";

?>