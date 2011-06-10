<?php

class Plesk_Gateway_Adapter_CommandLine_Arguments
{

	/** @var array */
	protected $_arguments;

	/**
	 * intialize the argument string. optionally supplied an associative
	 * array of arguments
	 * @param array $arguments
	 */
	public function __construct(array $arguments = array())
	{

		$this->_arguments = $arguments;

	}

	/**
	 * get the arguments as a string
	 * @return string
	 */
	public function __toString()
	{

		return (string)$this->_reduce();

	}

	protected function _reduce()
	{

		$args = '';

		foreach ($this->_arguments as $key => $value) {

			if ($args) {
				$args .= ' ';
			}

			if (is_string($key)) {
				$args .= '-' . $key . ' ';

			}

			$args .= escapeshellarg($value);

		}

		return $args;

	}

}
