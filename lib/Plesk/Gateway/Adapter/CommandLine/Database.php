<?php

/** @var Plesk_Gateway_DatabaseGateway */
require_once 'Plesk/Gateway/DatabaseGateway.php';

/** @var Plesk_Gateway_Adapter_CommandLine */
require_once 'Plesk/Gateway/Adapter/CommandLine.php';

class Plesk_Gateway_Adapter_CommandLine_Database
	extends Plesk_Gateway_Adapter_CommandLine
	implements Plesk_Gateway_DatabaseGateway
{

	public function create(Plesk_Gateway_Parameters $params)
	{


	}

}
