#Description
This bot is designed to assist users in playing D&D or GURPS role playing games in a Telegram group.

#Installation
1. Clone this repository into your project folder [git clone](git@bitbucket.org:lunchboxgang/dungeonassistantbot.git)
2. run `composer install` to download dependencies

#Bot Authorization
Create a file called _BotAuth.php_

BotAuth.php could be structured like this:
```
<?php
	namespace App;

	class BotAuth {
		const auth_token = "INSERT_BOT_TOKEN_HERE";

		public function getAuth() {
			return self::auth_token;
		}
	}

?>
```