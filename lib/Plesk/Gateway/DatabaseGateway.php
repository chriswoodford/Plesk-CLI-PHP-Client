<?php

/** @var Plesk_Gateway_Parameters */
require_once 'Plesk/Gateway/Parameters.php';

interface Plesk_Gateway_DatabaseGateway
{

	/**
	 * create a new database
	 * @param Plesk_Gateway_Parameters $params
	 * @return Plesk_Gateway_Response
	 */
	public function create(Plesk_Gateway_Parameters $params);

}