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

/** @var Plesk_Gateway_DatabaseGateway */
require_once 'Plesk/Gateway/DatabaseGateway.php';

/** @var Plesk_Gateway_Adapter_CommandLine */
require_once 'Plesk/Gateway/Adapter/CommandLine.php';

/** @var Plesk_Gateway_Parameters */
require_once 'Plesk/Gateway/Parameters.php';

/**
 * Adapter class to Plesk CLI database tool
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @author Chris Woodford <chris@offshootinc.com>
 *
 * @package Plesk
 * @subpackage Gateway
 */
class Plesk_Gateway_Adapter_CommandLine_Database
	extends Plesk_Gateway_Adapter_CommandLine
	implements Plesk_Gateway_DatabaseGateway
{

	/**
	 * (non-PHPdoc)
	 * @see Plesk_Gateway_DatabaseGateway::create()
	 */
	public function create($name, Plesk_Gateway_Parameters $params)
	{

		$ret = $this->_execute('database', 'create ' . $name, $params);

		if (!$ret->getReturnValue()) {
			return true;
		}

		return false;

	}

	/**
	 * (non-PHPdoc)
	 * @see Plesk_Gateway_DatabaseGateway::delete()
	 */
	public function delete($name)
	{

		$ret = $this->_execute('database', 'remove ' . $name);

		if (!$ret->getReturnValue()) {
			return true;
		}

		return false;

	}

}
