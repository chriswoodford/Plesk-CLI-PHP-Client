<?php

/** @var Plesk_Gateway_Parameters */
require_once 'Plesk/Gateway/Parameters.php';

interface Plesk_Gateway_CustomerGateway
{

	/**
	 * create a new customer
	 * @param Plesk_Gateway_Parameters $params
	 * @return Plesk_Gateway_Response
	 */
	public function create(Plesk_Gateway_Parameters $params);

}
