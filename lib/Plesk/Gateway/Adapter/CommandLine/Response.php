<?php

/** @var Plesk_Gateway_Response */
require_once 'Plesk/Gateway/Response.php';

class Plesk_Gateway_Adapter_CommandLine_Response
	implements Plesk_Gateway_Response
{

	protected $_returnValue;

	protected $_output;

	public function __construct($returnValue, $output)
	{

		$this->_returnValue = $returnValue;
		$this->_output = $output;

	}

	public function getReturnValue()
	{

		return $this->_returnValue;

	}

	public function getOutput()
	{

		return $this->_output;

	}

}