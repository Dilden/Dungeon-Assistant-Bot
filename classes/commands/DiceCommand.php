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
    protected $description = "Let's roll some numbers! Usage: /dice <X # of dice to roll - default is 1> <Y # of sides per dice - default is 6>";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);

        $dice_count = 1;
        $dice_sides = 6;
        $dice_values = NULL;

        $commandParameters = explode(" ", $arguments);
        switch (count($commandParameters)) {
            case 1:
                if(!empty($commandParameters[0])) {
                    $dice_count = $commandParameters[0];
                }
                break;

            case 2:
                $dice_count = $commandParameters[0];
                $dice_sides = $commandParameters[1];
                break;
        }


        if(is_int($dice_sides) && is_int($dice_count) && (count($commandParameters) < 3)) {
            for ($i=0; $i < $dice_count; $i++) { 
                $dice_values .= rand(1, $dice_sides) . ' '. PHP_EOL;
            }

            $this->replyWithMessage(['text' => 'You rolled: '. PHP_EOL . $dice_values]);

            return;
        }
        else {
            $this->replyWithMessage(['text' => 'I don\'t understand. ' .PHP_EOL]);

            return;
        }

    }
}