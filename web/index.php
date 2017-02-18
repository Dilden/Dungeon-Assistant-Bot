<?php

require_once '../vendor/autoload.php';

use Telegram\Bot\Api;
use Telegram\Bot\Commands\HelpCommand;
use derp\BotAuth;
use derp\commands\StartCommand;
use derp\commands\DiceCommand;

$auth = new BotAuth();
$telegram = new Api($auth->getAuthToken());

$telegram->addCommand(StartCommand::class);
$telegram->addCommand(HelpCommand::class);
$telegram->addCommand(DiceCommand::class);

$update = $telegram->commandsHandler(true);


?>