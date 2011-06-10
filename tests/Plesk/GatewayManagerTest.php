<?php

class Plesk_GatewayManagerTest extends PHPUnit_Framework_TestCase
{

	public function testInstantiation()
	{

		$exec = new Plesk_Gateway_Adapter_CommandLine_Executer();
		$factory = Plesk_Gateway_Factory::getCliFactory($exec);

		$gateway = new Plesk_GatewayManager($factory);

		$this->assertTrue($gateway->getCustomerGateway()
			instanceof Plesk_Gateway_CustomerGateway,
			'Customer gateway not returned'
		);

		$this->assertTrue($gateway->getSubscriptionGateway()
			instanceof Plesk_Gateway_SubscriptionGateway,
			'Subscription gateway not returned'
		);

		$this->assertTrue($gateway->getDatabaseGateway()
			instanceof Plesk_Gateway_DatabaseGateway,
			'Database gateway not returned'
		);

	}

}
