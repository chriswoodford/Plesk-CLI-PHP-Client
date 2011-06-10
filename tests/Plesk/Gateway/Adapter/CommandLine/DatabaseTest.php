<?php

class Plesk_Gateway_Adapter_CommandLine_DatabaseTest extends PHPUnit_Framework_TestCase
{

	public function testCreatingADatabase()
	{

		$exec = new Plesk_Gateway_Adapter_CommandLine_Executer();
		$gateway = new Plesk_Gateway_Adapter_CommandLine_Database($exec);

		$params = new Plesk_Gateway_Parameters(array(
			'domain' => 'example.com',
			'type' => 'mysql',
			'add_user' => 'example_user',
			'passwd' => 'abc123',
		));

		$this->assertTrue($gateway->create('example_admin', $params));

	}

}

