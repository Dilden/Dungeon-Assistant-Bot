<?php

namespace derp\commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class StartCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "start";

    /**
     * @var string Command Description
     */
    protected $description = "Let's get this party started!!";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $this->replyWithMessage(['text' => 'Hello! Welcome to our bot, Here are our available commands:']);
    }
}