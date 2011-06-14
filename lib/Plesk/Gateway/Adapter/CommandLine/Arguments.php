<?php
/*
 * Copyright 2011 Offshoot Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Wrapper class for a collection of command line arguments
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @author Chris Woodford <chris@offshootinc.com>
 *
 * @package Plesk
 * @subpackage Gateway
 */
class Plesk_Gateway_Adapter_CommandLine_Arguments
{

	/** @var array */
	protected $_arguments;

	/**
	 * intialize the argument string. optionally supplied an associative
	 * array of arguments
	 * @param array $arguments
	 */
	public function __construct(array $arguments = array())
	{

		$this->_arguments = $arguments;

	}

	/**
	 * get the arguments as a string
	 * @return string
	 */
	public function __toString()
	{

		return (string)$this->_reduce();

	}

	protected function _reduce()
	{

		$args = '';

		foreach ($this->_arguments as $key => $value) {

			if ($args) {
				$args .= ' ';
			}

			if (is_string($key)) {
				$args .= '-' . $key . ' ';

			}

			$args .= escapeshellarg($value);

		}

		return $args;

	}

}
