<?php

/**
 * This file is part of the Nette Framework (http://nette.org)
 *
 * Copyright (c) 2004, 2011 David Grudl (http://davidgrudl.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 * @package Nette\Application
 */



/**
 * Component with ability to receive signal.
 *
 * @author     David Grudl
 */
interface ISignalReceiver
{

	/**
	 * @param  string
	 * @return void
	 */
	function signalReceived($signal); // handleSignal

}
