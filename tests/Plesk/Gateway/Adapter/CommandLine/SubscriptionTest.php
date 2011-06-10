<?php

class Plesk_Gateway_Adapter_CommandLine_SubscriptionTest extends PHPUnit_Framework_TestCase
{

	public function testCreatingASubscription()
	{

		$exec = new Plesk_Gateway_Adapter_CommandLine_Executer();
		$gateway = new Plesk_Gateway_Adapter_CommandLine_Subscription($exec);

		$params = new Plesk_Gateway_Parameters(array(
			'onwer' => 'thecrazyeights.net',
			'service-plan' => 'Used by CFS gateway - Do Not Delete',
			'hst_type' => 'phys',
			'hosting' => 'true',
			'ip' => '67.205.74.171',
			'login' => 'thecrazyeights2',
			'passwd' => 'abc123',
		));

		$this->assertTrue($gateway->create('thecrazyeights.net', $params));

	}

}

