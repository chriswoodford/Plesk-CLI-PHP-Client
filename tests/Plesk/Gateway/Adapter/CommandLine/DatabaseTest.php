<?php

class Plesk_Gateway_Adapter_CommandLine_DatabaseTest extends PHPUnit_Framework_TestCase
{

	public function testCreatingADatabase()
	{

		$exec = new Plesk_Gateway_Adapter_CommandLine_Executer();
		$gateway = new Plesk_Gateway_Adapter_CommandLine_Database($exec);

		$params = new Plesk_Gateway_Parameters(array(
			'domain' => 'thecrazyeights.net',
			'type' => 'mysql',
			'add_user' => 'thecrazyeights',
			'passwd' => 'abc123',
		));

		$this->assertTrue($gateway->create('thecrazyeights_admin', $params));

	}

}

