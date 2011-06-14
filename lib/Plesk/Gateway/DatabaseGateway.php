<?php

/** @var Plesk_Gateway_Parameters */
require_once 'Plesk/Gateway/Parameters.php';

interface Plesk_Gateway_DatabaseGateway
{

	/**
	 * create a new database
	 * @param string $name
	 * @param Plesk_Gateway_Parameters $params
	 * @return boolean
	 */
	public function create($name, Plesk_Gateway_Parameters $params);

	/**
	 * delete an existing database
	 * @param string $name
	 * @return boolean
	 */
	public function delete($name);

}
