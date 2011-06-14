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

/** @var Plesk_Gateway_Adapter_CommandLine_Executer */
require_once 'Plesk/Gateway/Adapter/CommandLine/Executer.php';

/** @var Plesk_Gateway_Parameters */
require_once 'Plesk/Gateway/Parameters.php';

/** @var Plesk_Gateway_Adapter_CommandLine_Arguments */
require_once 'Plesk/Gateway/Adapter/CommandLine/Arguments.php';

/**
 * Contains common functionality for CLI Gateways
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @author Chris Woodford <chris@offshootinc.com>
 *
 * @package Plesk
 * @subpackage Gateway
 */
abstract class Plesk_Gateway_Adapter_CommandLine
{

	/** @var Plesk_Gateway_Adapter_CommandLine_Executer */
	protected $_executer;

	/**
	 * initialize the command line tool with an execution wrapper
	 * @param Plesk_Gateway_Adapter_CommandLine_Executer $exec
	 */
	public function __construct(Plesk_Gateway_Adapter_CommandLine_Executer $exec)
	{

		$this->_executer = $exec;

	}

	/**
	 * execute a method on a command with the supplied parameters
	 * @param string $cmd
	 * @param string $method
	 * @param Plesk_Gateway_Parameters $params
	 */
	protected function _execute($cmd, $method, Plesk_Gateway_Parameters $params = null)
	{

		$method = '--' . ltrim($method, '-');

		if ($params) {
			$args = new Plesk_Gateway_Adapter_CommandLine_Arguments((array)$params);
		} else {
			$args = '';
		}

		return $this->_executer->execute($cmd, $method, (string)$args);

	}

}