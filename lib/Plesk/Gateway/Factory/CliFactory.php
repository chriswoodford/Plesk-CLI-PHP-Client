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

/** @var Plesk_Gateway_Factory */
require_once 'Plesk/Gateway/Factory.php';

/** @var Plesk_Gateway_Adapter_CommandLine_Executer */
require_once 'Plesk/Gateway/Adapter/CommandLine/Executer.php';

/** @var Plesk_Gateway_Adapter_CommandLine_Customer */
require_once 'Plesk/Gateway/Adapter/CommandLine/Customer.php';

/** @var Plesk_Gateway_Adapter_CommandLine_Subscription */
require_once 'Plesk/Gateway/Adapter/CommandLine/Subscription.php';

/** @var Plesk_Gateway_Adapter_CommandLine_Database */
require_once 'Plesk/Gateway/Adapter/CommandLine/Database.php';

/**
 * Factory for creating gateways to the Plesk CLI
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @author Chris Woodford <chris@offshootinc.com>
 *
 * @package Plesk
 * @subpackage Gateway
 */
class Plesk_Gateway_Factory_CliFactory extends Plesk_Gateway_Factory
{

	/** @var Plesk_Gateway_Adapter_CommandLine_Executer */
	protected $_executer;

	/**
	 * intialize the CLI gateway with an instance of a command line executer
	 * @param Plesk_Gateway_Adapter_CommandLine_Executer $exec
	 */
	public function __construct(Plesk_Gateway_Adapter_CommandLine_Executer $exec)
	{

		$this->_executer = $exec;

	}

	/**
	 * (non-PHPdoc)
	 * @see Plesk_Gateway_Factory::createCustomerGateway()
	 */
	public function createCustomerGateway()
	{

		return new Plesk_Gateway_Adapter_CommandLine_Customer($this->_executer);

	}

	/**
	 * (non-PHPdoc)
	 * @see Plesk_Gateway_Factory::createSubscriptionGateway()
	 */
	public function createSubscriptionGateway()
	{

		return new Plesk_Gateway_Adapter_CommandLine_Subscription($this->_executer);

	}

	/**
	 * (non-PHPdoc)
	 * @see Plesk_Gateway_Factory::createDatabaseGateway()
	 */
	public function createDatabaseGateway()
	{

		return new Plesk_Gateway_Adapter_CommandLine_Database($this->_executer);

	}

}