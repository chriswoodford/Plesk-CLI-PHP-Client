<?php

/** @see Plesk_Gateway_AbstractFactory */
require_once 'Plesk/Gateway/AbstractFactory.php';

class Plesk_GatewayManager
{

	/** @var Plesk_Gateway_AbstractFactory */
	protected $_factory;

	/**
	 * initialize the gateway manager with an abstract factory
	 * @param Plesk_Gateway_AbstractFactory $factory
	 */
	public function __construct(Plesk_Gateway_AbstractFactory $factory)
	{

		$this->_factory = $factory;

	}

	/**
	 * get an instance of a customer gateway
	 * @return Plesk_Gateway_CustomerGateway
	 */
	public function getCustomerGateway()
	{

		return $this->_factory->createCustomerAdapter();

	}

	/**
	 * get an instance of a subscription gateway
	 * @return Plesk_Gateway_SubscriptionGateway
	 */
	public function getSubscriptionGateway()
	{

		return $this->_factory->createSubscriptionAdapter();

	}

	/**
	 * get an instance of a database gateway
	 * @return Plesk_Gateway_DatabaseGateway
	 */
	public function getDatabaseGateway()
	{

		return $this->_factory->createSubscriptionAdapter();

	}

}
