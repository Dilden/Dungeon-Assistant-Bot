<?php
namespace derp;

class BotAuth {
	const auth_token = "XXXXXXXXXXXXXXXXXXXXXX";

	public function getAuthToken() {
		return self::auth_token;
	}

	public function setWebhook() {
		$curl = curl_init("https://api.telegram.org:443/bot".self::auth_token."/setwebhook?url=https://wild-mole-8374.vagrantshare.com/");
		$result = curl_exec($curl);
		curl_close($curl);
		
		return $result;
	}
}


// https://api.telegram.org:443/bot272639783:AAGBvtV8s2YW-PQgNGrY2AlSabWGVxweHoM/setwebhook?url=https://salty-shelf-12588.herokuapp.com/index.php


?>