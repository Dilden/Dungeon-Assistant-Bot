<?php

namespace derp\commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class DiceCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "dice";

    /**
     * @var string Command Description
     */
    protected $description = "Let's roll some numbers! \n\n This command utilizes the following format: `/dice <X # of dice to roll> <Y # of sides per dice - default is 6>`";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $this->replyWithMessage(['text' => 'Hello! Welcome to our bot, Here are our available commands:']);
    }
}