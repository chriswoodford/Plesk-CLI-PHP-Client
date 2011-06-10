<?php

/** @var Plesk_Gateway_Parameters */
require_once 'Plesk/Gateway/Parameters.php';

interface Plesk_Gateway_DatabaseGateway
{

	/**
	 * create a new database
	 * @param string $name
	 * @param Plesk_Gateway_Parameters $params
	 * @return Plesk_Gateway_Response
	 */
	public function create($name, Plesk_Gateway_Parameters $params);

}
