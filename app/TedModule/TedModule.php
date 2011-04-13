<?php
class TedModule
{

	public static function createRouter($prefix = "ted/") {
		$router = new NMultiRouter();

		$router[] = new NRoute($prefix . "<presenter>/<action>", array(
			"module"		=> "ted",
			"presenter"		=> "Default",
			"action"		=> "default"
		));

		return $router;
	}

}
