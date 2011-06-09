<?php

/** @var Plesk_Gateway_Adapter_CommandLine_Executer */
require_once 'Plesk/Gateway/Adapter/CommandLine/Executer.php';

abstract class Plesk_Gateway_Factory
{

	/**
	 * get an instance of a customer gateway
	 * @return Plesk_Gateway_CustomerGateway
	 */
	abstract public function createCustomerGateway();

	/**
	 * get an instance of a subscription gateway
	 * @return Plesk_Gateway_SubscriptionGateway
	 */
	abstract public function createSubscriptionGateway();

	/**
	 * get an instance of a database gateway
	 * @return Plesk_Gateway_DatabaseGateway
	 */
	abstract public function createDatabaseGateway();

	/**
	 * get an instance of a factory for the CLI
	 * @return Plesk_Gateway_Factory_CliFactory
	 */
	public static function getCliFactory(Plesk_Gateway_Adapter_CommandLine_Executer $exec)
	{

		return new Plesk_Gateway_Factory_CliFactory($exec);

	}

	/**
	 * get an instance of a factory for the XML-RPC API
	 * @return Plesk_Gateway_Factory_XmlRpcFactory
	 */
	public static function getXmlRpcFactory()
	{

	}

}