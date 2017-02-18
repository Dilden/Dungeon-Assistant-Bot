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
    protected $description = "Let's get this party started!! Wubba lubba dub dub!";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $this->replyWithMessage(['text' => 'Hello! Dungeon Assistant Bot is designed to assist you in playing role playing games like GURPS or D&D within a Telegram group. The current supported commands are /start, /help, and /dice. Use /help for more information.']);
    }
}