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
        // $this->replyWithMessage(['text' => 'Hello! Welcome to our bot, Here are our available commands:']);

        $update = $this->getUpdate();
        $command = $update['message']['text'];

        $commandParameters = explode(" ", $arguments);

        $dice_count = 1;
        $dice_sides = 6;

        $dice_values = NULL;

        switch (count($commandParameters)) {
            case 0:
                # code...
                break;

            case 1:
                $dice_count = $commandParameters[0];
                break;

            case 2:
                $dice_count = $commandParameters[0];
                $dice_sides = $commandParameters[1];
                break;
            
            default:
                # code...
                break;
        }


        if(is_int($dice_sides) && is_int($dice_count)) {
            for ($i=0; $i < $dice_count; $i++) { 
                $dice_values .= rand(1, $dice_sides) . ' \n';
            }

            $this->replyWithMessage(['text' => 'You roled: \n\n '. $dice_values]);

            return;
        }
        else {

        }

    }
}