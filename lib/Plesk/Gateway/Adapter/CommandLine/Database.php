<?php

/** @var Plesk_Gateway_DatabaseGateway */
require_once 'Plesk/Gateway/DatabaseGateway.php';

/** @var Plesk_Gateway_Adapter_CommandLine */
require_once 'Plesk/Gateway/Adapter/CommandLine.php';

class Plesk_Gateway_Adapter_CommandLine_Database
	extends Plesk_Gateway_Adapter_CommandLine
	implements Plesk_Gateway_DatabaseGateway
{

	public function create($name, Plesk_Gateway_Parameters $params)
	{

		$ret = $this->_execute('database', 'create ' . $name, $params);

		if (!$ret->getReturnValue()) {
			return true;
		}

		return false;

	}

	public function delete($name)
	{

		$ret = $this->_execute('database', 'remove ' . $name);

		if (!$ret->getReturnValue()) {
			return true;
		}

		return false;

	}

}
