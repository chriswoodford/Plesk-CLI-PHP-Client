<?php

class Plesk_Gateway_Adapter_CommandLine_CustomerTest extends PHPUnit_Framework_TestCase
{

	public function testCreatingACustomer()
	{

		$exec = new Plesk_Gateway_Adapter_CommandLine_Executer();
		$gateway = new Plesk_Gateway_Adapter_CommandLine_Customer($exec);

		$params = new Plesk_Gateway_Parameters(array(
			'name' => 'example.com',
			'passwd' => 'abc123',
			'country' => 'CA',
			'notify' => 'false',
			'email' => 'chris@offshootinc.com',
			'owner' => 'suws2',
		));

		$this->assertTrue($gateway->create('example.com', $params));

	}

}
