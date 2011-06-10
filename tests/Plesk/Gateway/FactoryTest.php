<?php

class Plesk_Gateway_FactoryTest extends PHPUnit_Framework_TestCase
{

	public function testCliFactory()
	{

		$exec = new Plesk_Gateway_Adapter_CommandLine_Executer();
		$factory = Plesk_Gateway_Factory::getCliFactory($exec);

		$this->assertTrue($factory instanceof Plesk_Gateway_Factory_CliFactory);

	}

}
