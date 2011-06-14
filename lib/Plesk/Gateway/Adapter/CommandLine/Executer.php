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

/** @var Plesk_Gateway_Adapter_CommandLine_Response */
require_once 'Plesk/Gateway/Adapter/CommandLine/Response.php';

/**
 * Wrapper class for calling system functions via PHP
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @author Chris Woodford <chris@offshootinc.com>
 *
 * @package Plesk
 * @subpackage Gateway
 */
class Plesk_Gateway_Adapter_CommandLine_Executer
{

	/** @var string */
	protected $_function;

	/** @var string */
	protected $_commandPath;

	/**
	 * intialize the executer
	 * @param string $function
	 * @param string $commandPath
	 */
	public function __construct($function = 'exec', $commandPath = '/usr/local/psa/bin')
	{

		$this->_function = $function;
		$this->_commandPath = $commandPath;

	}

	/**
	 * execute a method on a command line tool with the supplied arguments
	 * @param string $cmd
	 * @param string $method
	 * @param string $args
	 */
	public function execute($cmd = '', $method = '', $args = '')
	{

		$output = array();
		$return = null;

		$commandString = $this->getCommandPath($cmd);

		if ($method) {
			$commandString .= ' ' . $method;
		}

		if ($args) {
			$commandString .= ' ' . $args;
		}

		call_user_func_array($this->_function, array($commandString, &$output, &$return));
		return new Plesk_Gateway_Adapter_CommandLine_Response($return, implode("\n", $output));

	}

	/**
	 * get the path to commands. if a command is passed, return the path
	 * to the command including the command itself
	 * @param string|null $cmd
	 * @return string
	 */
	public function getCommandPath($cmd = null)
	{

		$path = rtrim($this->_commandPath, DIRECTORY_SEPARATOR);

		if ($path && $cmd) {
			$path .= DIRECTORY_SEPARATOR;
		}

		if ($cmd) {
			$path .= $cmd;
		}

		return $path;

	}

}