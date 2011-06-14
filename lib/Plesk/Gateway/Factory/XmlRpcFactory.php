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

/**
 * Factory for creating gateways to the Plesk XML-RPC API
 *
 * @todo this is just here as an example for the time being
 * future development could warrant implementing this class
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @author Chris Woodford <chris@offshootinc.com>
 *
 * @package Plesk
 * @subpackage Gateway
 */
class Plesk_Gateway_Factory_XmlRpcFactory extends Plesk_Gateway_Factory
{

	/**
	 * (non-PHPdoc)
	 * @see Plesk_Gateway_Factory::createCustomerGateway()
	 */
	public function createCustomerGateway()
	{

	}

	/**
	 * (non-PHPdoc)
	 * @see Plesk_Gateway_Factory::createSubscriptionGateway()
	 */
	public function createSubscriptionGateway()
	{

	}

	/**
	 * (non-PHPdoc)
	 * @see Plesk_Gateway_Factory::createDatabaseGateway()
	 */
	public function createDatabaseGateway()
	{

	}


}