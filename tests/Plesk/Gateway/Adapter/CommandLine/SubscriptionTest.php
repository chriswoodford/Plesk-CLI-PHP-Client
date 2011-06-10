<?php

class Plesk_Gateway_Adapter_CommandLine_SubscriptionTest extends PHPUnit_Framework_TestCase
{

	public function testCreatingASubscription()
	{

		$exec = new Plesk_Gateway_Adapter_CommandLine_Executer();
		$gateway = new Plesk_Gateway_Adapter_CommandLine_Subscription($exec);

		$params = new Plesk_Gateway_Parameters(array(
			'onwer' => 'example.com',
			'service-plan' => 'Used by CFS gateway - Do Not Delete',
			'hst_type' => 'phys',
			'hosting' => 'true',
			'ip' => '67.205.74.171',
			'login' => 'examples',
			'passwd' => 'abc123',
		));

		$this->assertTrue($gateway->create('example.com', $params));

	}

}
