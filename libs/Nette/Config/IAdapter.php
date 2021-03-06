<?php

/**
 * This file is part of the Nette Framework (http://nette.org)
 *
 * Copyright (c) 2004, 2011 David Grudl (http://davidgrudl.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 * @package Nette\Config
 */



/**
 * Adapter for reading and writing configuration files.
 *
 * @author     David Grudl
 */
interface IConfigAdapter
{

	/**
	 * Reads configuration from file.
	 * @param  string  file name
	 * @return array
	 */
	static function load($file);

	/**
	 * Writes configuration to file.
	 * @param  NConfig to save
	 * @param  string  file
	 * @return void
	 */
	static function save($config, $file);

}
