<?php

/** @var Plesk_Gateway_Adapter_CommandLine_Response */
require_once 'Plesk/Gateway/Adapter/CommandLine/Response.php';

class Plesk_Gateway_Adapter_CommandLine_Executer
{

	/** @var string */
	protected $_function;

	/** @var string */
	protected $_commandPath;

	/**
	 * intialize the executer
	 * @param string $function
	 * @param string $commandPath
	 */
	public function __construct($function = 'exec', $commandPath = '/usr/local/psa/bin')
	{

		$this->_function = $function;
		$this->_commandPath = $commandPath;

	}

	/**
	 * execute a method on a command line tool with the supplied arguments
	 * @param string $cmd
	 * @param string $method
	 * @param string $args
	 */
	public function execute($cmd, $method, $args)
	{

		$output = array();
		$return = null;

		$commandString = $this->getCommandPath($cmd) . ' ' . $method . ' ' . $args;

		call_user_func_array($this->_function, array($commandString, $ouput, $return));

		return new Plesk_Gateway_Adapter_CommandLine_Response($return, implode("\n", $output));

	}

	/**
	 * get the path to commands. if a command is passed, return the path
	 * to the command including the command itself
	 * @param string|null $cmd
	 * @return string
	 */
	public function getCommandPath($cmd = null)
	{

		$path = rtrim($this->_commandPath, '/');

		if ($cmd) {
			$path .= '/' . $cmd;
		}

		return $path;

	}

}