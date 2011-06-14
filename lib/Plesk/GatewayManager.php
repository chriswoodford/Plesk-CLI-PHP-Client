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

/** @see Plesk_Gateway_Factory */
require_once 'Plesk/Gateway/Factory.php';

/**
 * Access point for individual gateways to Plesk tools
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @author Chris Woodford <chris@offshootinc.com>
 *
 * @package Plesk
 */
class Plesk_GatewayManager
{

	/** @var Plesk_Gateway_Factory */
	protected $_factory;

	/**
	 * initialize the gateway manager with an abstract factory
	 * @param Plesk_Gateway_Factory $factory
	 */
	public function __construct(Plesk_Gateway_Factory $factory)
	{

		$this->_factory = $factory;

	}

	/**
	 * get an instance of a customer gateway
	 * @return Plesk_Gateway_CustomerGateway
	 */
	public function getCustomerGateway()
	{

		return $this->_factory->createCustomerGateway();

	}

	/**
	 * get an instance of a subscription gateway
	 * @return Plesk_Gateway_SubscriptionGateway
	 */
	public function getSubscriptionGateway()
	{

		return $this->_factory->createSubscriptionGateway();

	}

	/**
	 * get an instance of a database gateway
	 * @return Plesk_Gateway_DatabaseGateway
	 */
	public function getDatabaseGateway()
	{

		return $this->_factory->createDatabaseGateway();

	}

}
