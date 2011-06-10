<?php

class Plesk_Gateway_Factory_CliFactoryTest extends PHPUnit_Framework_TestCase
{

	public function testInstantiation()
	{

		$exec = new Plesk_Gateway_Adapter_CommandLine_Executer();
		$factory = new Plesk_Gateway_Factory_CliFactory($exec);

		$this->assertTrue($factory->createCustomerGateway()
			instanceof Plesk_Gateway_Adapter_CommandLine_Customer
		);

		$this->assertTrue($factory->createSubscriptionGateway()
			instanceof Plesk_Gateway_Adapter_CommandLine_Subscription
		);

		$this->assertTrue($factory->createDatabaseGateway()
			instanceof Plesk_Gateway_Adapter_CommandLine_Database
		);

	}

}
