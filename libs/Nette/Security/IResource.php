<?php

/**
 * This file is part of the Nette Framework (http://nette.org)
 *
 * Copyright (c) 2004, 2011 David Grudl (http://davidgrudl.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 * @package Nette\Security
 */



/**
 * Represents resource, an object to which access is controlled.
 *
 * @author     David Grudl
 */
interface IResource
{

	/**
	 * Returns a string identifier of the Resource.
	 * @return string
	 */
	public function getResourceId();

}
