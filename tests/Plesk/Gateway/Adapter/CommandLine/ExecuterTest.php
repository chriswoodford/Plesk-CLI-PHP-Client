<?php

class Plesk_Gateway_Adapter_CommandLine_ExecuterTest extends PHPUnit_Framework_TestCase
{

	public function testCommandPath()
	{

		$pathToPlesk = '/usr/local/psa/bin';
		$exec = new Plesk_Gateway_Adapter_CommandLine_Executer('exec', $pathToPlesk);

		$this->assertEquals($pathToPlesk, $exec->getCommandPath());
		$this->assertEquals($pathToPlesk . DIRECTORY_SEPARATOR . 'customer', $exec->getCommandPath('customer'));

	}

	public function testExecution()
	{

		$exec = new Plesk_Gateway_Adapter_CommandLine_Executer('exec', '');

		$this->assertEquals('', $exec->getCommandPath());
		$this->assertEquals('ls', $exec->getCommandPath('ls'));

		$ret = $exec->execute('ls', '-l');

		$this->assertNotNull($ret->getOutput());
		$this->assertEquals(0, $ret->getReturnValue());

	}

}
