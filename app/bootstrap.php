<?php

/**
 * My Application bootstrap file.
 */



// Load Nette Framework
// this allows load Nette Framework classes automatically so that
// you don't have to litter your code with 'require' statements
require LIBS_DIR . '/Nette/loader.php';

// Enable NDebug for error visualisation & logging
NDebug::$strictMode = TRUE;
NDebug::enable();

// register loader
$loader = new NRobotLoader();
$loader->addDirectory(LIBS_DIR);
$loader->setCacheStorage(new NFileStorage(TEMP_DIR . '/cache'));
$loader->register();

// Load configuration from config.neon file
NEnvironment::loadConfig();


// Configure application
$application = NEnvironment::getApplication();
$application->errorPresenter = 'Error';
//$application->catchExceptions = TRUE;


// Setup router
{
	$router = $application->getRouter();

	$router[] = TedModule::createRouter();
	$router[] = GeneralModule::createRouter();
};

// Run the application!
$application->run();
