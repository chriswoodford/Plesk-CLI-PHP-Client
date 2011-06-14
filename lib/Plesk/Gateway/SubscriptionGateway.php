<?php

/** @var Plesk_Gateway_Parameters */
require_once 'Plesk/Gateway/Parameters.php';

interface Plesk_Gateway_SubscriptionGateway
{

	/**
	 * create a new subscription
	 * @param string $name
	 * @param Plesk_Gateway_Parameters $params
	 * @return boolean
	 */
	public function create($name, Plesk_Gateway_Parameters $params);

	/**
	 * delete an existing subscription
	 * @param string $name
	 * @return boolean
	 */
	public function delete($name);

}
