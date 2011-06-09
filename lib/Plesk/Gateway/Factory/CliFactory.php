<?php

/** @var Plesk_Gateway_Factory */
require_once 'Plesk/Gateway/Factory.php';

class Plesk_Gateway_Factory_CliFactory extends Plesk_Gateway_Factory
{

	/** @var Plesk_Gateway_Adapter_CommandLine_Executer */
	protected $_executer;

	public function __construct(Plesk_Gateway_Adapter_CommandLine_Executer $exec)
	{

		$this->_executer = $exec;

	}

	public function createCustomerGateway()
	{

		return new Plesk_Gateway_Adapter_CommandLine_Customer($this->_executer);

	}

	public function createSubscriptionGateway()
	{

		return new Plesk_Gateway_Adapter_CommandLine_Subscription($this->_executer);

	}

	public function createDatabaseGateway()
	{

		return new Plesk_Gateway_Adapter_CommandLine_Database($this->_executer);

	}

}