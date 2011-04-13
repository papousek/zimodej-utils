<?php
class GeneralModule
{

	public static function createRouter($prefix = "/") {
		$router = new NMultiRouter();

		$router[] = new NRoute($prefix . "<presenter>/<action>", array(
			"module"		=> "general",
			"presenter"		=> "Default",
			"action"		=> "default"
		));

		return $router;
	}

}
