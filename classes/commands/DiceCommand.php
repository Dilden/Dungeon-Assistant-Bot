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
    protected $description = "Let's roll some numbers! Usage: /dice <X # of dice to roll> <Y # of sides per dice - default is 6>";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);

        $commandParameters = explode(" ", $arguments);

        $dice_count = 1;
        $dice_sides = 6;

        $dice_values = NULL;

        switch (count($commandParameters)) {
            case 1:
                $dice_count = (int) $commandParameters[0];
                break;

            case 2:
                $dice_count = (int) $commandParameters[0];
                $dice_sides = (int) $commandParameters[1];
                break;
            
            default:
                # code...
                break;
        }


        if(is_int($dice_sides) && is_int($dice_count)) {
            for ($i=0; $i < $dice_count; $i++) { 
                $dice_values .= rand(1, $dice_sides) . ' \n';
            }

            $this->replyWithMessage(['text' => 'You roled: '. PHP_EOL . $dice_values]);

            return;
        }
        else {
            $this->replyWithMessage(['text' => 'I don\'t understand. ' .PHP_EOL]);

            return;
        }

    }
}