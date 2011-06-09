<?php

/** @var Plesk_Gateway_CustomerGateway */
require_once 'Plesk/Gateway/CustomerGateway.php';

/** @var Plesk_Gateway_Adapter_CommandLine */
require_once 'Plesk/Gateway/Adapter/CommandLine.php';

class Plesk_Gateway_Adapter_CommandLine_Customer
	extends Plesk_Gateway_Adapter_CommandLine
	implements Plesk_Gateway_CustomerGateway
{

	public function create(Plesk_Gateway_Parameters $params)
	{

		$ret = $this->_execute('customer', 'create', $params);

	}

}
