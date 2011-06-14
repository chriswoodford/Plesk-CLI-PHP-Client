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

/** @var Plesk_Gateway_Factory_CliFactory */
require_once 'Plesk/Gateway/Factory/CliFactory.php';

/**
 * Abstract factory [GoF] to create Plesk Gateways
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @author Chris Woodford <chris@offshootinc.com>
 *
 * @package Plesk
 * @subpackage Gateway
 */
abstract class Plesk_Gateway_Factory
{

	/**
	 * get an instance of a customer gateway
	 * @return Plesk_Gateway_CustomerGateway
	 */
	abstract public function createCustomerGateway();

	/**
	 * get an instance of a subscription gateway
	 * @return Plesk_Gateway_SubscriptionGateway
	 */
	abstract public function createSubscriptionGateway();

	/**
	 * get an instance of a database gateway
	 * @return Plesk_Gateway_DatabaseGateway
	 */
	abstract public function createDatabaseGateway();

	/**
	 * get an instance of a factory for the CLI
	 * @return Plesk_Gateway_Factory_CliFactory
	 */
	public static function getCliFactory(Plesk_Gateway_Adapter_CommandLine_Executer $exec)
	{

		return new Plesk_Gateway_Factory_CliFactory($exec);

	}

	/**
	 * get an instance of a factory for the XML-RPC API
	 * @return Plesk_Gateway_Factory_XmlRpcFactory
	 */
	public static function getXmlRpcFactory()
	{

		// TODO: implement for XML-RPC API

	}

}