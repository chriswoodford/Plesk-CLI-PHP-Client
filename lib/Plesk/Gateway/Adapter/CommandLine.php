<?php

/** @var Plesk_Gateway_Adapter_CommandLine_Executer */
require_once 'Plesk/Gateway/Adapter/CommandLine/Executer.php';

/** @var Plesk_Gateway_Parameters */
require_once 'Plesk/Gateway/Parameters.php';

/** @var Plesk_Gateway_Adapter_CommandLine_Arguments */
require_once 'Plesk/Gateway/Adapter/CommandLine/Arguments.php';

abstract class Plesk_Gateway_Adapter_CommandLine
{

	/** @var Plesk_Gateway_Adapter_CommandLine_Executer */
	protected $_executer;

	/**
	 * initialize the command line tool with an execution wrapper
	 * @param Plesk_Gateway_Adapter_CommandLine_Executer $exec
	 */
	public function __construct(Plesk_Gateway_Adapter_CommandLine_Executer $exec)
	{

		$this->_executer = $exec;

	}

	/**
	 * execute a method on a command with the supplied parameters
	 * @param string $cmd
	 * @param string $method
	 * @param Plesk_Gateway_Parameters $params
	 */
	protected function _execute($cmd, $method, Plesk_Gateway_Parameters $params)
	{

		$method = '--' . ltrim($method, '-');

		$args = new Plesk_Gateway_Adapter_CommandLine_Arguments((array)$params);
		return $this->_executer->execute($cmd, $method, (string)$args);

	}

}