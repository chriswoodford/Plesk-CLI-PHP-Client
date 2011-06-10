<?php

class Plesk_Gateway_Adapter_CommandLine_ArgumentsTest extends PHPUnit_Framework_TestCase
{

	public function testInstantiation()
	{

		$args = new Plesk_Gateway_Adapter_CommandLine_Arguments(array(
			'*.*'
		));

		$this->assertEquals("'*.*'", (string)$args);

	}

}
