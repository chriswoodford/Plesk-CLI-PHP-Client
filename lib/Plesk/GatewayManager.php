<?php

/** @see Plesk_Gateway_Factory */
require_once 'Plesk/Gateway/Factory.php';

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
